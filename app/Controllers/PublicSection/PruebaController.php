<?php

namespace App\Controllers\PublicSection;
use App\Controllers\BaseController;
use App\Libraries\utilLibrary;

class PruebaController extends BaseController{
    public function index(){

        $util = new UtilLibrary(); 

        // $response = [
        //     "status" => "OK",
        //     "message" => "Ha ido bien",
        //     "status" => ""
        // ];
        return view("PublicSection/prueba");

        try{
            return $util->getResponse("OK", "Correcto");

        }catch(\Exception $e){
            // $response["status"] = "KO";
            // $response["message"] = "mal";
            // return json_encode($response);
            return $util->getResponse("KO", "Error");
        }

    }

}
