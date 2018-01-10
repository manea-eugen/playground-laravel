<?php

namespace App\Currencies;

class GetBar
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
     * @var string $PriceType
     */
    protected $PriceType = null;

    /**
     * @param string $Symbol
     * @param string $AsOfDate
     * @param string $AsOfTime
     * @param string $PriceType
     */
    public function __construct($Symbol, $AsOfDate, $AsOfTime, $PriceType)
    {
      $this->Symbol = $Symbol;
      $this->AsOfDate = $AsOfDate;
      $this->AsOfTime = $AsOfTime;
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
     * @return \App\Currencies\GetBar
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
     * @return \App\Currencies\GetBar
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
     * @return \App\Currencies\GetBar
     */
    public function setAsOfTime($AsOfTime)
    {
      $this->AsOfTime = $AsOfTime;
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
     * @return \App\Currencies\GetBar
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

}
