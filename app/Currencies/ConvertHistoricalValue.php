<?php

namespace App\Currencies;

class ConvertHistoricalValue
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
     * @var string $AsOfDate
     */
    protected $AsOfDate = null;

    /**
     * @var string $FixingTime
     */
    protected $FixingTime = null;

    /**
     * @param string $From
     * @param string $To
     * @param float $Amount
     * @param string $AsOfDate
     * @param string $FixingTime
     */
    public function __construct($From, $To, $Amount, $AsOfDate, $FixingTime)
    {
      $this->From = $From;
      $this->To = $To;
      $this->Amount = $Amount;
      $this->AsOfDate = $AsOfDate;
      $this->FixingTime = $FixingTime;
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
     * @return \App\Currencies\ConvertHistoricalValue
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
     * @return \App\Currencies\ConvertHistoricalValue
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
     * @return \App\Currencies\ConvertHistoricalValue
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsOfDate()
    {
      return $this->AsOfDate;
    }

    /**
     * @param string $AsOfDate
     * @return \App\Currencies\ConvertHistoricalValue
     */
    public function setAsOfDate($AsOfDate)
    {
      $this->AsOfDate = $AsOfDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFixingTime()
    {
      return $this->FixingTime;
    }

    /**
     * @param string $FixingTime
     * @return \App\Currencies\ConvertHistoricalValue
     */
    public function setFixingTime($FixingTime)
    {
      $this->FixingTime = $FixingTime;
      return $this;
    }

}
