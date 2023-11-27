<?php

namespace Controller;

include "Controller/AbstractController.php";

class Controller extends AbstractController {
    var $ControllerName;
    var $FunctionName;

    public function getControllerAttribute($function, $method) {
        return [
            "Controller Name" => $this->ControllerName,
            "Function Name" => $function,
        ];
    }
}