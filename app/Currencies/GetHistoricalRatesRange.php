<?php

namespace App\Currencies;

class GetHistoricalRatesRange
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $FixingTime
     */
    protected $FixingTime = null;

    /**
     * @var string $PeriodType
     */
    protected $PeriodType = null;

    /**
     * @var string $PriceType
     */
    protected $PriceType = null;

    /**
     * @param string $Symbol
     * @param string $StartDate
     * @param string $EndDate
     * @param string $FixingTime
     * @param string $PeriodType
     * @param string $PriceType
     */
    public function __construct($Symbol, $StartDate, $EndDate, $FixingTime, $PeriodType, $PriceType)
    {
      $this->Symbol = $Symbol;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->FixingTime = $FixingTime;
      $this->PeriodType = $PeriodType;
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
     * @return \App\Currencies\GetHistoricalRatesRange
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return \App\Currencies\GetHistoricalRatesRange
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \App\Currencies\GetHistoricalRatesRange
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
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
     * @return \App\Currencies\GetHistoricalRatesRange
     */
    public function setFixingTime($FixingTime)
    {
      $this->FixingTime = $FixingTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getPeriodType()
    {
      return $this->PeriodType;
    }

    /**
     * @param string $PeriodType
     * @return \App\Currencies\GetHistoricalRatesRange
     */
    public function setPeriodType($PeriodType)
    {
      $this->PeriodType = $PeriodType;
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
     * @return \App\Currencies\GetHistoricalRatesRange
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

}
