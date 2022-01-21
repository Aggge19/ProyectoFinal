<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        $this->db->table('users')->where("id > ",0)->delete();
        $this->db->query("ALTER TABLE users AUTO_INCREMENT=1");
 

        $usersBuilder = $this->db->table('users');

        $users = [
            [
                'username' => "admin",
                'email' => "admin@gmail.com",
                'password' => "1234",
                'name' => "admin",
                'surname' => "admin",
                'rol_id' => 1,
                "created_at" => new Time(),
            ]
         ];
 
         $usersBuilder->insertBatch($users);
 
    }
}