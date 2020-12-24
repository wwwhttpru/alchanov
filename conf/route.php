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

        $i = count($route) - 1;

        while ($i > 0) {
            if($route[$i] != '') {
                if (is_file(CONTROLLER_PATH. ucfirst($route[$i]) . "Controller.php") || !empty($_GET)) {
                    $controllerName = ucfirst($route[$i]) . "Controller";
                    $modelName = ucfirst($route[$i]) . "Model";
                    break;
                } else {
                    $action = $route[$i];
                }
            }
            $i--;
        }

        require_once CONTROLLER_PATH . $controllerName . ".php"; //IndexController.php
        require_once MODEL_PATH . $modelName . ".php"; //IndexModel.php

        if (file_exists(CONTROLLER_PATH . $controllerName . ".php") ||
            file_exists(MODEL_PATH . $modelName . ".php")
        ) {
            $controller = new $controllerName();
            if (method_exists($controllerName, $action)) {
                $controller->$action(); // $contoller->index();
            } else {
                $controller->index();
            }
        } else {
            Routing::errorPage();
        }


    }

    public static function errorPage() {
        echo "Ошибка пути!";
    }

}
