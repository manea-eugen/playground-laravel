<?php

namespace App\Currencies;

class GetRealTimeRates
{

    /**
     * @var string $Symbols
     */
    protected $Symbols = null;

    /**
     * @param string $Symbols
     */
    public function __construct($Symbols)
    {
      $this->Symbols = $Symbols;
    }

    /**
     * @return string
     */
    public function getSymbols()
    {
      return $this->Symbols;
    }

    /**
     * @param string $Symbols
     * @return \App\Currencies\GetRealTimeRates
     */
    public function setSymbols($Symbols)
    {
      $this->Symbols = $Symbols;
      return $this;
    }

}
