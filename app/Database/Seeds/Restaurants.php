<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Restaurants extends Seeder
{
    public function run()
    {
        $this->db->table('restaurants')->where("id > ",0)->delete();
        $this->db->query("ALTER TABLE restaurants AUTO_INCREMENT=1");
 

        $restaurantsBuilder = $this->db->table('restaurants');
 
        $restaurants = [
            [
                'name' => "Catedral del Pescaíto",
                'description' => "Es una lástima que cierre, Joaquín esperamos que regreses muy pronto. Tu amabilidad y calidad de los productos avalan tu buen hacer. Una",
                'address' => "Calle del Duque de La Victoria 3, 29015 Málaga España",
                'latitude' => "895",
                "longitude" => "547",
                "reviewAverage" => "7",
                "numReviews" => "9",
                "created_at" => new Time(),
            ],
            [
                'name' => "Casa Luciano",
                'description' => "Entramos a comer sin reservar, motivados por las muy buenas reseñas de tripadvisor. El camarero nos acomodó en el salón de arriba muy atentamente. Las mesas estaban sin montar y nos la puso en un momento.",
                'address' => "Calle Luis Arminan Perez 41 Ronda, 29004 Málaga España",
                'latitude' => "5814",
                "longitude" => "377",
                "reviewAverage" => "9",
                "numReviews" => "6",
                "created_at" => new Time(),
            ]
         ];
 
         $restaurantsBuilder->insertBatch($restaurants);
 
    }
}

