<?php

namespace App\Currencies;

class GetRealTimeRatesResponse
{

    /**
     * @var ArrayOfRate $GetRealTimeRatesResult
     */
    protected $GetRealTimeRatesResult = null;

    /**
     * @param ArrayOfRate $GetRealTimeRatesResult
     */
    public function __construct($GetRealTimeRatesResult)
    {
      $this->GetRealTimeRatesResult = $GetRealTimeRatesResult;
    }

    /**
     * @return ArrayOfRate
     */
    public function getGetRealTimeRatesResult()
    {
      return $this->GetRealTimeRatesResult;
    }

    /**
     * @param ArrayOfRate $GetRealTimeRatesResult
     * @return \App\Currencies\GetRealTimeRatesResponse
     */
    public function setGetRealTimeRatesResult($GetRealTimeRatesResult)
    {
      $this->GetRealTimeRatesResult = $GetRealTimeRatesResult;
      return $this;
    }

}
