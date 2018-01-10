<?php

namespace App\Currencies;

class RateTable extends Common
{

    /**
     * @var ArrayOfRateTableLine $Lines
     */
    protected $Lines = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     */
    public function __construct($Outcome, $Delay)
    {
      parent::__construct($Outcome, $Delay);
    }

    /**
     * @return ArrayOfRateTableLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfRateTableLine $Lines
     * @return \App\Currencies\RateTable
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

}
