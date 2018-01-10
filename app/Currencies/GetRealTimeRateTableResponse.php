<?php

namespace App\Currencies;

class GetRealTimeRateTableResponse
{

    /**
     * @var RateTable $GetRealTimeRateTableResult
     */
    protected $GetRealTimeRateTableResult = null;

    /**
     * @param RateTable $GetRealTimeRateTableResult
     */
    public function __construct($GetRealTimeRateTableResult)
    {
      $this->GetRealTimeRateTableResult = $GetRealTimeRateTableResult;
    }

    /**
     * @return RateTable
     */
    public function getGetRealTimeRateTableResult()
    {
      return $this->GetRealTimeRateTableResult;
    }

    /**
     * @param RateTable $GetRealTimeRateTableResult
     * @return \App\Currencies\GetRealTimeRateTableResponse
     */
    public function setGetRealTimeRateTableResult($GetRealTimeRateTableResult)
    {
      $this->GetRealTimeRateTableResult = $GetRealTimeRateTableResult;
      return $this;
    }

}
