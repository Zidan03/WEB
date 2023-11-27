<?php 

namespace Controller;

include "Controller/Controller.php";
include "Model/Merk.php";
include "Traits/ResponseFormatter.php";

use Model\Merk;

use Traits\ResponseFormatter;

class MerkController extends Controller {
    use ResponseFormatter;

    
    public function __construct() {
        $this->ControllerName = "MerkController";
    }
    
    public function getAllMerk() {
        $Merk = new Merk;
        $product = $Merk->productList();
        $response = [
            "controller_attribute" => $this->getControllerAttribute("GetAllMerk", "GET"),
            "data" => $product
        ];

        return $this->responseFormatter(200, "Success", $response);
    }
}