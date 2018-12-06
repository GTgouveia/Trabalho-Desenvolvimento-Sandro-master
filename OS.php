
<!DOCTYPE html>
<html>
<head>
  <title>Ordem de Serviço</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    #color{
      border-color: red;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Empresa</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="menu.php">Home</a></li>
        
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cadastroCliente.php">Clientes</a></li>
          <li><a href="produtos.php">Produtos</a></li>
        </ul>
      </li> 

       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ordem de Serviço<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="OS.php">O.S</a></li>
        </ul>
      </li>

        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Aluguel<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="aluguel.php">Alugar</a></li>
        </ul>
      </li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 align="center">Ordem de Serviço</h1>
      <br/>
      <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nome_cliente">Nome do Cliente:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="nome_cliente" placeholder="Infome o nome do cliente">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="cli_endRua">Endereço:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="cli_endRua" placeholder="Informe o endereço">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="cli_endComplemento">Complemento:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="cli_endComplemento" placeholder="Complemento">
    </div>
  </div><div class="form-group">
    <label class="control-label col-sm-2" for="cli_endBairro">Bairro:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="cli_endBairro" placeholder="Informe o bairro">
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="cli_endCEP">CEP:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="cli_endCEP" placeholder="Informe o CEP">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cli_endNum">Numero de telefone:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="cli_endNum" placeholder="Informe o numero da residencia">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cli_telefone">Telefone :</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" id="cli_telefone" placeholder="Informe o telefone">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="cli_desc_problema">Descrição do Problema :</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" id="cli_desc_problema" placeholder="Informe o problema">
    </div>
  </div>
  <br/>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">SOLICITAR</button>
    </div>
  </div>
</form>
    </div>
    <div class="col-sm-2 sidenav">
      
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
</footer>

</body>
</html>