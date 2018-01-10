<?php

namespace App\Currencies;

class CurrencyChartBars extends Common
{

    /**
     * @var string $Timing
     */
    protected $Timing = null;

    /**
     * @var string $PriceType
     */
    protected $PriceType = null;

    /**
     * @var CurrencyDescription $CurrencyDescription
     */
    protected $CurrencyDescription = null;

    /**
     * @var ArrayOfChartBar $ChartBars
     */
    protected $ChartBars = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     */
    public function __construct($Outcome, $Delay)
    {
      parent::__construct($Outcome, $Delay);
    }

    /**
     * @return string
     */
    public function getTiming()
    {
      return $this->Timing;
    }

    /**
     * @param string $Timing
     * @return \App\Currencies\CurrencyChartBars
     */
    public function setTiming($Timing)
    {
      $this->Timing = $Timing;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceType()
    {
      return $this->PriceType;
    }

    /**
     * @param string $PriceType
     * @return \App\Currencies\CurrencyChartBars
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

    /**
     * @return CurrencyDescription
     */
    public function getCurrencyDescription()
    {
      return $this->CurrencyDescription;
    }

    /**
     * @param CurrencyDescription $CurrencyDescription
     * @return \App\Currencies\CurrencyChartBars
     */
    public function setCurrencyDescription($CurrencyDescription)
    {
      $this->CurrencyDescription = $CurrencyDescription;
      return $this;
    }

    /**
     * @return ArrayOfChartBar
     */
    public function getChartBars()
    {
      return $this->ChartBars;
    }

    /**
     * @param ArrayOfChartBar $ChartBars
     * @return \App\Currencies\CurrencyChartBars
     */
    public function setChartBars($ChartBars)
    {
      $this->ChartBars = $ChartBars;
      return $this;
    }

}
