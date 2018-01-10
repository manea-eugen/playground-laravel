<?php

namespace App\Currencies;

class GetForwardRateResponse
{

    /**
     * @var ForwardRate $GetForwardRateResult
     */
    protected $GetForwardRateResult = null;

    /**
     * @param ForwardRate $GetForwardRateResult
     */
    public function __construct($GetForwardRateResult)
    {
      $this->GetForwardRateResult = $GetForwardRateResult;
    }

    /**
     * @return ForwardRate
     */
    public function getGetForwardRateResult()
    {
      return $this->GetForwardRateResult;
    }

    /**
     * @param ForwardRate $GetForwardRateResult
     * @return \App\Currencies\GetForwardRateResponse
     */
    public function setGetForwardRateResult($GetForwardRateResult)
    {
      $this->GetForwardRateResult = $GetForwardRateResult;
      return $this;
    }

}
