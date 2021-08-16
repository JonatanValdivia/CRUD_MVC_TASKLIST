const abrirPaginaUpdate = (id) =>{
  window.location = `/TaskListController/edit/${id}`;
}

const abrirTelaLogin = () =>{
  window.location = `/LoginController/index`;
}

const logout = () =>{
  window.location = `/LoginController/deslogar`
}

const cadastreSe = () =>{
  window.location = `/CadastreSeController/index`;
}