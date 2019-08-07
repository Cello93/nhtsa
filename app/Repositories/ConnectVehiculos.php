<?php

namespace App\Repositories;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


class ConnectVehiculos extends ConectHttpRequest
{

  

   protected function get ($url){
       $response = $this->client->request('GET', $url);
       return json_decode($response->getBody()->getContents());
    }
   
  
    public function all($modeloano, $manufactura, $modelo)
    {
     
        return $this->get('SafetyRatings/modelyear/'.$modeloano.'/make/'.$manufactura.'/model/'.$modelo.'?format=json');
       
    }

    public function show($casilla, $codigo)
    {
      
      return $this->get('recepcion/show/'.$codigo.'/'.$casilla);
    }

   


}