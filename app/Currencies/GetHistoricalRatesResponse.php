<?php

namespace App\Currencies;

class GetHistoricalRatesResponse
{

    /**
     * @var ArrayOfHistoricalRate $GetHistoricalRatesResult
     */
    protected $GetHistoricalRatesResult = null;

    /**
     * @param ArrayOfHistoricalRate $GetHistoricalRatesResult
     */
    public function __construct($GetHistoricalRatesResult)
    {
      $this->GetHistoricalRatesResult = $GetHistoricalRatesResult;
    }

    /**
     * @return ArrayOfHistoricalRate
     */
    public function getGetHistoricalRatesResult()
    {
      return $this->GetHistoricalRatesResult;
    }

    /**
     * @param ArrayOfHistoricalRate $GetHistoricalRatesResult
     * @return \App\Currencies\GetHistoricalRatesResponse
     */
    public function setGetHistoricalRatesResult($GetHistoricalRatesResult)
    {
      $this->GetHistoricalRatesResult = $GetHistoricalRatesResult;
      return $this;
    }

}
