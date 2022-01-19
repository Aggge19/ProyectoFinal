<?php

namespace App\Controllers\PublicSection;
use App\Controllers\BaseController;

class PeliculasController extends BaseController
{
    public function index()
    {
        $data = array(
            "title" => "Listado de peliculas",
            "movies" => array(
                array(
                    "id" => 0,
                    "title" => "Supreman"
                ),
                array(
                    "id" => 1,
                    "title" => "Barman"
                )
            )
        );
        return view('PublicSection/peliculas', $data);
    }
}
