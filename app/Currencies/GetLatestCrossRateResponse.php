<?php

namespace App\Currencies;

class GetLatestCrossRateResponse
{

    /**
     * @var Rate $GetLatestCrossRateResult
     */
    protected $GetLatestCrossRateResult = null;

    /**
     * @param Rate $GetLatestCrossRateResult
     */
    public function __construct($GetLatestCrossRateResult)
    {
      $this->GetLatestCrossRateResult = $GetLatestCrossRateResult;
    }

    /**
     * @return Rate
     */
    public function getGetLatestCrossRateResult()
    {
      return $this->GetLatestCrossRateResult;
    }

    /**
     * @param Rate $GetLatestCrossRateResult
     * @return \App\Currencies\GetLatestCrossRateResponse
     */
    public function setGetLatestCrossRateResult($GetLatestCrossRateResult)
    {
      $this->GetLatestCrossRateResult = $GetLatestCrossRateResult;
      return $this;
    }

}
