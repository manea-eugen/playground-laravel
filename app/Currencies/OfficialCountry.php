<?php

namespace App\Currencies;

class OfficialCountry
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var ArrayOfOfficialCurrency $OfficialCurrencies
     */
    protected $OfficialCurrencies = null;

    
    public function __construct()
    {
    
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
     * @return \App\Currencies\OfficialCountry
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return ArrayOfOfficialCurrency
     */
    public function getOfficialCurrencies()
    {
      return $this->OfficialCurrencies;
    }

    /**
     * @param ArrayOfOfficialCurrency $OfficialCurrencies
     * @return \App\Currencies\OfficialCountry
     */
    public function setOfficialCurrencies($OfficialCurrencies)
    {
      $this->OfficialCurrencies = $OfficialCurrencies;
      return $this;
    }

}
