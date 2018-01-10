<?php

namespace App\Currencies;

class GetLatestHistoricalRatesResponse
{

    /**
     * @var ArrayOfHistoricalRate $GetLatestHistoricalRatesResult
     */
    protected $GetLatestHistoricalRatesResult = null;

    /**
     * @param ArrayOfHistoricalRate $GetLatestHistoricalRatesResult
     */
    public function __construct($GetLatestHistoricalRatesResult)
    {
      $this->GetLatestHistoricalRatesResult = $GetLatestHistoricalRatesResult;
    }

    /**
     * @return ArrayOfHistoricalRate
     */
    public function getGetLatestHistoricalRatesResult()
    {
      return $this->GetLatestHistoricalRatesResult;
    }

    /**
     * @param ArrayOfHistoricalRate $GetLatestHistoricalRatesResult
     * @return \App\Currencies\GetLatestHistoricalRatesResponse
     */
    public function setGetLatestHistoricalRatesResult($GetLatestHistoricalRatesResult)
    {
      $this->GetLatestHistoricalRatesResult = $GetLatestHistoricalRatesResult;
      return $this;
    }

}
