<?php

namespace App\Currencies;

class GetAllRealTimeRatesResponse
{

    /**
     * @var ArrayOfRate $GetAllRealTimeRatesResult
     */
    protected $GetAllRealTimeRatesResult = null;

    /**
     * @param ArrayOfRate $GetAllRealTimeRatesResult
     */
    public function __construct($GetAllRealTimeRatesResult)
    {
      $this->GetAllRealTimeRatesResult = $GetAllRealTimeRatesResult;
    }

    /**
     * @return ArrayOfRate
     */
    public function getGetAllRealTimeRatesResult()
    {
      return $this->GetAllRealTimeRatesResult;
    }

    /**
     * @param ArrayOfRate $GetAllRealTimeRatesResult
     * @return \App\Currencies\GetAllRealTimeRatesResponse
     */
    public function setGetAllRealTimeRatesResult($GetAllRealTimeRatesResult)
    {
      $this->GetAllRealTimeRatesResult = $GetAllRealTimeRatesResult;
      return $this;
    }

}
