<?php

namespace App\Currencies;

class Rate extends Common
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
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var string $QuoteType
     */
    protected $QuoteType = null;

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
     * @var float $Spread
     */
    protected $Spread = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     * @param float $Bid
     * @param float $Mid
     * @param float $Ask
     * @param float $Spread
     */
    public function __construct($Outcome, $Delay, $Bid, $Mid, $Ask, $Spread)
    {
      parent::__construct($Outcome, $Delay);
      $this->Bid = $Bid;
      $this->Mid = $Mid;
      $this->Ask = $Ask;
      $this->Spread = $Spread;
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
     * @return \App\Currencies\Rate
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
     * @return \App\Currencies\Rate
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
     * @return \App\Currencies\Rate
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
     * @return \App\Currencies\Rate
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
     * @return \App\Currencies\Rate
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
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
     * @return \App\Currencies\Rate
     */
    public function setQuoteType($QuoteType)
    {
      $this->QuoteType = $QuoteType;
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
     * @return \App\Currencies\Rate
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
     * @return \App\Currencies\Rate
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
     * @return \App\Currencies\Rate
     */
    public function setAsk($Ask)
    {
      $this->Ask = $Ask;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpread()
    {
      return $this->Spread;
    }

    /**
     * @param float $Spread
     * @return \App\Currencies\Rate
     */
    public function setSpread($Spread)
    {
      $this->Spread = $Spread;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\Currencies\Rate
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return \App\Currencies\Rate
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
