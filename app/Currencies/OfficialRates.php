<?php

namespace App\Currencies;

class OfficialRates extends Common
{

    /**
     * @var ArrayOfOfficialCountry $CountryList
     */
    protected $CountryList = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     */
    public function __construct($Outcome, $Delay)
    {
      parent::__construct($Outcome, $Delay);
    }

    /**
     * @return ArrayOfOfficialCountry
     */
    public function getCountryList()
    {
      return $this->CountryList;
    }

    /**
     * @param ArrayOfOfficialCountry $CountryList
     * @return \App\Currencies\OfficialRates
     */
    public function setCountryList($CountryList)
    {
      $this->CountryList = $CountryList;
      return $this;
    }

}
