<header>
  <?php
    if(!isset($_SESSION['id'])){
  ?>
  <div onclick='abrirTelaLogin()' id="login">Login</div>
  <?php
    } else{
  ?>
  <div id="logout" onclick="logout()">Logout</div>
  <?php
    }
  ?>
</header>
<div class="content">
  <h1>Lista de Tarefas</h1>
  <form method="POST" action="/TaskListController/store"> 
    <div class="input-group">
      <label for="tarefa">Descrição da tarefa</label>
      <input type="text" name="descricao" id="tarefa" placeholder="Digite a tarefa" required />
    </div>
    <button>Adicionar</button>
  </form>
    <hr />
      <div class="tarefas">
      <?php
          foreach($dados as $dado){
      ?>
        <div class="tarefa">
        <?=$dado->descricao?>
          <?php
            if(isset($_SESSION['id'])){
            
          ?>
          <span>   
            <button id="edicao" onclick="abrirPaginaUpdate(<?=$dado->id?>)">&#128393;</button>
          </span>
          <form method="POST" action="/TaskListController/delete/<?=$dado->id?>">   
            <button>&#128465;</button>
          </form>
          <?php
            }
          ?>
        </div>
      <?php
        }
      ?>
      <script src="./JS/acoesBotoes.js"></script>
      </div>
</div>