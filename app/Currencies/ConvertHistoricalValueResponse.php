<?php

namespace App\Currencies;

class ConvertHistoricalValueResponse
{

    /**
     * @var RateConversion $ConvertHistoricalValueResult
     */
    protected $ConvertHistoricalValueResult = null;

    /**
     * @param RateConversion $ConvertHistoricalValueResult
     */
    public function __construct($ConvertHistoricalValueResult)
    {
      $this->ConvertHistoricalValueResult = $ConvertHistoricalValueResult;
    }

    /**
     * @return RateConversion
     */
    public function getConvertHistoricalValueResult()
    {
      return $this->ConvertHistoricalValueResult;
    }

    /**
     * @param RateConversion $ConvertHistoricalValueResult
     * @return \App\Currencies\ConvertHistoricalValueResponse
     */
    public function setConvertHistoricalValueResult($ConvertHistoricalValueResult)
    {
      $this->ConvertHistoricalValueResult = $ConvertHistoricalValueResult;
      return $this;
    }

}
