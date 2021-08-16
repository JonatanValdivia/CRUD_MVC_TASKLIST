<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      box-sizing: border-box;
    }

    #corpo{
      width: 50%;
      margin: auto; 
      margin-top: 40px;
    }

    form{
      display: flex;
      flex-direction: column;
    }

    #divCadastrar input{
      margin-bottom: 10px;
      outline: none;
      padding: 8px;
    }

    #divCadastrar button{
      width: 30%;
      font-size: 16px;
      margin: auto;
    }

    #mensagem{
      margin: auto;
      width: 300px;
      height: 40px;
      background-color: rgba(255, 0, 0, 0.403);
      border-radius: 30px;
      padding: 10px;
      text-align: center;
      transition: 3s;
    }
  </style>
</head>
<body>
  <div id="corpo">
    <!-- Mensagem de erro -->
    <?php
      if(isset($_SESSION['mensagemErro'])){
    ?>
    <div id="mensagem"><?php echo $_SESSION['mensagemErro']; ?></div>
    <?php
      }
    ?>
    <script>
      setTimeout(()=>{
        var mensagem = document.getElementById('mensagem')
        mensagem.style.display = 'none';
      }, 2000)
    </script>
    
    <h1>Faça seu cadastro</h1>
    <div id="divCadastrar">
      <form method="POST" action="/CadastreSeController/store">  
        <input type="text" placeholder="Nome" name="nomeCadastro" require>
        <input type="text" name="senhaCadastro" placeholder="Senha">
        <input type="text" name="senhaConf" placeholder="Confirmar senha">
        <button>Cadastrar</button>
      </form>
    </div>
  </div>
</body>
</html>