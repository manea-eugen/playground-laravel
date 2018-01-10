<?php

namespace App\Currencies;

class GetHistoricalRate
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

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
     * @param string $Symbol
     * @param string $AsOfDate
     * @param string $FixingTime
     * @param string $PriceType
     */
    public function __construct($Symbol, $AsOfDate, $FixingTime, $PriceType)
    {
      $this->Symbol = $Symbol;
      $this->AsOfDate = $AsOfDate;
      $this->FixingTime = $FixingTime;
      $this->PriceType = $PriceType;
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
     * @return \App\Currencies\GetHistoricalRate
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
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
     * @return \App\Currencies\GetHistoricalRate
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
     * @return \App\Currencies\GetHistoricalRate
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
     * @return \App\Currencies\GetHistoricalRate
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

}
