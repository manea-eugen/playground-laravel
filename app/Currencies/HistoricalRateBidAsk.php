<?php

namespace App\Currencies;

class HistoricalRateBidAsk extends HistoricalRate
{

    /**
     * @var float $Bid
     */
    protected $Bid = null;

    /**
     * @var float $Ask
     */
    protected $Ask = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     * @param float $Open
     * @param float $High
     * @param float $Low
     * @param float $Close
     * @param float $Average
     * @param float $Bid
     * @param float $Ask
     */
    public function __construct($Outcome, $Delay, $Open, $High, $Low, $Close, $Average, $Bid, $Ask)
    {
      parent::__construct($Outcome, $Delay, $Open, $High, $Low, $Close, $Average);
      $this->Bid = $Bid;
      $this->Ask = $Ask;
    }

    /**
     * @return float
     */
    public function getBid()
    {
      return $this->Bid;
    }

    /**
     * @param float $Bid
     * @return \App\Currencies\HistoricalRateBidAsk
     */
    public function setBid($Bid)
    {
      $this->Bid = $Bid;
      return $this;
    }

    /**
     * @return float
     */
    public function getAsk()
    {
      return $this->Ask;
    }

    /**
     * @param float $Ask
     * @return \App\Currencies\HistoricalRateBidAsk
     */
    public function setAsk($Ask)
    {
      $this->Ask = $Ask;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \App\Currencies\HistoricalRateBidAsk
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
