<?php

namespace App\Currencies;

class RateTableLine
{

    /**
     * @var string $BaseCurrency
     */
    protected $BaseCurrency = null;

    /**
     * @var ArrayOfQuoteCurrencyItem $Columns
     */
    protected $Columns = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBaseCurrency()
    {
      return $this->BaseCurrency;
    }

    /**
     * @param string $BaseCurrency
     * @return \App\Currencies\RateTableLine
     */
    public function setBaseCurrency($BaseCurrency)
    {
      $this->BaseCurrency = $BaseCurrency;
      return $this;
    }

    /**
     * @return ArrayOfQuoteCurrencyItem
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfQuoteCurrencyItem $Columns
     * @return \App\Currencies\RateTableLine
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

}
