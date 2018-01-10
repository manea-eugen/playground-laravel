<?php

namespace App\Currencies;

class ListOfficialRatesResponse
{

    /**
     * @var OfficialRates $ListOfficialRatesResult
     */
    protected $ListOfficialRatesResult = null;

    /**
     * @param OfficialRates $ListOfficialRatesResult
     */
    public function __construct($ListOfficialRatesResult)
    {
      $this->ListOfficialRatesResult = $ListOfficialRatesResult;
    }

    /**
     * @return OfficialRates
     */
    public function getListOfficialRatesResult()
    {
      return $this->ListOfficialRatesResult;
    }

    /**
     * @param OfficialRates $ListOfficialRatesResult
     * @return \App\Currencies\ListOfficialRatesResponse
     */
    public function setListOfficialRatesResult($ListOfficialRatesResult)
    {
      $this->ListOfficialRatesResult = $ListOfficialRatesResult;
      return $this;
    }

}
