<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";


use Traits\ResponseFormatter;

class ProductController extends Controller {

    use ResponseFormatter;

    public function _construct(){

        $this->controllerName = "Get All Product";
        $this->controllerMethod = "Get";
    }

    public function getAllProduct(){

        $dummyData = [
            "Air Mineral",
            "kebab",
            "Spaghetti",
            "Jus Jambu",
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData,
        ];

        return $this->responseFormatter(200, "Success", $response);
    }
}