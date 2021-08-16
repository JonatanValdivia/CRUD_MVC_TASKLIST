<?php

use App\Core\Controller;
use App\Core\Model;

class CadastreSeController extends Controller{
  public function index(){
    $this->view('cadastrar');
  }

  public function store(){
    $modelCadastro = $this->model('Cadastro');
    if($_POST['senhaCadastro'] == $_POST['senhaConf']){
      $modelCadastro->nome = $_POST['nomeCadastro'];
      $modelCadastro->senha = $_POST['senhaCadastro'];
      $modelCadastro->cadastrar();
      header('location: /');
    }else{
      $_SESSION['mensagemErro'] = "Senhas não correspondem!";
      header('location: /CadastreSeController/index');
    }
  }
}