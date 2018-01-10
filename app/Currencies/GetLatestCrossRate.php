<?php

namespace App\Currencies;

class GetLatestCrossRate
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @param string $Symbol
     */
    public function __construct($Symbol)
    {
      $this->Symbol = $Symbol;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->Symbol;
    }

    /**
     * @param string $Symbol
     * @return \App\Currencies\GetLatestCrossRate
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

}
