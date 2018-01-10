<?php

namespace App\Currencies;

class GetHistoricalRateResponse
{

    /**
     * @var HistoricalRate $GetHistoricalRateResult
     */
    protected $GetHistoricalRateResult = null;

    /**
     * @param HistoricalRate $GetHistoricalRateResult
     */
    public function __construct($GetHistoricalRateResult)
    {
      $this->GetHistoricalRateResult = $GetHistoricalRateResult;
    }

    /**
     * @return HistoricalRate
     */
    public function getGetHistoricalRateResult()
    {
      return $this->GetHistoricalRateResult;
    }

    /**
     * @param HistoricalRate $GetHistoricalRateResult
     * @return \App\Currencies\GetHistoricalRateResponse
     */
    public function setGetHistoricalRateResult($GetHistoricalRateResult)
    {
      $this->GetHistoricalRateResult = $GetHistoricalRateResult;
      return $this;
    }

}
