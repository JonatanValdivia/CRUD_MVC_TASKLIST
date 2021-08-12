<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #corpo{
      width: 50%;
      margin: auto; 
      margin-top: 40px;
    }

    #divLogar{
      display: flex;
      flex-direction: column;
    }

    #divLogar input{
      margin-bottom: 10px;
      outline: none;
      padding: 8px;
    }

    #divLogar button{
      width: 30%;
      font-size: 16px;
      margin: auto;
    }
  </style>
</head>
<body>
  <div id="corpo">
    <h1>Faça seu login</h1>
    <div id="divLogar">
      <form method="POST" action="/LoginController/logar/">  
        <input type="text" placeholder="Nome" name="nome" require>
        <input type="text" name="senha" placeholder="Senha">
        <button>Entrar</button>
      </form>
    </div>
  </div>
</body>
</html>