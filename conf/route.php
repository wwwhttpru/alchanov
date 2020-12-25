<?php

/*
** Класс маршрутизации
** Урл 
*/
class Routing
{
    /* Контроллер и action по умолочанию*/
    public static function buildRoute()
    {
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $i = count($route);


        while($i>0) {
            if($route[$i] != '') {
                if(is_file(CONTROLLER_PATH . ucfirst($route[$i]) . "Controller.php") && $i == 1) {
                    $controllerName = ucfirst($route[$i]) . "Controller";
                    $modelName =  ucfirst($route[$i]) . "Model";
                } else {
                    $action = $route[$i];
                }
            }
            $i--;
        }


        require_once CONTROLLER_PATH . $controllerName . ".php";
        require_once MODEL_PATH . $modelName . ".php";

        $controller = new $controllerName();
        $controller->$action();

    }

    public static function errorPage() {
        echo "Ошибка пути!";
    }

}
