<?php

namespace App\Currencies;

class GetBarsResponse
{

    /**
     * @var ArrayOfBar $GetBarsResult
     */
    protected $GetBarsResult = null;

    /**
     * @param ArrayOfBar $GetBarsResult
     */
    public function __construct($GetBarsResult)
    {
      $this->GetBarsResult = $GetBarsResult;
    }

    /**
     * @return ArrayOfBar
     */
    public function getGetBarsResult()
    {
      return $this->GetBarsResult;
    }

    /**
     * @param ArrayOfBar $GetBarsResult
     * @return \App\Currencies\GetBarsResponse
     */
    public function setGetBarsResult($GetBarsResult)
    {
      $this->GetBarsResult = $GetBarsResult;
      return $this;
    }

}
