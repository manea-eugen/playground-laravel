<?php

namespace App\Currencies;

class GetOfficialRates
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Symbols
     */
    protected $Symbols = null;

    /**
     * @var string $AsOfDate
     */
    protected $AsOfDate = null;

    /**
     * @param string $Country
     * @param string $Symbols
     * @param string $AsOfDate
     */
    public function __construct($Country, $Symbols, $AsOfDate)
    {
      $this->Country = $Country;
      $this->Symbols = $Symbols;
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
     * @return \App\Currencies\GetOfficialRates
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
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
     * @return \App\Currencies\GetOfficialRates
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
     * @return \App\Currencies\GetOfficialRates
     */
    public function setAsOfDate($AsOfDate)
    {
      $this->AsOfDate = $AsOfDate;
      return $this;
    }

}
