<?php

namespace App\Currencies;

class GetTick
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
     * @var string $AsOfTime
     */
    protected $AsOfTime = null;

    /**
     * @param string $Symbol
     * @param string $AsOfDate
     * @param string $AsOfTime
     */
    public function __construct($Symbol, $AsOfDate, $AsOfTime)
    {
      $this->Symbol = $Symbol;
      $this->AsOfDate = $AsOfDate;
      $this->AsOfTime = $AsOfTime;
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
     * @return \App\Currencies\GetTick
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
     * @return \App\Currencies\GetTick
     */
    public function setAsOfDate($AsOfDate)
    {
      $this->AsOfDate = $AsOfDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsOfTime()
    {
      return $this->AsOfTime;
    }

    /**
     * @param string $AsOfTime
     * @return \App\Currencies\GetTick
     */
    public function setAsOfTime($AsOfTime)
    {
      $this->AsOfTime = $AsOfTime;
      return $this;
    }

}
