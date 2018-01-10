<?php

namespace App\Currencies;

class GetBestCrossRatesResponse
{

    /**
     * @var ArrayOfRate $GetBestCrossRatesResult
     */
    protected $GetBestCrossRatesResult = null;

    /**
     * @param ArrayOfRate $GetBestCrossRatesResult
     */
    public function __construct($GetBestCrossRatesResult)
    {
      $this->GetBestCrossRatesResult = $GetBestCrossRatesResult;
    }

    /**
     * @return ArrayOfRate
     */
    public function getGetBestCrossRatesResult()
    {
      return $this->GetBestCrossRatesResult;
    }

    /**
     * @param ArrayOfRate $GetBestCrossRatesResult
     * @return \App\Currencies\GetBestCrossRatesResponse
     */
    public function setGetBestCrossRatesResult($GetBestCrossRatesResult)
    {
      $this->GetBestCrossRatesResult = $GetBestCrossRatesResult;
      return $this;
    }

}
