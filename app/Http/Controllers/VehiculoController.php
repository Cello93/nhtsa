<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ConnectVehiculos;

class VehiculoController extends Controller
{
    //
   
     protected $connectvehiculos;

    public function __construct(ConnectVehiculos $connectvehiculos)
    {
  
      $this->connectvehiculos = $connectvehiculos;
    }
    
    public function index(Request $request){
       

         $modeloano = trim($request->get('modeloano'));
         $manufactura = trim($request->get('manufactura'));
         $modelo = trim($request->get('modelo'));

         if (($modeloano == "" || $modeloano == null) and ($manufactura == "" || $manufactura == null) and ($modelo == "" || $modelo == null)){
         	 $vehiculo = null;
         }else{
         	
         	$vehiculo = $this->connectvehiculos->all($modeloano, $manufactura, $modelo);
         }

    	

    	// dd($vehiculo);

     //    dd ($paquetes);
    	// return $paquetes;
    	return view('welcome', compact('vehiculo', 'modeloano', 'manufactura', 'modelo'));
    }
}
