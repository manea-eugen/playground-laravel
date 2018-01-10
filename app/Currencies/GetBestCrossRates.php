<?php

namespace App\Currencies;

class GetBestCrossRates
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
     * @return \App\Currencies\GetBestCrossRates
     */
    public function setSymbols($Symbols)
    {
      $this->Symbols = $Symbols;
      return $this;
    }

}
