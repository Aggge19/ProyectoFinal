<?php

namespace App\Controllers\Administration;

use App\Controllers\BaseController;
use App\Models\RestaurantsModel;

class FestivalsController extends BaseController
{
    public function index()
    {    
        return view('Administration/festivals');
    }

    public function getFestivalsData() {
        
        $request = $this->request;

        $festM = new RestaurantsModel();

        $festivals = $festM->findFestivalsDatatable();

        $json_data = array(
            "data" => $festivals,
        );

        return json_encode($json_data, 200);
    }

}

