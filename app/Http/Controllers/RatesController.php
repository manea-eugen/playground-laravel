<?php
/**
 * Created by PhpStorm.
 * User: burycel
 * Date: 10-1-18
 * Time: 1:23
 */

namespace App\Http\Controllers;


use App\Rate;
use Illuminate\Database\Eloquent\Collection;

class RatesController
{
    public function getAllRates(){
        $rates = Rate::all();
        return response()->json($rates->toArray());
    }

    public function getRateByQuoteCurrency($quoteCurrency){

        /** @var Collection $rates */
        $rates = Rate::where('quote_currency', 'like', '%' . $quoteCurrency .'%')->get();
        return response()->json($rates->toArray());
    }
}