<?php

namespace App\Currencies;

class GetBestCrossRateResponse
{

    /**
     * @var Rate $GetBestCrossRateResult
     */
    protected $GetBestCrossRateResult = null;

    /**
     * @param Rate $GetBestCrossRateResult
     */
    public function __construct($GetBestCrossRateResult)
    {
      $this->GetBestCrossRateResult = $GetBestCrossRateResult;
    }

    /**
     * @return Rate
     */
    public function getGetBestCrossRateResult()
    {
      return $this->GetBestCrossRateResult;
    }

    /**
     * @param Rate $GetBestCrossRateResult
     * @return \App\Currencies\GetBestCrossRateResponse
     */
    public function setGetBestCrossRateResult($GetBestCrossRateResult)
    {
      $this->GetBestCrossRateResult = $GetBestCrossRateResult;
      return $this;
    }

}
