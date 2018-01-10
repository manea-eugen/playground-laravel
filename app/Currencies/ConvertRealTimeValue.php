<?php

namespace App\Currencies;

class ConvertRealTimeValue
{

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string $To
     */
    protected $To = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param string $From
     * @param string $To
     * @param float $Amount
     */
    public function __construct($From, $To, $Amount)
    {
      $this->From = $From;
      $this->To = $To;
      $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param string $From
     * @return \App\Currencies\ConvertRealTimeValue
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param string $To
     * @return \App\Currencies\ConvertRealTimeValue
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \App\Currencies\ConvertRealTimeValue
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
