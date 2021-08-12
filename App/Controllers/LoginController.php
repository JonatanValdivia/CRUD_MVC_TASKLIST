<?php
// session_start();
use App\Core\Controller;

Class LoginController extends Controller{
  public function index (){
    $this->view('login');
  }

  public function logar(){
    $loginModel = $this->model('Login');
    $loginModel->nome = $_POST["nome"];
    $loginModel->senha = $_POST["senha"];
    $loginModel->login();
    $_SESSION['id'] = $loginModel->id;
    header('location: /');
  }

  public function deslogar(){
    session_destroy();
    header('location: /');
  }
}