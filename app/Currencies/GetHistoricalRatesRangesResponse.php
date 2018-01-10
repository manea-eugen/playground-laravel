<?php

namespace App\Currencies;

class GetHistoricalRatesRangesResponse
{

    /**
     * @var ArrayOfHistoricalRate $GetHistoricalRatesRangesResult
     */
    protected $GetHistoricalRatesRangesResult = null;

    /**
     * @param ArrayOfHistoricalRate $GetHistoricalRatesRangesResult
     */
    public function __construct($GetHistoricalRatesRangesResult)
    {
      $this->GetHistoricalRatesRangesResult = $GetHistoricalRatesRangesResult;
    }

    /**
     * @return ArrayOfHistoricalRate
     */
    public function getGetHistoricalRatesRangesResult()
    {
      return $this->GetHistoricalRatesRangesResult;
    }

    /**
     * @param ArrayOfHistoricalRate $GetHistoricalRatesRangesResult
     * @return \App\Currencies\GetHistoricalRatesRangesResponse
     */
    public function setGetHistoricalRatesRangesResult($GetHistoricalRatesRangesResult)
    {
      $this->GetHistoricalRatesRangesResult = $GetHistoricalRatesRangesResult;
      return $this;
    }

}
