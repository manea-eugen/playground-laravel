<?php

namespace App\Currencies;

class ListCurrenciesResponse
{

    /**
     * @var Currencies $ListCurrenciesResult
     */
    protected $ListCurrenciesResult = null;

    /**
     * @param Currencies $ListCurrenciesResult
     */
    public function __construct($ListCurrenciesResult)
    {
      $this->ListCurrenciesResult = $ListCurrenciesResult;
    }

    /**
     * @return Currencies
     */
    public function getListCurrenciesResult()
    {
      return $this->ListCurrenciesResult;
    }

    /**
     * @param Currencies $ListCurrenciesResult
     * @return \App\Currencies\ListCurrenciesResponse
     */
    public function setListCurrenciesResult($ListCurrenciesResult)
    {
      $this->ListCurrenciesResult = $ListCurrenciesResult;
      return $this;
    }

}
