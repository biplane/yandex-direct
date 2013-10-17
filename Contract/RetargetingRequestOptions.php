<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingRequestOptions
{
    /**
     * @var string
     */
    protected $Currency;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return RetargetingRequestOptions
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}