<?php
if (session_status() == 1) session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BaraFLIX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("shop1") ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#catalogo">Catalogo</a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
            <?php if (isset($_SESSION["usuario"])) { ?>
                

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION["usuario"] ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Cerrar Sesion</a></li>

                            
                        </ul>
                    </li>

                <?php } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Login</a>
                    </li>
                <?php }  ?>
                </ul>

            <form action="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("validar") ?>" class="d-flex" method="post">
                <input class="form-control me-2" type="text" name="id" placeholder="Busqueda por ID" aria-label="Search" >
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                <button class="btn btn-dark" type="submit">Buscar</button>
            </form>
            
        </div>
    </div>
</nav>