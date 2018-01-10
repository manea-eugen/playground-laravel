<?php

namespace App\Currencies;

class GetBars
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
     * @var string $StartTime
     */
    protected $StartTime = null;

    /**
     * @var string $EndTime
     */
    protected $EndTime = null;

    /**
     * @var string $PriceType
     */
    protected $PriceType = null;

    /**
     * @var string $TickPrecision
     */
    protected $TickPrecision = null;

    /**
     * @var int $TickPeriods
     */
    protected $TickPeriods = null;

    /**
     * @param string $Symbol
     * @param string $AsOfDate
     * @param string $StartTime
     * @param string $EndTime
     * @param string $PriceType
     * @param string $TickPrecision
     * @param int $TickPeriods
     */
    public function __construct($Symbol, $AsOfDate, $StartTime, $EndTime, $PriceType, $TickPrecision, $TickPeriods)
    {
      $this->Symbol = $Symbol;
      $this->AsOfDate = $AsOfDate;
      $this->StartTime = $StartTime;
      $this->EndTime = $EndTime;
      $this->PriceType = $PriceType;
      $this->TickPrecision = $TickPrecision;
      $this->TickPeriods = $TickPeriods;
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
     * @return \App\Currencies\GetBars
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
     * @return \App\Currencies\GetBars
     */
    public function setAsOfDate($AsOfDate)
    {
      $this->AsOfDate = $AsOfDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
      return $this->StartTime;
    }

    /**
     * @param string $StartTime
     * @return \App\Currencies\GetBars
     */
    public function setStartTime($StartTime)
    {
      $this->StartTime = $StartTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
      return $this->EndTime;
    }

    /**
     * @param string $EndTime
     * @return \App\Currencies\GetBars
     */
    public function setEndTime($EndTime)
    {
      $this->EndTime = $EndTime;
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
     * @return \App\Currencies\GetBars
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTickPrecision()
    {
      return $this->TickPrecision;
    }

    /**
     * @param string $TickPrecision
     * @return \App\Currencies\GetBars
     */
    public function setTickPrecision($TickPrecision)
    {
      $this->TickPrecision = $TickPrecision;
      return $this;
    }

    /**
     * @return int
     */
    public function getTickPeriods()
    {
      return $this->TickPeriods;
    }

    /**
     * @param int $TickPeriods
     * @return \App\Currencies\GetBars
     */
    public function setTickPeriods($TickPeriods)
    {
      $this->TickPeriods = $TickPeriods;
      return $this;
    }

}
