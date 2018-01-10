<?php

namespace App\Currencies;

class GetTicksResponse
{

    /**
     * @var ArrayOfTick $GetTicksResult
     */
    protected $GetTicksResult = null;

    /**
     * @param ArrayOfTick $GetTicksResult
     */
    public function __construct($GetTicksResult)
    {
      $this->GetTicksResult = $GetTicksResult;
    }

    /**
     * @return ArrayOfTick
     */
    public function getGetTicksResult()
    {
      return $this->GetTicksResult;
    }

    /**
     * @param ArrayOfTick $GetTicksResult
     * @return \App\Currencies\GetTicksResponse
     */
    public function setGetTicksResult($GetTicksResult)
    {
      $this->GetTicksResult = $GetTicksResult;
      return $this;
    }

}
