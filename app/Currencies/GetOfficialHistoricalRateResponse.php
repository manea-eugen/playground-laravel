<?php

namespace App\Currencies;

class GetOfficialHistoricalRateResponse
{

    /**
     * @var HistoricalRate $GetOfficialHistoricalRateResult
     */
    protected $GetOfficialHistoricalRateResult = null;

    /**
     * @param HistoricalRate $GetOfficialHistoricalRateResult
     */
    public function __construct($GetOfficialHistoricalRateResult)
    {
      $this->GetOfficialHistoricalRateResult = $GetOfficialHistoricalRateResult;
    }

    /**
     * @return HistoricalRate
     */
    public function getGetOfficialHistoricalRateResult()
    {
      return $this->GetOfficialHistoricalRateResult;
    }

    /**
     * @param HistoricalRate $GetOfficialHistoricalRateResult
     * @return \App\Currencies\GetOfficialHistoricalRateResponse
     */
    public function setGetOfficialHistoricalRateResult($GetOfficialHistoricalRateResult)
    {
      $this->GetOfficialHistoricalRateResult = $GetOfficialHistoricalRateResult;
      return $this;
    }

}
