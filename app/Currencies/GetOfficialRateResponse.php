<?php

namespace App\Currencies;

class GetOfficialRateResponse
{

    /**
     * @var HistoricalRateBidAsk $GetOfficialRateResult
     */
    protected $GetOfficialRateResult = null;

    /**
     * @param HistoricalRateBidAsk $GetOfficialRateResult
     */
    public function __construct($GetOfficialRateResult)
    {
      $this->GetOfficialRateResult = $GetOfficialRateResult;
    }

    /**
     * @return HistoricalRateBidAsk
     */
    public function getGetOfficialRateResult()
    {
      return $this->GetOfficialRateResult;
    }

    /**
     * @param HistoricalRateBidAsk $GetOfficialRateResult
     * @return \App\Currencies\GetOfficialRateResponse
     */
    public function setGetOfficialRateResult($GetOfficialRateResult)
    {
      $this->GetOfficialRateResult = $GetOfficialRateResult;
      return $this;
    }

}
