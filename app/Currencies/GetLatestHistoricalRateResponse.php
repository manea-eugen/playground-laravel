<?php

namespace App\Currencies;

class GetLatestHistoricalRateResponse
{

    /**
     * @var HistoricalRate $GetLatestHistoricalRateResult
     */
    protected $GetLatestHistoricalRateResult = null;

    /**
     * @param HistoricalRate $GetLatestHistoricalRateResult
     */
    public function __construct($GetLatestHistoricalRateResult)
    {
      $this->GetLatestHistoricalRateResult = $GetLatestHistoricalRateResult;
    }

    /**
     * @return HistoricalRate
     */
    public function getGetLatestHistoricalRateResult()
    {
      return $this->GetLatestHistoricalRateResult;
    }

    /**
     * @param HistoricalRate $GetLatestHistoricalRateResult
     * @return \App\Currencies\GetLatestHistoricalRateResponse
     */
    public function setGetLatestHistoricalRateResult($GetLatestHistoricalRateResult)
    {
      $this->GetLatestHistoricalRateResult = $GetLatestHistoricalRateResult;
      return $this;
    }

}
