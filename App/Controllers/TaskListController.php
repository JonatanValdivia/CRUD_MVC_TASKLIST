<?php
use App\Core\Controller;


class TaskListController extends Controller{
  public function index(){
    $modelTaskList = $this->model('TaskList');
    $dados = $modelTaskList->listarTodos();
    $this->view('home', $dados);
  }

  public function store(){
    $modelTaskList = $this->model("TaskList");
    $modelTaskList->inserirDescricao();
    header('location: /');
  }

  public function delete($id){
    $modelTaskList = $this->model("TaskList");
    $modelTaskList->id = $id;
    $modelTaskList->deletar();
    header("location: /");
  }

  public function edit($id){
    $modelTaskList = $this->model("TaskList");
    $dados = $modelTaskList->buscarPorId($id);
    $this->view('update', $dados);
  }

  public function update($id){
    $modelTaskList = $this->model("TaskList");
    $modelTaskList->id = $id;
    $modelTaskList->atualizacao();
    header("location: /");
  }
}