<?php

namespace Biplane\YandexDirectBundle\Factory;

use Biplane\YandexDirectBundle\Converter\ArrayConverter;
use Biplane\YandexDirectBundle\Converter\ContractConverter;
use Biplane\YandexDirectBundle\Converter\ConverterInterface;

/**
 * ConverterFactory
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ConverterFactory 
{
    const CONTRACT_NS = '\\Biplane\\YandexDirectBundle\\Contract';

    private static $converters = array();
    private static $methods = array(
        'CreateNewForecast', 'GetForecast', 'GetForecastList', 'DeleteForecastReport'
    );
    
    /**
     * @param string $methodName
     * @return ConverterInterface
     */
    public function createForParameters($methodName)
    {
        if (!$this->supportsMethod($methodName)) {
            throw new \InvalidArgumentException(sprintf('Method %s is not supported.', $methodName));
        }

        $tag = $methodName . '_params';

        if (array_key_exists($tag, self::$converters)) {
            return self::$converters[$tag];
        }

        $creator = 'params' . $methodName;

        $converter = method_exists($this, $creator) ? $this->$creator() : null;
        self::$converters[$tag] = $converter;

        return $converter;
    }

    /**
     * @param string $methodName
     * @return ConverterInterface
     */
    public function createForResult($methodName)
    {
        if (!$this->supportsMethod($methodName)) {
            throw new \InvalidArgumentException(sprintf('Method %s is not supported.', $methodName));
        }

        $tag = $methodName . '_result';

        if (array_key_exists($tag, self::$converters)) {
            return self::$converters[$tag];
        }

        $creator = 'result' . $methodName;

        $converter = method_exists($this, $creator) ? $this->$creator() : null;
        self::$converters[$tag] = $converter;

        return $converter;
    }

    /**
     * @param string $methodName
     * @return bool
     */
    public function supportsMethod($methodName)
    {
        return in_array($methodName, self::$methods);
    }

    protected function paramsCreateNewForecast()
    {
        return new ContractConverter(self::CONTRACT_NS . '\\NewForecastInfo');
    }

    protected function resultGetForecast()
    {
        $bannerPhraseConverter = new ContractConverter(self::CONTRACT_NS . '\\BannerPhraseInfo');

        $converter = new ContractConverter(self::CONTRACT_NS . '\\GetForecastInfo');
        $converter->setChildConverter('Categories', new ArrayConverter($bannerPhraseConverter));
        $converter->setChildConverter('Phrases', new ArrayConverter($bannerPhraseConverter));
        $converter->setChildConverter('Common', new ContractConverter(self::CONTRACT_NS . '\\ForecastCommonInfo'));

        return $converter;
    }

    protected function resultGetForecastList()
    {
        return new ArrayConverter(
            new ContractConverter(self::CONTRACT_NS . '\\ForecastStatusInfo')
        );
    }
}