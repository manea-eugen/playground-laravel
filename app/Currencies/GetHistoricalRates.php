<?php

namespace App\Currencies;

class GetHistoricalRates
{

    /**
     * @var string $Symbols
     */
    protected $Symbols = null;

    /**
     * @var string $AsOfDate
     */
    protected $AsOfDate = null;

    /**
     * @var string $FixingTime
     */
    protected $FixingTime = null;

    /**
     * @var string $PriceType
     */
    protected $PriceType = null;

    /**
     * @param string $Symbols
     * @param string $AsOfDate
     * @param string $FixingTime
     * @param string $PriceType
     */
    public function __construct($Symbols, $AsOfDate, $FixingTime, $PriceType)
    {
      $this->Symbols = $Symbols;
      $this->AsOfDate = $AsOfDate;
      $this->FixingTime = $FixingTime;
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
     * @return \App\Currencies\GetHistoricalRates
     */
    public function setSymbols($Symbols)
    {
      $this->Symbols = $Symbols;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsOfDate()
    {
      return $this->AsOfDate;
    }

    /**
     * @param string $AsOfDate
     * @return \App\Currencies\GetHistoricalRates
     */
    public function setAsOfDate($AsOfDate)
    {
      $this->AsOfDate = $AsOfDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFixingTime()
    {
      return $this->FixingTime;
    }

    /**
     * @param string $FixingTime
     * @return \App\Currencies\GetHistoricalRates
     */
    public function setFixingTime($FixingTime)
    {
      $this->FixingTime = $FixingTime;
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
     * @return \App\Currencies\GetHistoricalRates
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

}
