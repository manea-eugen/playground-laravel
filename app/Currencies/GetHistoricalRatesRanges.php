<?php

namespace App\Currencies;

class GetHistoricalRatesRanges
{

    /**
     * @var string $Symbols
     */
    protected $Symbols = null;

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
     * @param string $Symbols
     * @param string $StartDate
     * @param string $EndDate
     * @param string $FixingTime
     * @param string $PeriodType
     * @param string $PriceType
     */
    public function __construct($Symbols, $StartDate, $EndDate, $FixingTime, $PeriodType, $PriceType)
    {
      $this->Symbols = $Symbols;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->FixingTime = $FixingTime;
      $this->PeriodType = $PeriodType;
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
     * @return \App\Currencies\GetHistoricalRatesRanges
     */
    public function setSymbols($Symbols)
    {
      $this->Symbols = $Symbols;
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
     * @return \App\Currencies\GetHistoricalRatesRanges
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
     * @return \App\Currencies\GetHistoricalRatesRanges
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
     * @return \App\Currencies\GetHistoricalRatesRanges
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
     * @return \App\Currencies\GetHistoricalRatesRanges
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
     * @return \App\Currencies\GetHistoricalRatesRanges
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

}
