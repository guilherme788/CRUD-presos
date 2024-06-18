<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="CSS/sidebar.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main-container d-flex w-100 ">
        <div class="sidebar " id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">190</span><span class="text-white">POLICIA</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fas fa-stream"></i></button>
            </div>
            <ul class="list-unstyled px-2">
                <li class=""><a href="../index.php" class="text-decoration-none px-3 py-2 d-block fw-light"> inicio</a></li>
                <li class=""><a href="../presos.php" class="text-decoration-none px-3 py-2 d-block fw-light"> presos</a></li>
                <li class=""><a href="../detidos/detidos.php" class="text-decoration-none px-3 py-2 d-block fw-light"> detidos</a></li>
                <li class="active"><a href="celas/index.php" class="text-decoration-none px-3 py-2 d-block fw-light"> celas</a></li>
            </ul>
            <hr class="h-color mx-2">

        </div>

        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-black">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">POLICE</span></a>
                    </div>
                    <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item d-flex flex-row bd-highlight mb-3"><a class="p-2 bd-highlight" href="#">pagina inicial</a></li>
                            <li class="nav-item d-flex flex-row bd-highlight mb-3"><a class="p-2 bd-highlight" href="#">ocôrrencias</a></li>
                            <li class="nav-item d-flex flex-row bd-highlight mb-3"><a class="btn btn-outline-danger" href="../login.php">Sair</a></li>

                        </ul>
                    </div>
                </div>
            </nav>