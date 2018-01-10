<?php

namespace App\Currencies;

class GetOfficialHistoricalRatesResponse
{

    /**
     * @var ArrayOfHistoricalRate $GetOfficialHistoricalRatesResult
     */
    protected $GetOfficialHistoricalRatesResult = null;

    /**
     * @param ArrayOfHistoricalRate $GetOfficialHistoricalRatesResult
     */
    public function __construct($GetOfficialHistoricalRatesResult)
    {
      $this->GetOfficialHistoricalRatesResult = $GetOfficialHistoricalRatesResult;
    }

    /**
     * @return ArrayOfHistoricalRate
     */
    public function getGetOfficialHistoricalRatesResult()
    {
      return $this->GetOfficialHistoricalRatesResult;
    }

    /**
     * @param ArrayOfHistoricalRate $GetOfficialHistoricalRatesResult
     * @return \App\Currencies\GetOfficialHistoricalRatesResponse
     */
    public function setGetOfficialHistoricalRatesResult($GetOfficialHistoricalRatesResult)
    {
      $this->GetOfficialHistoricalRatesResult = $GetOfficialHistoricalRatesResult;
      return $this;
    }

}
