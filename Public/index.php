<?php
session_start();
require('../vendor/autoload.php');
$router = new \App\Core\Router();
require '../App/Views/template.php';