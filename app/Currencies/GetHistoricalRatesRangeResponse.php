<?php

namespace App\Currencies;

class GetHistoricalRatesRangeResponse
{

    /**
     * @var ArrayOfHistoricalRate $GetHistoricalRatesRangeResult
     */
    protected $GetHistoricalRatesRangeResult = null;

    /**
     * @param ArrayOfHistoricalRate $GetHistoricalRatesRangeResult
     */
    public function __construct($GetHistoricalRatesRangeResult)
    {
      $this->GetHistoricalRatesRangeResult = $GetHistoricalRatesRangeResult;
    }

    /**
     * @return ArrayOfHistoricalRate
     */
    public function getGetHistoricalRatesRangeResult()
    {
      return $this->GetHistoricalRatesRangeResult;
    }

    /**
     * @param ArrayOfHistoricalRate $GetHistoricalRatesRangeResult
     * @return \App\Currencies\GetHistoricalRatesRangeResponse
     */
    public function setGetHistoricalRatesRangeResult($GetHistoricalRatesRangeResult)
    {
      $this->GetHistoricalRatesRangeResult = $GetHistoricalRatesRangeResult;
      return $this;
    }

}
