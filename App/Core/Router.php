<?php

namespace App\Core;

class Router{
  private $controller;
  private $method;
  private $params;

  public function __construct(){
    $url = $this->parseUrl();
    if(file_exists('../App/Controllers/'.$url[1].'.php')){
      $this->controller = $url[1];
      unset($url[1]);
    }elseif(empty($url[1])){
      $this->controller = 'TaskListController';
    }else{
      $this->controller = 'Erro404';
    }

    require_once '../App/Controllers/'.$this->controller.'.php';
    $this->controller = new $this->controller;

    if(isset($url[2])){
      if(method_exists($this->controller, $url[2])){
        $this->method = $url[2];
        unset($url[2]);
        unset($url[0]);
      }else{

      }
    }else{
      $this->method = 'index';
    }
    $this->params = $url ? array_values($url) : [];
    call_user_func_array([$this->controller, $this->method], $this->params);
    
  }
  
  public function parseUrl(){
    return explode('/', $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
  }
}