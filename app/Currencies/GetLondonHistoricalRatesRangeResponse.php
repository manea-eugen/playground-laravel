<?php

namespace App\Currencies;

class GetLondonHistoricalRatesRangeResponse
{

    /**
     * @var ArrayOfHistoricalRate $GetLondonHistoricalRatesRangeResult
     */
    protected $GetLondonHistoricalRatesRangeResult = null;

    /**
     * @param ArrayOfHistoricalRate $GetLondonHistoricalRatesRangeResult
     */
    public function __construct($GetLondonHistoricalRatesRangeResult)
    {
      $this->GetLondonHistoricalRatesRangeResult = $GetLondonHistoricalRatesRangeResult;
    }

    /**
     * @return ArrayOfHistoricalRate
     */
    public function getGetLondonHistoricalRatesRangeResult()
    {
      return $this->GetLondonHistoricalRatesRangeResult;
    }

    /**
     * @param ArrayOfHistoricalRate $GetLondonHistoricalRatesRangeResult
     * @return \App\Currencies\GetLondonHistoricalRatesRangeResponse
     */
    public function setGetLondonHistoricalRatesRangeResult($GetLondonHistoricalRatesRangeResult)
    {
      $this->GetLondonHistoricalRatesRangeResult = $GetLondonHistoricalRatesRangeResult;
      return $this;
    }

}
