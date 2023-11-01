<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>almoxarife</title>
    <style>
        body::before {
            content: "";
            background-image: url('../img/th.jpg');
            background-repeat: repeat;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3; 
        }

    </style>
</head>

<body class="">
   
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand mx-5" href="../index.php">
    <img src="../img/th.jpg" width="100" height="70px" class="d-inline-block align-top" alt="" loading="lazy">
  
  </a>
  <h3>Almoxerifado</h3>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active mx-3">
      <a class="nav-link text-white" href="cadprod.php">Cadastrar Produto</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link text-white" href="estoque.php"> Verificar estoque</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link text-white" href="saidaprod.php">Saída de produto</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link text-white" href="#">Notificações</a>
      </li>
        <a class="nav-link text-white" href="../painel/logout.php">Sair</a>
      </li>
    </ul>     
  </div>
</nav>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>