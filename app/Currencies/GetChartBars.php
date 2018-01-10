<?php

namespace App\Currencies;

class GetChartBars
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

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
     * @var string $Precision
     */
    protected $Precision = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @param string $Symbol
     * @param string $StartTime
     * @param string $EndTime
     * @param string $PriceType
     * @param string $Precision
     * @param int $Period
     */
    public function __construct($Symbol, $StartTime, $EndTime, $PriceType, $Precision, $Period)
    {
      $this->Symbol = $Symbol;
      $this->StartTime = $StartTime;
      $this->EndTime = $EndTime;
      $this->PriceType = $PriceType;
      $this->Precision = $Precision;
      $this->Period = $Period;
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
     * @return \App\Currencies\GetChartBars
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
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
     * @return \App\Currencies\GetChartBars
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
     * @return \App\Currencies\GetChartBars
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
     * @return \App\Currencies\GetChartBars
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrecision()
    {
      return $this->Precision;
    }

    /**
     * @param string $Precision
     * @return \App\Currencies\GetChartBars
     */
    public function setPrecision($Precision)
    {
      $this->Precision = $Precision;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return \App\Currencies\GetChartBars
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

}
