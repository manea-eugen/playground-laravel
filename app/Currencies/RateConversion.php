<?php

namespace App\Currencies;

class RateConversion extends Common
{

    /**
     * @var string $FromCurrencySymbol
     */
    protected $FromCurrencySymbol = null;

    /**
     * @var string $FromCurrencyName
     */
    protected $FromCurrencyName = null;

    /**
     * @var string $ToCurrencySymbol
     */
    protected $ToCurrencySymbol = null;

    /**
     * @var string $ToCurrencyName
     */
    protected $ToCurrencyName = null;

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Result
     */
    protected $Result = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     * @param float $Amount
     * @param float $Result
     * @param float $Rate
     */
    public function __construct($Outcome, $Delay, $Amount, $Result, $Rate)
    {
      parent::__construct($Outcome, $Delay);
      $this->Amount = $Amount;
      $this->Result = $Result;
      $this->Rate = $Rate;
    }

    /**
     * @return string
     */
    public function getFromCurrencySymbol()
    {
      return $this->FromCurrencySymbol;
    }

    /**
     * @param string $FromCurrencySymbol
     * @return \App\Currencies\RateConversion
     */
    public function setFromCurrencySymbol($FromCurrencySymbol)
    {
      $this->FromCurrencySymbol = $FromCurrencySymbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromCurrencyName()
    {
      return $this->FromCurrencyName;
    }

    /**
     * @param string $FromCurrencyName
     * @return \App\Currencies\RateConversion
     */
    public function setFromCurrencyName($FromCurrencyName)
    {
      $this->FromCurrencyName = $FromCurrencyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getToCurrencySymbol()
    {
      return $this->ToCurrencySymbol;
    }

    /**
     * @param string $ToCurrencySymbol
     * @return \App\Currencies\RateConversion
     */
    public function setToCurrencySymbol($ToCurrencySymbol)
    {
      $this->ToCurrencySymbol = $ToCurrencySymbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getToCurrencyName()
    {
      return $this->ToCurrencyName;
    }

    /**
     * @param string $ToCurrencyName
     * @return \App\Currencies\RateConversion
     */
    public function setToCurrencyName($ToCurrencyName)
    {
      $this->ToCurrencyName = $ToCurrencyName;
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
     * @return \App\Currencies\RateConversion
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
     * @return \App\Currencies\RateConversion
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
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
     * @return \App\Currencies\RateConversion
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param float $Result
     * @return \App\Currencies\RateConversion
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \App\Currencies\RateConversion
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
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
     * @return \App\Currencies\RateConversion
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
