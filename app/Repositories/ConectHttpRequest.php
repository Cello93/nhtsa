<?php

namespace App\Repositories;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ConectHttpRequest
{

    protected $client;

    public function __construct(Client $client)
    {
       
        $this->appEnv  = config('services.nhtsa.env');

        $this->client = new $client([
            'base_uri' => $this->appEnv,
            'verify'    => false,
        ]);
    }
    


}
