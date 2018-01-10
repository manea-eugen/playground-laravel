<?php

namespace App\Currencies;

class GetRealTimeRateTable
{

    /**
     * @var string $Symbols
     */
    protected $Symbols = null;

    /**
     * @var string $PriceType
     */
    protected $PriceType = null;

    /**
     * @param string $Symbols
     * @param string $PriceType
     */
    public function __construct($Symbols, $PriceType)
    {
      $this->Symbols = $Symbols;
      $this->PriceType = $PriceType;
    }

    /**
     * @return string
     */
    public function getSymbols()
    {
      return $this->Symbols;
    }

    /**
     * @param string $Symbols
     * @return \App\Currencies\GetRealTimeRateTable
     */
    public function setSymbols($Symbols)
    {
      $this->Symbols = $Symbols;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceType()
    {
      return $this->PriceType;
    }

    /**
     * @param string $PriceType
     * @return \App\Currencies\GetRealTimeRateTable
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

}
