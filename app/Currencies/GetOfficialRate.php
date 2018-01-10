<?php

namespace App\Currencies;

class GetOfficialRate
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $AsOfDate
     */
    protected $AsOfDate = null;

    /**
     * @param string $Country
     * @param string $Symbol
     * @param string $AsOfDate
     */
    public function __construct($Country, $Symbol, $AsOfDate)
    {
      $this->Country = $Country;
      $this->Symbol = $Symbol;
      $this->AsOfDate = $AsOfDate;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \App\Currencies\GetOfficialRate
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
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
     * @return \App\Currencies\GetOfficialRate
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
     * @return \App\Currencies\GetOfficialRate
     */
    public function setAsOfDate($AsOfDate)
    {
      $this->AsOfDate = $AsOfDate;
      return $this;
    }

}
