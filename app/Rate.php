<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'base_currency',
        'quote_currency',
        'symbol',
        'date',
        'time',
        'quote_type',
        'bid',
        'mid',
        'ask',
        'spread',
        'text',
        'source',
    ];

}
