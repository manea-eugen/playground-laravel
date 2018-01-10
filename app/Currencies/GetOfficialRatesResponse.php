<?php

namespace App\Currencies;

class GetOfficialRatesResponse
{

    /**
     * @var ArrayOfHistoricalRateBidAsk $GetOfficialRatesResult
     */
    protected $GetOfficialRatesResult = null;

    /**
     * @param ArrayOfHistoricalRateBidAsk $GetOfficialRatesResult
     */
    public function __construct($GetOfficialRatesResult)
    {
      $this->GetOfficialRatesResult = $GetOfficialRatesResult;
    }

    /**
     * @return ArrayOfHistoricalRateBidAsk
     */
    public function getGetOfficialRatesResult()
    {
      return $this->GetOfficialRatesResult;
    }

    /**
     * @param ArrayOfHistoricalRateBidAsk $GetOfficialRatesResult
     * @return \App\Currencies\GetOfficialRatesResponse
     */
    public function setGetOfficialRatesResult($GetOfficialRatesResult)
    {
      $this->GetOfficialRatesResult = $GetOfficialRatesResult;
      return $this;
    }

}
