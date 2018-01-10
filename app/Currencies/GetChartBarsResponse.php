<?php

namespace App\Currencies;

class GetChartBarsResponse
{

    /**
     * @var CurrencyChartBars $GetChartBarsResult
     */
    protected $GetChartBarsResult = null;

    /**
     * @param CurrencyChartBars $GetChartBarsResult
     */
    public function __construct($GetChartBarsResult)
    {
      $this->GetChartBarsResult = $GetChartBarsResult;
    }

    /**
     * @return CurrencyChartBars
     */
    public function getGetChartBarsResult()
    {
      return $this->GetChartBarsResult;
    }

    /**
     * @param CurrencyChartBars $GetChartBarsResult
     * @return \App\Currencies\GetChartBarsResponse
     */
    public function setGetChartBarsResult($GetChartBarsResult)
    {
      $this->GetChartBarsResult = $GetChartBarsResult;
      return $this;
    }

}
