<?php

namespace App\Currencies;

class GetLatestCrossRatesResponse
{

    /**
     * @var ArrayOfRate $GetLatestCrossRatesResult
     */
    protected $GetLatestCrossRatesResult = null;

    /**
     * @param ArrayOfRate $GetLatestCrossRatesResult
     */
    public function __construct($GetLatestCrossRatesResult)
    {
      $this->GetLatestCrossRatesResult = $GetLatestCrossRatesResult;
    }

    /**
     * @return ArrayOfRate
     */
    public function getGetLatestCrossRatesResult()
    {
      return $this->GetLatestCrossRatesResult;
    }

    /**
     * @param ArrayOfRate $GetLatestCrossRatesResult
     * @return \App\Currencies\GetLatestCrossRatesResponse
     */
    public function setGetLatestCrossRatesResult($GetLatestCrossRatesResult)
    {
      $this->GetLatestCrossRatesResult = $GetLatestCrossRatesResult;
      return $this;
    }

}
