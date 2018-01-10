<?php

namespace App\Currencies;

class GetBestCrossRate
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
     * @return \App\Currencies\GetBestCrossRate
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

}
