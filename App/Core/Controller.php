<?php
namespace App\Core;
Class Controller{

  public function model($model){
    require_once "../App/Models/".$model.".php";
    return new $model;
  }

  public function view($view, $dados = []){
    require_once "../App/Views/template.php";
  }
}