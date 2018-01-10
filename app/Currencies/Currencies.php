<?php

namespace App\Currencies;

class Currencies extends Common
{

    /**
     * @var ArrayOfCurrency $CurrencyList
     */
    protected $CurrencyList = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     */
    public function __construct($Outcome, $Delay)
    {
      parent::__construct($Outcome, $Delay);
    }

    /**
     * @return ArrayOfCurrency
     */
    public function getCurrencyList()
    {
      return $this->CurrencyList;
    }

    /**
     * @param ArrayOfCurrency $CurrencyList
     * @return \App\Currencies\Currencies
     */
    public function setCurrencyList($CurrencyList)
    {
      $this->CurrencyList = $CurrencyList;
      return $this;
    }

}
