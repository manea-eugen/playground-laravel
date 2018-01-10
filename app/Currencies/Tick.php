<?php

namespace App\Currencies;

class Tick extends Common
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var float $Bid
     */
    protected $Bid = null;

    /**
     * @var float $Mid
     */
    protected $Mid = null;

    /**
     * @var float $Ask
     */
    protected $Ask = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     * @param float $Bid
     * @param float $Mid
     * @param float $Ask
     */
    public function __construct($Outcome, $Delay, $Bid, $Mid, $Ask)
    {
      parent::__construct($Outcome, $Delay);
      $this->Bid = $Bid;
      $this->Mid = $Mid;
      $this->Ask = $Ask;
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
     * @return \App\Currencies\Tick
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param string $Date
     * @return \App\Currencies\Tick
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return \App\Currencies\Tick
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
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
     * @return \App\Currencies\Tick
     */
    public function setBid($Bid)
    {
      $this->Bid = $Bid;
      return $this;
    }

    /**
     * @return float
     */
    public function getMid()
    {
      return $this->Mid;
    }

    /**
     * @param float $Mid
     * @return \App\Currencies\Tick
     */
    public function setMid($Mid)
    {
      $this->Mid = $Mid;
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
     * @return \App\Currencies\Tick
     */
    public function setAsk($Ask)
    {
      $this->Ask = $Ask;
      return $this;
    }

}
