<?php
if (session_status() == 1) session_start();
?>
<body style="background-image: url(../img/background.jpg); background-size: 100% 100%;">
    
<section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-9e13">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-shape-rectangle u-grey u-group-1">
            <div class="u-container-layout u-container-layout-1" style="background-color: red; margin: 625px; margin-top: auto;" >
                <div class="u-form u-form-1" style="margin-top: 100px;">
                    <?php

                    if (isset($_GET["msg"])) {
                        $msg = 1;
                    } else {
                        $msg = 2;
                    }
                    if ($msg == 1) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                            <strong>Ingrese un Usuario o Contraseña Validos!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    <?php } ?>

                    <form action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("validar") ?>" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="text-align:center; height: 500px; width:500px; margin-top: 100px;">
                        <div class="u-form-group u-form-name" style="text-align:center; margin-top: 100px; padding-top:100px;">
                            <a>Usuario: <input type="text" placeholder="Introduzca usuario" id="name-7bf1" name="Usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" style="margin-left: 25px;"></a>
                        </div>
                        <br>
                        <div class="u-form-email u-form-group" style="text-align:center;">
                        <a>Contraseña: <input type="password" placeholder="Introduzca contraseña" id="email-7bf1" name="Contra" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" ></a>
                        </div>
                        <br>
                        <br>
                        <div class="u-align-center u-form-group u-form-submit">
                            <button type="subtmit" class="btn btn-dark btn-lg">Enviar</button>
                        </div>
                        <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>