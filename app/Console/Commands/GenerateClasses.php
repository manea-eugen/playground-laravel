<?php

namespace App\Console\Commands;

use App\Math\AddResponse;
use Illuminate\Console\Command;

class GenerateClasses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:generate-classes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate classes';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $generator = new \Wsdl2PhpGenerator\Generator();
        $generator->generate(
            new \Wsdl2PhpGenerator\Config(array(
                'inputFile' => 'http://globalcurrencies.xignite.com/xGlobalCurrencies.asmx?WSDL',
                'outputDir' => base_path('app/Currencies'),
                'namespaceName' => 'App\\Currencies'
            ))
        );



    }
}
