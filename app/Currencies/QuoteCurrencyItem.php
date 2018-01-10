<?php

namespace App\Currencies;

class QuoteCurrencyItem
{

    /**
     * @var string $QuoteCurrency
     */
    protected $QuoteCurrency = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @param float $Rate
     */
    public function __construct($Rate)
    {
      $this->Rate = $Rate;
    }

    /**
     * @return string
     */
    public function getQuoteCurrency()
    {
      return $this->QuoteCurrency;
    }

    /**
     * @param string $QuoteCurrency
     * @return \App\Currencies\QuoteCurrencyItem
     */
    public function setQuoteCurrency($QuoteCurrency)
    {
      $this->QuoteCurrency = $QuoteCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \App\Currencies\QuoteCurrencyItem
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

}
