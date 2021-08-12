<?php

use App\Core\Model;

Class Login {
  public $id;
  public $nome;
  public $senha;

  public function login(){
    $sql = "select id from tbl_admin where nome = :nome and senha = :senha;";
    $stmt = Model::getCon()->prepare($sql);
    $stmt->bindValue(':nome', $this->nome);
    $stmt->bindValue(':senha', $this->senha);
    if($stmt->execute()){
      $resultado = $stmt->fetch(PDO::FETCH_OBJ);
      $this->id = $resultado->id;
      return $this;
    }else{
      return [];
    }
  }
}