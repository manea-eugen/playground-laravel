<?php

namespace App\Currencies;

class HistoricalRate extends Common
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
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $StartTime
     */
    protected $StartTime = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $EndTime
     */
    protected $EndTime = null;

    /**
     * @var float $Open
     */
    protected $Open = null;

    /**
     * @var float $High
     */
    protected $High = null;

    /**
     * @var float $Low
     */
    protected $Low = null;

    /**
     * @var float $Close
     */
    protected $Close = null;

    /**
     * @var float $Average
     */
    protected $Average = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     * @param float $Open
     * @param float $High
     * @param float $Low
     * @param float $Close
     * @param float $Average
     */
    public function __construct($Outcome, $Delay, $Open, $High, $Low, $Close, $Average)
    {
      parent::__construct($Outcome, $Delay);
      $this->Open = $Open;
      $this->High = $High;
      $this->Low = $Low;
      $this->Close = $Close;
      $this->Average = $Average;
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
     * @return \App\Currencies\HistoricalRate
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
     * @return \App\Currencies\HistoricalRate
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
     * @return \App\Currencies\HistoricalRate
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
     * @return \App\Currencies\HistoricalRate
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
      return $this->StartTime;
    }

    /**
     * @param string $StartTime
     * @return \App\Currencies\HistoricalRate
     */
    public function setStartTime($StartTime)
    {
      $this->StartTime = $StartTime;
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
     * @return \App\Currencies\HistoricalRate
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
      return $this->EndTime;
    }

    /**
     * @param string $EndTime
     * @return \App\Currencies\HistoricalRate
     */
    public function setEndTime($EndTime)
    {
      $this->EndTime = $EndTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getOpen()
    {
      return $this->Open;
    }

    /**
     * @param float $Open
     * @return \App\Currencies\HistoricalRate
     */
    public function setOpen($Open)
    {
      $this->Open = $Open;
      return $this;
    }

    /**
     * @return float
     */
    public function getHigh()
    {
      return $this->High;
    }

    /**
     * @param float $High
     * @return \App\Currencies\HistoricalRate
     */
    public function setHigh($High)
    {
      $this->High = $High;
      return $this;
    }

    /**
     * @return float
     */
    public function getLow()
    {
      return $this->Low;
    }

    /**
     * @param float $Low
     * @return \App\Currencies\HistoricalRate
     */
    public function setLow($Low)
    {
      $this->Low = $Low;
      return $this;
    }

    /**
     * @return float
     */
    public function getClose()
    {
      return $this->Close;
    }

    /**
     * @param float $Close
     * @return \App\Currencies\HistoricalRate
     */
    public function setClose($Close)
    {
      $this->Close = $Close;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverage()
    {
      return $this->Average;
    }

    /**
     * @param float $Average
     * @return \App\Currencies\HistoricalRate
     */
    public function setAverage($Average)
    {
      $this->Average = $Average;
      return $this;
    }

}
