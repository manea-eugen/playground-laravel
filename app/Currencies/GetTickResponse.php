<?php

namespace App\Currencies;

class GetTickResponse
{

    /**
     * @var Tick $GetTickResult
     */
    protected $GetTickResult = null;

    /**
     * @param Tick $GetTickResult
     */
    public function __construct($GetTickResult)
    {
      $this->GetTickResult = $GetTickResult;
    }

    /**
     * @return Tick
     */
    public function getGetTickResult()
    {
      return $this->GetTickResult;
    }

    /**
     * @param Tick $GetTickResult
     * @return \App\Currencies\GetTickResponse
     */
    public function setGetTickResult($GetTickResult)
    {
      $this->GetTickResult = $GetTickResult;
      return $this;
    }

}
