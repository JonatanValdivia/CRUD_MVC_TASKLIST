<?php

use App\Core\Model;

class Cadastro{
  public $id;
  public $nome;
  public $senha;

  public function cadastrar(){
    $sql = 'insert into tbl_admin(nome, senha) values (:nome, :senha);';
    $stmt = Model::getCon()->prepare($sql);
    $stmt->bindValue(':nome', $this->nome);
    $stmt->bindValue(':senha', $this->senha);
    if($stmt->execute()){
      $this->id = Model::getCon()->lastInsertId();
    }
    return $this;
  }
}