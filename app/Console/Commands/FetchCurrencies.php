<?php

namespace App\Console\Commands;

use App\Currencies\GetAllRealTimeRates;
use App\Currencies\XigniteGlobalCurrencies;
use App\Rate;
use Illuminate\Console\Command;
use SoapHeader;

class FetchCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:fetch-currencies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches rates';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $options = [
            'soap_version' => SOAP_1_2,
            'trace'        => 1,
            'cache_wsdl'   => WSDL_CACHE_NONE,
        ];


        $currencyRequest = new XigniteGlobalCurrencies($options);

        $xignite_header = new SoapHeader('http://www.xignite.com/services/',
            "Header", ["Username" => env('API_KEY')]);
        $currencyRequest->__setSoapHeaders([$xignite_header]);

        $currencies = new GetAllRealTimeRates('EUR');

        try {
            $allRealTimeResponse = $currencyRequest->GetAllRealTimeRates($currencies);
        } catch (\Exception $e) {
            $this->output->error($e->getMessage());
            exit(1);
        }
        $rates = $allRealTimeResponse->getGetAllRealTimeRatesResult()->getRate();

        foreach ($rates as $apiRate) {
            $currency = new Rate();
            $currency->base_currency = $apiRate->getBaseCurrency();
            $currency->quote_currency = $apiRate->getQuoteCurrency();
            $currency->symbol = $apiRate->getSymbol();
            $currency->date = $apiRate->getDate();
            $currency->time = $apiRate->getTime();
            $currency->quote_type = $apiRate->getQuoteType();
            $currency->bid = $apiRate->getBid();
            $currency->mid = $apiRate->getMid();
            $currency->spread = $apiRate->getSpread();
            $currency->text = $apiRate->getText();
            $currency->source = $apiRate->getSource();

            $currency->save();

            $this->output->success("Saving currency {$currency->symbol}");

        }


        $this->output->success("Done");


    }
}
