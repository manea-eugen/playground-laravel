<?php

namespace App\Currencies;

class GetRealTimeRateResponse
{

    /**
     * @var Rate $GetRealTimeRateResult
     */
    protected $GetRealTimeRateResult = null;

    /**
     * @param Rate $GetRealTimeRateResult
     */
    public function __construct($GetRealTimeRateResult)
    {
      $this->GetRealTimeRateResult = $GetRealTimeRateResult;
    }

    /**
     * @return Rate
     */
    public function getGetRealTimeRateResult()
    {
      return $this->GetRealTimeRateResult;
    }

    /**
     * @param Rate $GetRealTimeRateResult
     * @return \App\Currencies\GetRealTimeRateResponse
     */
    public function setGetRealTimeRateResult($GetRealTimeRateResult)
    {
      $this->GetRealTimeRateResult = $GetRealTimeRateResult;
      return $this;
    }

}
