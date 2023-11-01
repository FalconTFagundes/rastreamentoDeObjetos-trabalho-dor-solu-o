<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Barra de Navegação Vertical</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Seu CSS */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 0 0 0 10px;
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh);
            padding-top: 20px;
            overflow-y: auto;
        }

        a {
            color: white;
        }

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
            opacity: 0.7;
        }

        /* Estilos para o botão de fechar */
        #fecharIframe {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 999;
        }
        .frametable{
            max-width: 900px;
            
        }
       
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary p-4">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active mx-3">
                <a class="nav-link text-white" href="conteudo1.html" target="conteudoIframe" onclick="abrirIframe()">Conteúdo 1</a>
            </li>
            <li class="nav-item active mx-3">
                <a class="nav-link text-white" href="conteudo2.html" target="conteudoIframe" onclick="abrirIframe()">Conteúdo 2</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-info sidebar">

            <a class="navbar-brand mt-3 mx-4" href="../index.php">
                        <img src="../img/th.jpg" width="150" height="70px" class="d-inline-block " alt="" loading="lazy">
                    </a>

            <ul class="nav flex-column mt-3 ">
                        <button class="btn btn-secondary dropdown-toggle mx-auto " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Botão dropdown
                        </button>
                        <div class="dropdown-menu bg-info  " aria-labelledby="dropdownMenuButton">
                        
                        <a class="nav-link text-white"href="../adm/estokgeraladm.php" target="conteudoIframe" onclick="abrirIframe()">Estoque geral</a>
            </li>
                            <a class="dropdown-item" href="#">Alguma coisa aqui</a>
                        </div>
            </nav>

            <main role="main" class="col-md-4 ml-sm-auto col-lg-10 px-4 frametable">
            <iframe name="conteudoIframe" id="conteudoIframe" class="w-50 mt-5" style="border: none;"></iframe>

                <button id="fecharIframe" onclick="fecharIframe()">Fechar</button>
            </main>
        </div>
    </div>

    <script>
        function abrirIframe() {
            document.getElementById('conteudoIframe').style.display = 'block';
            document.getElementById('fecharIframe').style.display = 'block';
        }

        function fecharIframe() {
            document.getElementById('conteudoIframe').setAttribute('src', '');
            document.getElementById('conteudoIframe').style.display = 'none';
            document.getElementById('fecharIframe').style.display = 'none';
        }

        window.addEventListener('message', function (event) {
            if (event.data === 'fecharIframe') {
                fecharIframe();
            }
        });
       
    window.onload = function() {
        // Obter o elemento desejado e o iframe
        var elemento = document.querySelector('.frametable');
        var iframe = document.getElementById('conteudoIframe');

        // Obter a altura do elemento desejado
        var alturaElemento = elemento.offsetHeight;

        // Aplicar a altura do elemento desejado ao iframe
        iframe.style.height = alturaElemento + 'px';
    };

  
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>

