const $ = element => document.querySelector(element);

const botao = $('#botao');
const abrirPaginaUpdate = (id) =>{
  window.location = `/TaskListController/edit/${id}`;
}