<?php

namespace Biplane\YandexDirectBundle\Service;

use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Biplane\YandexDirectBundle\Contract\NewForecastInfo;
use Biplane\YandexDirectBundle\Contract\ForecastStatusInfo;
use Biplane\YandexDirectBundle\Exception\ApiException;

/**
 * Предоставляет высокоуровневый интерфейс по работе с прогнозами через API Яндекс.Директа.
 *
 * При успешном получении готового прогноза, он автоматически удаляется из очереди заявок.
 * 
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ForecastService 
{
    const MAX_QUEUE = 5;
    const MAX_PHRASES = 100;

    private $apiService;

    /**
     * Constructor.
     *
     * @param YandexApiService $apiService The YandexApiService instance
     */
    public function __construct(YandexApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    /**
     * Создает заявку на формирование нового прогноза.
     *
     * @param array $phrases
     * @param array $geoIds
     *
     * @return int
     *
     * @throws ApiException
     * @throws \InvalidArgumentException
     */
    public function create(array $phrases, array $geoIds = array())
    {
        if (count($phrases) > self::MAX_PHRASES) {
            throw new \InvalidArgumentException(
                sprintf('Number (%d) of phrases cannot be greater than %d.', count($phrases), self::MAX_PHRASES)
            );
        }

        $params = NewForecastInfo::create()
            ->setPhrases($phrases)
            ->setGeoID($geoIds);

        return $this->apiService->createNewForecast($params);
    }

    /**
     * Получает готовый прогноз по указанному ID.
     *
     * Если прогноз не найден или не готов, то будет выбрашено исключение ApiException.
     * Проверить статус прогноза можно через метод {@link isReady()}.
     *
     * @param int $forecastId
     *
     * @return \Biplane\YandexDirectBundle\Contract\GetForecastInfo
     *
     * @throws ApiException
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function get($forecastId)
    {
        $this->checkForecastId($forecastId);

        $forecast = $this->apiService->getForecast($forecastId);
        $this->apiService->deleteForecastReport($forecastId);

        return $forecast;
    }

    /**
     * Проверяет, заполнена ли очередь с заявками на прогнозы или нет.
     *
     * @return bool
     *
     * @throws ApiException
     */
    public function isFullQueue()
    {
        return count($this->apiService->getForecastList()) >= self::MAX_QUEUE;
    }

    /**
     * Проверяет, готов ли прогноз с указанным ID или нет.
     * 
     * @param int $forecastId
     *
     * @return bool
     *
     * @throws ApiException
     * @throws \InvalidArgumentException
     * @throws \LogicException Когда $forecastId не найден в списке заявок прогнозов.
     */
    public function isReady($forecastId)
    {
        $this->checkForecastId($forecastId);

        /** @var $item \Biplane\YandexDirectBundle\Contract\ForecastStatusInfo */
        foreach ($this->apiService->getForecastList() as $item) {
            if ($item->getForecastId() === $forecastId) {
                return $item->getStatusForecast() === ForecastStatusInfo::STATUS_DONE;
            }
        }

        throw new \LogicException(sprintf('Forecast #%d is not found.', $forecastId));
    }

    /**
     * Checks a forecast identifier.
     *
     * @param mixed $id A forecast identifier
     *
     * @throws \InvalidArgumentException
     */
    private function checkForecastId($id)
    {
        if (!is_int($id)) {
            throw new \InvalidArgumentException(sprintf(
                'Expected a forecast ID of type the integer, %s given.', gettype($id)
            ));
        }
        else if ($id < 1) {
            throw new \InvalidArgumentException('Forecast ID should be greater than 0.');
        }
    }
}