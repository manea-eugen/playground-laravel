<?php

namespace App\Currencies;

class ListActiveCurrenciesResponse
{

    /**
     * @var Currencies $ListActiveCurrenciesResult
     */
    protected $ListActiveCurrenciesResult = null;

    /**
     * @param Currencies $ListActiveCurrenciesResult
     */
    public function __construct($ListActiveCurrenciesResult)
    {
      $this->ListActiveCurrenciesResult = $ListActiveCurrenciesResult;
    }

    /**
     * @return Currencies
     */
    public function getListActiveCurrenciesResult()
    {
      return $this->ListActiveCurrenciesResult;
    }

    /**
     * @param Currencies $ListActiveCurrenciesResult
     * @return \App\Currencies\ListActiveCurrenciesResponse
     */
    public function setListActiveCurrenciesResult($ListActiveCurrenciesResult)
    {
      $this->ListActiveCurrenciesResult = $ListActiveCurrenciesResult;
      return $this;
    }

}
