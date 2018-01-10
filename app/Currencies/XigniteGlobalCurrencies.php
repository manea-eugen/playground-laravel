<?php

namespace App\Currencies;


/**
 * Provide real-time currency foreign exchange information and calculations.
 */
class XigniteGlobalCurrencies extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetRealTimeRates' => 'App\\Currencies\\GetRealTimeRates',
      'GetRealTimeRatesResponse' => 'App\\Currencies\\GetRealTimeRatesResponse',
      'ArrayOfRate' => 'App\\Currencies\\ArrayOfRate',
      'Rate' => 'App\\Currencies\\Rate',
      'Common' => 'App\\Currencies\\Common',
      'Header' => 'App\\Currencies\\Header',
      'GetRealTimeRate' => 'App\\Currencies\\GetRealTimeRate',
      'GetRealTimeRateResponse' => 'App\\Currencies\\GetRealTimeRateResponse',
      'GetForwardRate' => 'App\\Currencies\\GetForwardRate',
      'GetForwardRateResponse' => 'App\\Currencies\\GetForwardRateResponse',
      'ForwardRate' => 'App\\Currencies\\ForwardRate',
      'ArrayOfForwardContract' => 'App\\Currencies\\ArrayOfForwardContract',
      'ForwardContract' => 'App\\Currencies\\ForwardContract',
      'GetLatestHistoricalRates' => 'App\\Currencies\\GetLatestHistoricalRates',
      'GetLatestHistoricalRatesResponse' => 'App\\Currencies\\GetLatestHistoricalRatesResponse',
      'ArrayOfHistoricalRate' => 'App\\Currencies\\ArrayOfHistoricalRate',
      'HistoricalRate' => 'App\\Currencies\\HistoricalRate',
      'ListCurrencies' => 'App\\Currencies\\ListCurrencies',
      'ListCurrenciesResponse' => 'App\\Currencies\\ListCurrenciesResponse',
      'Currencies' => 'App\\Currencies\\Currencies',
      'ArrayOfCurrency' => 'App\\Currencies\\ArrayOfCurrency',
      'Currency' => 'App\\Currencies\\Currency',
      'ArrayOfCountry' => 'App\\Currencies\\ArrayOfCountry',
      'Country' => 'App\\Currencies\\Country',
      'ListActiveCurrencies' => 'App\\Currencies\\ListActiveCurrencies',
      'ListActiveCurrenciesResponse' => 'App\\Currencies\\ListActiveCurrenciesResponse',
      'GetAllRealTimeRates' => 'App\\Currencies\\GetAllRealTimeRates',
      'GetAllRealTimeRatesResponse' => 'App\\Currencies\\GetAllRealTimeRatesResponse',
      'GetLatestCrossRate' => 'App\\Currencies\\GetLatestCrossRate',
      'GetLatestCrossRateResponse' => 'App\\Currencies\\GetLatestCrossRateResponse',
      'GetLatestCrossRates' => 'App\\Currencies\\GetLatestCrossRates',
      'GetLatestCrossRatesResponse' => 'App\\Currencies\\GetLatestCrossRatesResponse',
      'GetBestCrossRate' => 'App\\Currencies\\GetBestCrossRate',
      'GetBestCrossRateResponse' => 'App\\Currencies\\GetBestCrossRateResponse',
      'GetBestCrossRates' => 'App\\Currencies\\GetBestCrossRates',
      'GetBestCrossRatesResponse' => 'App\\Currencies\\GetBestCrossRatesResponse',
      'ConvertRealTimeValue' => 'App\\Currencies\\ConvertRealTimeValue',
      'ConvertRealTimeValueResponse' => 'App\\Currencies\\ConvertRealTimeValueResponse',
      'RateConversion' => 'App\\Currencies\\RateConversion',
      'ConvertHistoricalValue' => 'App\\Currencies\\ConvertHistoricalValue',
      'ConvertHistoricalValueResponse' => 'App\\Currencies\\ConvertHistoricalValueResponse',
      'GetRealTimeRateTable' => 'App\\Currencies\\GetRealTimeRateTable',
      'GetRealTimeRateTableResponse' => 'App\\Currencies\\GetRealTimeRateTableResponse',
      'RateTable' => 'App\\Currencies\\RateTable',
      'ArrayOfRateTableLine' => 'App\\Currencies\\ArrayOfRateTableLine',
      'RateTableLine' => 'App\\Currencies\\RateTableLine',
      'ArrayOfQuoteCurrencyItem' => 'App\\Currencies\\ArrayOfQuoteCurrencyItem',
      'QuoteCurrencyItem' => 'App\\Currencies\\QuoteCurrencyItem',
      'GetHistoricalRate' => 'App\\Currencies\\GetHistoricalRate',
      'GetHistoricalRateResponse' => 'App\\Currencies\\GetHistoricalRateResponse',
      'GetLatestHistoricalRate' => 'App\\Currencies\\GetLatestHistoricalRate',
      'GetLatestHistoricalRateResponse' => 'App\\Currencies\\GetLatestHistoricalRateResponse',
      'GetHistoricalRates' => 'App\\Currencies\\GetHistoricalRates',
      'GetHistoricalRatesResponse' => 'App\\Currencies\\GetHistoricalRatesResponse',
      'GetHistoricalRatesRange' => 'App\\Currencies\\GetHistoricalRatesRange',
      'GetHistoricalRatesRangeResponse' => 'App\\Currencies\\GetHistoricalRatesRangeResponse',
      'GetHistoricalRatesRanges' => 'App\\Currencies\\GetHistoricalRatesRanges',
      'GetHistoricalRatesRangesResponse' => 'App\\Currencies\\GetHistoricalRatesRangesResponse',
      'GetOfficialHistoricalRate' => 'App\\Currencies\\GetOfficialHistoricalRate',
      'GetOfficialHistoricalRateResponse' => 'App\\Currencies\\GetOfficialHistoricalRateResponse',
      'GetOfficialRate' => 'App\\Currencies\\GetOfficialRate',
      'GetOfficialRateResponse' => 'App\\Currencies\\GetOfficialRateResponse',
      'HistoricalRateBidAsk' => 'App\\Currencies\\HistoricalRateBidAsk',
      'GetOfficialRates' => 'App\\Currencies\\GetOfficialRates',
      'GetOfficialRatesResponse' => 'App\\Currencies\\GetOfficialRatesResponse',
      'ArrayOfHistoricalRateBidAsk' => 'App\\Currencies\\ArrayOfHistoricalRateBidAsk',
      'GetOfficialHistoricalRates' => 'App\\Currencies\\GetOfficialHistoricalRates',
      'GetOfficialHistoricalRatesResponse' => 'App\\Currencies\\GetOfficialHistoricalRatesResponse',
      'GetTick' => 'App\\Currencies\\GetTick',
      'GetTickResponse' => 'App\\Currencies\\GetTickResponse',
      'Tick' => 'App\\Currencies\\Tick',
      'GetTicks' => 'App\\Currencies\\GetTicks',
      'GetTicksResponse' => 'App\\Currencies\\GetTicksResponse',
      'ArrayOfTick' => 'App\\Currencies\\ArrayOfTick',
      'GetBar' => 'App\\Currencies\\GetBar',
      'GetBarResponse' => 'App\\Currencies\\GetBarResponse',
      'Bar' => 'App\\Currencies\\Bar',
      'GetBars' => 'App\\Currencies\\GetBars',
      'GetBarsResponse' => 'App\\Currencies\\GetBarsResponse',
      'ArrayOfBar' => 'App\\Currencies\\ArrayOfBar',
      'GetChartBars' => 'App\\Currencies\\GetChartBars',
      'GetChartBarsResponse' => 'App\\Currencies\\GetChartBarsResponse',
      'CurrencyChartBars' => 'App\\Currencies\\CurrencyChartBars',
      'CurrencyDescription' => 'App\\Currencies\\CurrencyDescription',
      'ArrayOfChartBar' => 'App\\Currencies\\ArrayOfChartBar',
      'ChartBar' => 'App\\Currencies\\ChartBar',
      'GetLondonHistoricalRatesRange' => 'App\\Currencies\\GetLondonHistoricalRatesRange',
      'GetLondonHistoricalRatesRangeResponse' => 'App\\Currencies\\GetLondonHistoricalRatesRangeResponse',
      'ListOfficialRates' => 'App\\Currencies\\ListOfficialRates',
      'ListOfficialRatesResponse' => 'App\\Currencies\\ListOfficialRatesResponse',
      'OfficialRates' => 'App\\Currencies\\OfficialRates',
      'ArrayOfOfficialCountry' => 'App\\Currencies\\ArrayOfOfficialCountry',
      'OfficialCountry' => 'App\\Currencies\\OfficialCountry',
      'ArrayOfOfficialCurrency' => 'App\\Currencies\\ArrayOfOfficialCurrency',
      'OfficialCurrency' => 'App\\Currencies\\OfficialCurrency',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://globalcurrencies.xignite.com/xGlobalCurrencies.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get real time exchange rates of given currency exchange rate symbols.
     *
     * @param GetRealTimeRates $parameters
     * @return GetRealTimeRatesResponse
     */
    public function GetRealTimeRates(GetRealTimeRates $parameters)
    {
      return $this->__soapCall('GetRealTimeRates', array($parameters));
    }

    /**
     * Get real time exchange rate.
     *
     * @param GetRealTimeRate $parameters
     * @return GetRealTimeRateResponse
     */
    public function GetRealTimeRate(GetRealTimeRate $parameters)
    {
      return $this->__soapCall('GetRealTimeRate', array($parameters));
    }

    /**
     * Get forward exchange rate.
     *
     * @param GetForwardRate $parameters
     * @return GetForwardRateResponse
     */
    public function GetForwardRate(GetForwardRate $parameters)
    {
      return $this->__soapCall('GetForwardRate', array($parameters));
    }

    /**
     * Get cross sectional historical rates by a given time.
     *
     * @param GetLatestHistoricalRates $parameters
     * @return GetLatestHistoricalRatesResponse
     */
    public function GetLatestHistoricalRates(GetLatestHistoricalRates $parameters)
    {
      return $this->__soapCall('GetLatestHistoricalRates', array($parameters));
    }

    /**
     * List all currencies.
     *
     * @param ListCurrencies $parameters
     * @return ListCurrenciesResponse
     */
    public function ListCurrencies(ListCurrencies $parameters)
    {
      return $this->__soapCall('ListCurrencies', array($parameters));
    }

    /**
     * List all active currencies.
     *
     * @param ListActiveCurrencies $parameters
     * @return ListActiveCurrenciesResponse
     */
    public function ListActiveCurrencies(ListActiveCurrencies $parameters)
    {
      return $this->__soapCall('ListActiveCurrencies', array($parameters));
    }

    /**
     * Get real time exchange rates of given currency exchange rate symbols.
     *
     * @param GetAllRealTimeRates $parameters
     * @return GetAllRealTimeRatesResponse
     */
    public function GetAllRealTimeRates(GetAllRealTimeRates $parameters)
    {
      return $this->__soapCall('GetAllRealTimeRates', array($parameters));
    }

    /**
     * Get latest real time exchange rate considering all crossing combinations with major currencies.
     *
     * @param GetLatestCrossRate $parameters
     * @return GetLatestCrossRateResponse
     */
    public function GetLatestCrossRate(GetLatestCrossRate $parameters)
    {
      return $this->__soapCall('GetLatestCrossRate', array($parameters));
    }

    /**
     * Get real time exchange rates of given currency exchange rate symbols considering all crossing combinations with major currencies.
     *
     * @param GetLatestCrossRates $parameters
     * @return GetLatestCrossRatesResponse
     */
    public function GetLatestCrossRates(GetLatestCrossRates $parameters)
    {
      return $this->__soapCall('GetLatestCrossRates', array($parameters));
    }

    /**
     * Get best real time exchange rate considering all crossing combinations with major currencies.
     *
     * @param GetBestCrossRate $parameters
     * @return GetBestCrossRateResponse
     */
    public function GetBestCrossRate(GetBestCrossRate $parameters)
    {
      return $this->__soapCall('GetBestCrossRate', array($parameters));
    }

    /**
     * Get best real time exchange rates of given currency exchange rate symbols considering all crossing combinations with major currencies.
     *
     * @param GetBestCrossRates $parameters
     * @return GetBestCrossRatesResponse
     */
    public function GetBestCrossRates(GetBestCrossRates $parameters)
    {
      return $this->__soapCall('GetBestCrossRates', array($parameters));
    }

    /**
     * Convert an amount using the real time exchange rate.
     *
     * @param ConvertRealTimeValue $parameters
     * @return ConvertRealTimeValueResponse
     */
    public function ConvertRealTimeValue(ConvertRealTimeValue $parameters)
    {
      return $this->__soapCall('ConvertRealTimeValue', array($parameters));
    }

    /**
     * Convert an amount using the historical exchange rate at the given time.
     *
     * @param ConvertHistoricalValue $parameters
     * @return ConvertHistoricalValueResponse
     */
    public function ConvertHistoricalValue(ConvertHistoricalValue $parameters)
    {
      return $this->__soapCall('ConvertHistoricalValue', array($parameters));
    }

    /**
     * Get real time exchange rate table between all specified currencies.
     *
     * @param GetRealTimeRateTable $parameters
     * @return GetRealTimeRateTableResponse
     */
    public function GetRealTimeRateTable(GetRealTimeRateTable $parameters)
    {
      return $this->__soapCall('GetRealTimeRateTable', array($parameters));
    }

    /**
     * Get historical exchange rate at a given time.
     *
     * @param GetHistoricalRate $parameters
     * @return GetHistoricalRateResponse
     */
    public function GetHistoricalRate(GetHistoricalRate $parameters)
    {
      return $this->__soapCall('GetHistoricalRate', array($parameters));
    }

    /**
     * Get historical exchange rate by a given time.
     *
     * @param GetLatestHistoricalRate $parameters
     * @return GetLatestHistoricalRateResponse
     */
    public function GetLatestHistoricalRate(GetLatestHistoricalRate $parameters)
    {
      return $this->__soapCall('GetLatestHistoricalRate', array($parameters));
    }

    /**
     * Get cross sectional historical rates at a given time.
     *
     * @param GetHistoricalRates $parameters
     * @return GetHistoricalRatesResponse
     */
    public function GetHistoricalRates(GetHistoricalRates $parameters)
    {
      return $this->__soapCall('GetHistoricalRates', array($parameters));
    }

    /**
     * Get historical exchange rates time series.
     *
     * @param GetHistoricalRatesRange $parameters
     * @return GetHistoricalRatesRangeResponse
     */
    public function GetHistoricalRatesRange(GetHistoricalRatesRange $parameters)
    {
      return $this->__soapCall('GetHistoricalRatesRange', array($parameters));
    }

    /**
     * Get multiple historical exchange rates time series.
     *
     * @param GetHistoricalRatesRanges $parameters
     * @return GetHistoricalRatesRangesResponse
     */
    public function GetHistoricalRatesRanges(GetHistoricalRatesRanges $parameters)
    {
      return $this->__soapCall('GetHistoricalRatesRanges', array($parameters));
    }

    /**
     * Get historical exchange rate to the official currency at the given time.
     *
     * @param GetOfficialHistoricalRate $parameters
     * @return GetOfficialHistoricalRateResponse
     */
    public function GetOfficialHistoricalRate(GetOfficialHistoricalRate $parameters)
    {
      return $this->__soapCall('GetOfficialHistoricalRate', array($parameters));
    }

    /**
     * Get historical exchange rate to the official currency at the given date with bid ask.
     *
     * @param GetOfficialRate $parameters
     * @return GetOfficialRateResponse
     */
    public function GetOfficialRate(GetOfficialRate $parameters)
    {
      return $this->__soapCall('GetOfficialRate', array($parameters));
    }

    /**
     * Get historical exchange rates to the official currency at the given date with bid ask.
     *
     * @param GetOfficialRates $parameters
     * @return GetOfficialRatesResponse
     */
    public function GetOfficialRates(GetOfficialRates $parameters)
    {
      return $this->__soapCall('GetOfficialRates', array($parameters));
    }

    /**
     * Get historical exchange rates of currencies to the official currency of the country.
     *
     * @param GetOfficialHistoricalRates $parameters
     * @return GetOfficialHistoricalRatesResponse
     */
    public function GetOfficialHistoricalRates(GetOfficialHistoricalRates $parameters)
    {
      return $this->__soapCall('GetOfficialHistoricalRates', array($parameters));
    }

    /**
     * Get intraday tick at given time.
     *
     * @param GetTick $parameters
     * @return GetTickResponse
     */
    public function GetTick(GetTick $parameters)
    {
      return $this->__soapCall('GetTick', array($parameters));
    }

    /**
     * Get intraday ticks of specified intervals within a time range.
     *
     * @param GetTicks $parameters
     * @return GetTicksResponse
     */
    public function GetTicks(GetTicks $parameters)
    {
      return $this->__soapCall('GetTicks', array($parameters));
    }

    /**
     * Get intraday bar at given time.
     *
     * @param GetBar $parameters
     * @return GetBarResponse
     */
    public function GetBar(GetBar $parameters)
    {
      return $this->__soapCall('GetBar', array($parameters));
    }

    /**
     * Get intraday bars of specified intervals within a time range.
     *
     * @param GetBars $parameters
     * @return GetBarsResponse
     */
    public function GetBars(GetBars $parameters)
    {
      return $this->__soapCall('GetBars', array($parameters));
    }

    /**
     * Get intraday bars of specified intervals within a time range.
     *
     * @param GetChartBars $parameters
     * @return GetChartBarsResponse
     */
    public function GetChartBars(GetChartBars $parameters)
    {
      return $this->__soapCall('GetChartBars', array($parameters));
    }

    /**
     * Get historical exchange rate based on Legacy London exchange rates.
     *
     * @param GetLondonHistoricalRatesRange $parameters
     * @return GetLondonHistoricalRatesRangeResponse
     */
    public function GetLondonHistoricalRatesRange(GetLondonHistoricalRatesRange $parameters)
    {
      return $this->__soapCall('GetLondonHistoricalRatesRange', array($parameters));
    }

    /**
     * Returns official cross rates where historical data is available by country.
     *
     * @param ListOfficialRates $parameters
     * @return ListOfficialRatesResponse
     */
    public function ListOfficialRates(ListOfficialRates $parameters)
    {
      return $this->__soapCall('ListOfficialRates', array($parameters));
    }

}
