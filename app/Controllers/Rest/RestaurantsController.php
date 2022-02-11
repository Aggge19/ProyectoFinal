<?php
namespace App\Controllers\Rest;

use App\Entities\Restaurants;
use App\Models\RestaurantsModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class RestaurantsController extends ResourceController
{

    protected $modelName = 'App\Models\RestaurantsModel';
    protected $format = 'json';

    public function getRestaurants() {

        try {

            $restaurants = $this->model->findRestaurants();

            if ($restaurants) {
                return $this->respond($restaurants, 200, 'Restaurantes encontrados');
            } else {
                return $this->respond('', 404, 'Restaurantes no encontrados');
            }
                
            

        } catch (Exception $e){
            return $this->respond('', 500, 'Error del servidor');
        }

    }
    
}
