<?php

namespace App\Currencies;

class ForwardRate extends Common
{

    /**
     * @var string $BaseCurrency
     */
    protected $BaseCurrency = null;

    /**
     * @var string $QuoteCurrency
     */
    protected $QuoteCurrency = null;

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $QuoteType
     */
    protected $QuoteType = null;

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var ArrayOfForwardContract $ForwardRates
     */
    protected $ForwardRates = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     */
    public function __construct($Outcome, $Delay)
    {
      parent::__construct($Outcome, $Delay);
    }

    /**
     * @return string
     */
    public function getBaseCurrency()
    {
      return $this->BaseCurrency;
    }

    /**
     * @param string $BaseCurrency
     * @return \App\Currencies\ForwardRate
     */
    public function setBaseCurrency($BaseCurrency)
    {
      $this->BaseCurrency = $BaseCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuoteCurrency()
    {
      return $this->QuoteCurrency;
    }

    /**
     * @param string $QuoteCurrency
     * @return \App\Currencies\ForwardRate
     */
    public function setQuoteCurrency($QuoteCurrency)
    {
      $this->QuoteCurrency = $QuoteCurrency;
      return $this;
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
     * @return \App\Currencies\ForwardRate
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuoteType()
    {
      return $this->QuoteType;
    }

    /**
     * @param string $QuoteType
     * @return \App\Currencies\ForwardRate
     */
    public function setQuoteType($QuoteType)
    {
      $this->QuoteType = $QuoteType;
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
     * @return \App\Currencies\ForwardRate
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
     * @return \App\Currencies\ForwardRate
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return ArrayOfForwardContract
     */
    public function getForwardRates()
    {
      return $this->ForwardRates;
    }

    /**
     * @param ArrayOfForwardContract $ForwardRates
     * @return \App\Currencies\ForwardRate
     */
    public function setForwardRates($ForwardRates)
    {
      $this->ForwardRates = $ForwardRates;
      return $this;
    }

}
