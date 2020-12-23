<?php

// Открываем сессию
session_start();

// Подключаем константы
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("MODEL_PATH", ROOT . "/models/");
define("VIEW_PATH", ROOT . "/views/");

// Подключаем фаилы
require_once("db.php");
require_once("route.php");
require_once MODEL_PATH . 'Model.php';
require_once VIEW_PATH . 'View.php';
require_once CONTROLLER_PATH . 'Controller.php';

// Создаем роутер 
Routing::buildRoute();