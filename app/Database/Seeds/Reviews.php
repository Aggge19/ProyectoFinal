<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Reviews extends Seeder
{
    public function run()
    {
        $this->db->table('reviews')->where("id > ",0)->delete();
        $this->db->query("ALTER TABLE reviews AUTO_INCREMENT=1");
 

        $reviewsBuilder = $this->db->table('reviews');
 
        $reviews = [
            //id name description address latitude longitude reviewAverage numReviews
            [
                'description' => "Muy malo",
                'punctuation' => 4,
                'email' => "primero@gmail.com",
                "restaurant_id" => 1,
                "created_at" => new Time(),
            ],
            [
                'description' => "Esta bien",
                'punctuation' => "8",
                'email' => "895@gmail.com",
                "restaurant_id" => 2,
                "created_at" => new Time(),
            ]
         ];
 
         $reviewsBuilder->insertBatch($reviews);
 
    }
}
