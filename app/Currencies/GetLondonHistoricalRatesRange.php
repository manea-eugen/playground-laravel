<?php

namespace App\Currencies;

class GetLondonHistoricalRatesRange
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @param string $Symbol
     * @param string $StartDate
     * @param string $EndDate
     */
    public function __construct($Symbol, $StartDate, $EndDate)
    {
      $this->Symbol = $Symbol;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
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
     * @return \App\Currencies\GetLondonHistoricalRatesRange
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return \App\Currencies\GetLondonHistoricalRatesRange
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \App\Currencies\GetLondonHistoricalRatesRange
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

}
