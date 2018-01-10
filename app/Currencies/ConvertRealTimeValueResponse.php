<?php

namespace App\Currencies;

class ConvertRealTimeValueResponse
{

    /**
     * @var RateConversion $ConvertRealTimeValueResult
     */
    protected $ConvertRealTimeValueResult = null;

    /**
     * @param RateConversion $ConvertRealTimeValueResult
     */
    public function __construct($ConvertRealTimeValueResult)
    {
      $this->ConvertRealTimeValueResult = $ConvertRealTimeValueResult;
    }

    /**
     * @return RateConversion
     */
    public function getConvertRealTimeValueResult()
    {
      return $this->ConvertRealTimeValueResult;
    }

    /**
     * @param RateConversion $ConvertRealTimeValueResult
     * @return \App\Currencies\ConvertRealTimeValueResponse
     */
    public function setConvertRealTimeValueResult($ConvertRealTimeValueResult)
    {
      $this->ConvertRealTimeValueResult = $ConvertRealTimeValueResult;
      return $this;
    }

}
