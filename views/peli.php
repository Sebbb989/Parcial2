<?php
if (session_status() == 1) session_start();
require_once("models/productos_models.php");
require_once("controllers/peli_controllers.php");
?>
<br><br><br>
    <div class="container">
        <h1 class="text-center" id="catalogo">CATALOGO DE PELICULAS</h1>

        <div class="row">
            <?php
            if (isset($_GET["id"])) {
                $obj = new productos_models($_GET["id"]);
                $h1 = 1;
                $n = 6;
            } else {
                $resultado = productos_models::Mostrar();
                $h1 = 2;
            }
            ?>
            <?php foreach ($resultado as $producto) {
                if ($h1 == 1) {
                    if (count($resultado) == $n) {
                        $n = 7; ?>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 100px;">
                            <div class="card" style="width: 18rem;">
                                <img src="../img/peli<?php echo $resultado["id"] ?>.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3><?php echo $resultado["producto"] ?></h3>
                                    <p class="card-text"><?php echo $resultado["descripcion"] ?>.</p>
                                    <p>
                                    <h3><?php echo $resultado["precio"] ?>$</h3>
                                    </p>
                                    <hr>
                                    <p>Cantidad disponible: <?php echo $resultado["cantidad"] ?></p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div class="col text-center">
                                            <form method="post">
                                                <button type="submit" name="b" class="btn btn-success"><i class="bi bi-cart"></i> Comprar </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/peli<?php echo $producto["id"] ?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3><?php echo $producto["producto"] ?></h3>
                                <p class="card-text"><?php echo $producto["descripcion"] ?>.</p>
                                <p>
                                <h3><?php echo $producto["precio"] ?>$</h3>
                                </p>
                                <hr>
                                <p>Cantidad disponible: <?php echo $producto["cantidad"] ?></p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <div class="col text-center">
                                        <form method="post">
                                            <button type="submit" name="b" class="btn btn-success"><i class="bi bi-cart"></i> Comprar </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php
                } {
                ?>
            <?php }
            }
            ?>
        </div>

    </div>

    <br><br><br>
</div>