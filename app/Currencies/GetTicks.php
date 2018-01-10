<?php

namespace App\Currencies;

class GetTicks
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
     * @param string $Symbol
     * @param string $AsOfDate
     * @param string $StartTime
     * @param string $EndTime
     */
    public function __construct($Symbol, $AsOfDate, $StartTime, $EndTime)
    {
      $this->Symbol = $Symbol;
      $this->AsOfDate = $AsOfDate;
      $this->StartTime = $StartTime;
      $this->EndTime = $EndTime;
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
     * @return \App\Currencies\GetTicks
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
     * @return \App\Currencies\GetTicks
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
     * @return \App\Currencies\GetTicks
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
     * @return \App\Currencies\GetTicks
     */
    public function setEndTime($EndTime)
    {
      $this->EndTime = $EndTime;
      return $this;
    }

}
