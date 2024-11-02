<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Daniel - Portfólio</title>
    <meta name="description" content="Portfólio de Daniel">
    <meta name="keywords" content="portfólio, desenvolvedor, tecnologia">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">

    <style>
        body {
            background-color: #121212;
            padding-top: 70px;
            padding-bottom: 20px;
            margin: 0;
        }
        
        .navbar {
            background-color: #3700b3;
        }

        .navbar-brand, .nav-link {
            color: #bb86fc;
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #ffffff;
        }

        .full-width-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0;
            padding: 0;
            position: relative;
        }
    </style>
</head>
<body>
    
    <nav id="navbar" class="navbar navbar-expand-xl fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
        <img href="<?php echo BASEURL; ?>index.php" src="<?php echo BASEURL; ?>./imagens/button2.png" alt="Ícone" style="height: 50px; width: 50px; margin-right: 15px;">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/daniel-almeida-03606a2b7/">Sobre Mim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ptechs/ptech.php">PTechs</a>
                    </li>
                    <!--<li class="nav-item ">
                        <a class="nav-link" href="#contato">Projetos</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>
