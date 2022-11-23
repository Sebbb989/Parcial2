<?php
if (session_status() == 1) session_start();
?>
<nav class="navbar navbar-expand-lg bg-success fixed-top" style="background: #e8499a!important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:white;">BaraFLIX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("shop1") ?>" style="color:white;">Inicio</a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
            <?php if (isset($_SESSION["usuario"])) { ?>

                <?php } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Login</a>
                    </li>
                <?php }  ?>
                </ul>

            <form action="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("validar") ?>" class="d-flex" method="post">
                <input class="form-control me-2" type="text" name="id" placeholder="" aria-label="Search" >
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                <button class="btn btn-dark" type="submit">Buscar</button>
            </form>
            
        </div>
    </div>
</nav>