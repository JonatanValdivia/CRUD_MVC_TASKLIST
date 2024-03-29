<style>
  
  * {
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  display: flex;
  align-items: center;
  background-color: rgba(118, 94, 94, 0.877);
  justify-content: center;
  flex-direction: column;
}

.content {
  position: relative;
  padding: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-top: 45px;
  background-color: #ccc;
  border-radius: 6px;
  box-shadow: 0px 10px 20px #555;
}

.tarefas {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.tarefa {
  width: 100%;
  background-color: #555;
  padding: 15px;
  border-radius: 6px;
  cursor: pointer;

  color: white;

  transition: 0.4s;

  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-around;
  
}

.tarefa:hover{
  box-shadow: 0px 0px 20px #555;
}

.tarefa form{
  position: absolute;
  right: 10px;
  font-size: 15px;

  transition: 0.2s;
}

.tarefa #form-editar{
  right: 35px;
}

#editar{
  color: white;
  border: 0;
  font-size: 20px
}

#editar:hover{
  box-shadow: 0px 0px 0px rgba(0,0,0,0);
  transition: 0.5s;
  color: red;
}

.tarefa form:hover{
  font-size: 25px;
}

.tarefa form button{
  font-size: 20px;
  color: white;
  transition: 0.2s;
  border: 0px;
  float: right;
  font-weight: normal;
  box-shadow: none;
}

.tarefa form button:hover{
  transition: 0.5s;
  color: red;
  font-size: 30px;
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

hr{
  width: 100%;
}

button {
  padding: 6px;
  background-color: transparent;

  border: 2px solid black;
  border-radius: 6px;
  font-weight: bold;
  font-size: 14px;

  cursor: pointer;
}

button:hover {
  box-shadow: 0px 2px 10px black;
}

h1 {
  font-size: 24px;
  text-align: center;
  margin: 0;
  margin-bottom: 10px;
}

h1 em {
  font-style: unset;
  font-size: 44px;
}

.input-group {
  display: flex;
  flex-direction: column;
}

.input-group label {
  margin-bottom: 2px;
  font-size: 14px;
}

.input-group input,
.input-group select {
  padding: 6px 8px;
  min-width: 300px;

  font-size: 16px;
  border: 1px solid whitesmoke;
  border-radius: 4px;
}

.mensagem{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 10px;
  text-align: center;
  background-color: rgba(255, 0, 0, 0.748);
  color: white;
  border: 2px dashed darkred;
  border-radius: 0px 0px 6px 6px;
}
</style>

<div class="content">
  <h1>Lista de Tarefas</h1>
  <form method="POST" action="/TaskListController/update/<?=$dados->id?>"> 
    <div class="input-group">
      <label for="tarefa">Descrição da tarefa</label>
      <input type="text" name="descricaoUp" id="tarefa" value="<?=$dados->descricao?>" required />
    </div>
    <button>Adicionar</button>
  </form>
</div>