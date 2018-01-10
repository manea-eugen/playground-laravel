<?php

namespace App\Currencies;

class ForwardContract
{

    /**
     * @var string $Expiration
     */
    protected $Expiration = null;

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
     * @var float $SpotRate
     */
    protected $SpotRate = null;

    /**
     * @var float $Points
     */
    protected $Points = null;

    /**
     * @param float $Bid
     * @param float $Mid
     * @param float $Ask
     * @param float $SpotRate
     * @param float $Points
     */
    public function __construct($Bid, $Mid, $Ask, $SpotRate, $Points)
    {
      $this->Bid = $Bid;
      $this->Mid = $Mid;
      $this->Ask = $Ask;
      $this->SpotRate = $SpotRate;
      $this->Points = $Points;
    }

    /**
     * @return string
     */
    public function getExpiration()
    {
      return $this->Expiration;
    }

    /**
     * @param string $Expiration
     * @return \App\Currencies\ForwardContract
     */
    public function setExpiration($Expiration)
    {
      $this->Expiration = $Expiration;
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
     * @return \App\Currencies\ForwardContract
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
     * @return \App\Currencies\ForwardContract
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
     * @return \App\Currencies\ForwardContract
     */
    public function setAsk($Ask)
    {
      $this->Ask = $Ask;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpotRate()
    {
      return $this->SpotRate;
    }

    /**
     * @param float $SpotRate
     * @return \App\Currencies\ForwardContract
     */
    public function setSpotRate($SpotRate)
    {
      $this->SpotRate = $SpotRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getPoints()
    {
      return $this->Points;
    }

    /**
     * @param float $Points
     * @return \App\Currencies\ForwardContract
     */
    public function setPoints($Points)
    {
      $this->Points = $Points;
      return $this;
    }

}
