<?php
use App\Core\Model;

class TaskList{
  public $id;
  public $descricao;

  public function listarTodos(){
    $sql = "SELECT * FROM tbl_task";
    $stmt = Model::getCon()->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
      $resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);
      return $resultado;
    }else{
      return [];
    }
  }

  public function inserirDescricao(){
    $sql = "INSERT INTO tbl_task (descricao) VALUE (:descricao)";
    $stmt = Model::getcon()->prepare($sql);
    $this->descricao = $_POST['descricao'];
    $stmt->bindValue(':descricao', $this->descricao);
    if($stmt->execute()){
      $this->id = Model::getCon()->lastInsertId();
      return $this;
    }else{
      return [];
    }
  }

  public function deletar(){
    $sql = "DELETE FROM tbl_task WHERE id = :id";
    $stmt = Model::getCon()->prepare($sql);
    $stmt->bindValue(':id', $this->id);
    $stmt->execute();
    return $this->id;
  }

  public function buscarPorId($id){
    $sql = "SELECT * FROM tbl_task WHERE id = :id";
    $stmt = Model::getCon()->prepare($sql);
    $stmt->bindValue(':id', $id);
    if($stmt->execute()){
      $resultado = $stmt->fetch(PDO::FETCH_OBJ);
      if(!$resultado){
        return false;
      }
      $this->id = $resultado->id;
      $this->descricao = $resultado->descricao;
      return $this;
    }else{
      return [];
    }
  }

  public function atualizacao(){
    $sql = "UPDATE tbl_task set descricao = :descricao where id = :id";
    $stmt = Model::getCon()->prepare($sql);
    $stmt->bindValue(":descricao", $this->descricao);
    $stmt->bindValue(":id", $this->id);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
}