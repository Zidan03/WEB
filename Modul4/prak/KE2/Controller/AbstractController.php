<?php

namespace Controller;

abstract class AbstractController {
    var $ControllerName;
    var $FunctionName;

    abstract public function getControllerAttribute($function, $method);
}