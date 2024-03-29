<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../util/css/bootstrap.min.css">
    <link rel="stylesheet" href="../util/css/style.css">
    <link rel="shortcut icon" href="../util/images/logo.ico">
    <meta name="google-adsense-account" content="ca-pub-1454307309376664">
</head>


<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-light" id="nav" data-bs-theme="dark">
        <div class="container">
            <div class="logo">
                <a href="../index.php"><img class="rounded-5 img-fluid" width="80px" src="../util/images/Tecnología.gif" alt="logo"></a></img>
            </div>
            <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse position-fluid badge" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-3 fs-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary btn btn-outline-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
                        <ul class="dropdown-menu bg-light rounded-2">
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="acessorios.php">Acessorios</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="computadores.php">Computadores Fixos</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="conexao.php">Conexão/Rede</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="discos.php">Discos</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="memorias.php">Memórias</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="monitores.php">Monitores</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="motherboards.php">Motherboards</a>
                            </li>                            
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="placasgraficas.php">Placas Gráficas</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="portateis.php">Portáteis</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="procesadores.php">Processadores</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="ratoseteclados.php">Ratos
                                    e Teclados</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-primary rounded-2" href="torres.php">Torres/Caixas</a>
                            </li>
                            <!-- <li>
                                <hr class="dropdown-divider bg-dark">
                            </li>
                            <li><a class="dropdown-item text-primary rounded-2" href="todo.php">Todos os
                                    Produtos</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary btn btn-outline-secondary" href="desenho.php">Desenho WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary btn btn-outline-secondary" aria-disabled="true" href="../info/sobre.php">Sobre Nós</a>
                    </li>
                    <li class="nav-item" id="nav_login"><a class="nav-link text-primary btn btn-outline-secondary" aria-disabled="true" href="../conta/login.php"><i class="bi bi-person-fill-add"> Iniciar Sessão</i></a>
                    </li>
                    <li class="nav-item dropdown" id="carro">
                        <a class="nav-link dropdown-toggle text-primary btn btn-outline-secondary" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-cart-fill"></i>
                        </a>
                        <ul class="dropdown-menu bg-light rounded-2">
                            <a href="" class="dropdown-item text-primary rounded-2" > Meu carro </a></ul>
                    </li>
                    <li class="nav-item dropdown" id="nav_user">
                        <a class="nav-link dropdown-toggle text-primary btn btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img id="image_nav" src="" width="35px" class="img-fluid rounded-circle"></i>
                            <span id="user_login"></span>
                        </a>
                        <ul class="dropdown-menu bg-light rounded-2">
                            <li><a class="dropdown-item text-primary rounded-2" href="#"><i class="bi bi-person-fill-gear"> Meu
                                        perfil</i></a></li>
                            <li><a class="dropdown-item text-primary rounded-2" href="#"><i class="bi bi-bag-fill"> Meus Pedidos</i></a>
                            </li>
                            <li><a class="dropdown-item text-primary rounded-2" href="../controllers/logout.php"><i class="bi bi-person-fill-x"> Fechar
                                        Sessão</i></a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light bi bi-search" type="submit"></button>
            </form> -->
            </div>
        </div>
    </nav>
    <div class="aire"></div>