<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Expedição</title>

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

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand mx-5" href="../index.php">
    <img src="../img/th.jpg" width="100" height="70px" class="d-inline-block align-top" alt="" loading="lazy">
  
  </a>
  <h3>Expedição</h3>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active mx-3">
                    <a class="nav-link text-white" href="cadprodexped.php">Recebimento de material<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active mx-3">
                    <a class="nav-link text-white" href="saidaexpedicao.php">Saída de material<span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="estoquexped.php">Estoque</a>
                </li>
                
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="#">Notificações</a>
                </li>
               
            </ul>
        </div>
    </nav>
</body>

</html>