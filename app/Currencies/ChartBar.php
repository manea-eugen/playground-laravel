<?php

namespace App\Currencies;

class ChartBar
{

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
     * @var float $UTCOffset
     */
    protected $UTCOffset = null;

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
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var int $Trades
     */
    protected $Trades = null;

    /**
     * @var float $TWAP
     */
    protected $TWAP = null;

    /**
     * @var float $VWAP
     */
    protected $VWAP = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var float $AdjustmentRatio
     */
    protected $AdjustmentRatio = null;

    /**
     * @param float $UTCOffset
     * @param float $Open
     * @param float $High
     * @param float $Low
     * @param float $Close
     * @param float $Volume
     * @param int $Trades
     * @param float $TWAP
     * @param float $VWAP
     * @param float $AdjustmentRatio
     */
    public function __construct($UTCOffset, $Open, $High, $Low, $Close, $Volume, $Trades, $TWAP, $VWAP, $AdjustmentRatio)
    {
      $this->UTCOffset = $UTCOffset;
      $this->Open = $Open;
      $this->High = $High;
      $this->Low = $Low;
      $this->Close = $Close;
      $this->Volume = $Volume;
      $this->Trades = $Trades;
      $this->TWAP = $TWAP;
      $this->VWAP = $VWAP;
      $this->AdjustmentRatio = $AdjustmentRatio;
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
     * @return \App\Currencies\ChartBar
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
     * @return \App\Currencies\ChartBar
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
     * @return \App\Currencies\ChartBar
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
     * @return \App\Currencies\ChartBar
     */
    public function setEndTime($EndTime)
    {
      $this->EndTime = $EndTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getUTCOffset()
    {
      return $this->UTCOffset;
    }

    /**
     * @param float $UTCOffset
     * @return \App\Currencies\ChartBar
     */
    public function setUTCOffset($UTCOffset)
    {
      $this->UTCOffset = $UTCOffset;
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
     * @return \App\Currencies\ChartBar
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
     * @return \App\Currencies\ChartBar
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
     * @return \App\Currencies\ChartBar
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
     * @return \App\Currencies\ChartBar
     */
    public function setClose($Close)
    {
      $this->Close = $Close;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return \App\Currencies\ChartBar
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrades()
    {
      return $this->Trades;
    }

    /**
     * @param int $Trades
     * @return \App\Currencies\ChartBar
     */
    public function setTrades($Trades)
    {
      $this->Trades = $Trades;
      return $this;
    }

    /**
     * @return float
     */
    public function getTWAP()
    {
      return $this->TWAP;
    }

    /**
     * @param float $TWAP
     * @return \App\Currencies\ChartBar
     */
    public function setTWAP($TWAP)
    {
      $this->TWAP = $TWAP;
      return $this;
    }

    /**
     * @return float
     */
    public function getVWAP()
    {
      return $this->VWAP;
    }

    /**
     * @param float $VWAP
     * @return \App\Currencies\ChartBar
     */
    public function setVWAP($VWAP)
    {
      $this->VWAP = $VWAP;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\Currencies\ChartBar
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \App\Currencies\ChartBar
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentRatio()
    {
      return $this->AdjustmentRatio;
    }

    /**
     * @param float $AdjustmentRatio
     * @return \App\Currencies\ChartBar
     */
    public function setAdjustmentRatio($AdjustmentRatio)
    {
      $this->AdjustmentRatio = $AdjustmentRatio;
      return $this;
    }

}
