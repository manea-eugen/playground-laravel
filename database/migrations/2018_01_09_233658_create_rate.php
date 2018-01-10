<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrency extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('base_currency')->nullable();
            $table->string('quote_currency')->nullable();
            $table->string('symbol')->nullable()->unique();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('quote_type')->nullable();
            $table->string('bid')->nullable();
            $table->string('mid')->nullable();
            $table->string('ask')->nullable();
            $table->string('spread')->nullable();
            $table->string('text')->nullable();
            $table->string('source')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }

}
