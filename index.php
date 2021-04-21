<?php
require 'controller/BaseController.php';
require 'model/core/Database.php';
//$db = new Database;

$controller_name = ucfirst(($_REQUEST['controller'] ?? 'Layout') . 'Controller');
$action_name = strtolower($_REQUEST['action'] ?? 'index');

require "controller/${controller_name}.php";

$controller_object = new $controller_name;
$controller_object->$action_name();