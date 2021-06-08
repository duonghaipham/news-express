<?php
require 'controller/BaseController.php';
require 'model/Database.php';

const URLWEB = 'http://localhost/news-express/';
const URLROOT = 'http://localhost/news-express/index.php';
session_start();

$controller_name = ucfirst(($_REQUEST['controller'] ?? 'feed') . 'Controller');
$action_name = strtolower($_REQUEST['action'] ?? 'index');

require "controller/${controller_name}.php";

$controller_object = new $controller_name();
$controller_object->$action_name();