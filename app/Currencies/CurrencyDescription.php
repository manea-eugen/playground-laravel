<?php

namespace App\Currencies;

class CurrencyDescription
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $BaseCurrency
     */
    protected $BaseCurrency = null;

    /**
     * @var string $QuoteCurrency
     */
    protected $QuoteCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->Symbol;
    }

    /**
     * @param string $Symbol
     * @return \App\Currencies\CurrencyDescription
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrency()
    {
      return $this->BaseCurrency;
    }

    /**
     * @param string $BaseCurrency
     * @return \App\Currencies\CurrencyDescription
     */
    public function setBaseCurrency($BaseCurrency)
    {
      $this->BaseCurrency = $BaseCurrency;
      return $this;
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
     * @return \App\Currencies\CurrencyDescription
     */
    public function setQuoteCurrency($QuoteCurrency)
    {
      $this->QuoteCurrency = $QuoteCurrency;
      return $this;
    }

}
