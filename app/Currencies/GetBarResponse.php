<?php

namespace App\Currencies;

class GetBarResponse
{

    /**
     * @var Bar $GetBarResult
     */
    protected $GetBarResult = null;

    /**
     * @param Bar $GetBarResult
     */
    public function __construct($GetBarResult)
    {
      $this->GetBarResult = $GetBarResult;
    }

    /**
     * @return Bar
     */
    public function getGetBarResult()
    {
      return $this->GetBarResult;
    }

    /**
     * @param Bar $GetBarResult
     * @return \App\Currencies\GetBarResponse
     */
    public function setGetBarResult($GetBarResult)
    {
      $this->GetBarResult = $GetBarResult;
      return $this;
    }

}
