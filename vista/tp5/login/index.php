<!-- index -->
<?php $titulo = "Login";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Iniciar session: TP5</span>
                    <p>Formulario de login para validar credenciales usando base de datos con variable session de php. exitos! </p>
                    <?php //$pass= md5("cata2015");echo $pass
                    print_r($_SESSION)?>
                </div>
                <br>
                <div class="container ">
                    <div class='row  '>
                        <div class="col-lg-5 mx-auto border">
                            <div class="card-body p-5 rounded shadow bg-white">
                                <!-- <form action="accion.php" method="post" name="eje7" class="needs-validation" novalidate onsubmit="return ctrlJsEje7()"> -->
                                    <!-- FORMULIARIO -->
                                <form action="verificaLog.php" method="post" id='tp5login' name="tp5login" class="was-validated" data-toggle="validator" novalidate onsubmit="">

                                    <div class=''>
                                        <p class="h3 mb-3 text-warning" ><i class="fas fa-sign-in-alt "></i> Login</p>
                                        <div class="form-floating col-md-11 mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="usnombre" pattern="^[A-Za-z ]*$" placeholder="username" autocomplete="off" required>
                                            <label for="floatingInput " class="text-muted"> <i class="bi bi-person"></i> Username</label>
                                        </div>
                                        <div class="form-floating col-md-11">
                                            <input type="password" class="form-control" id="floatingPassword" name="uspass" placeholder="uspass" required>
                                            <label for="floatingPassword" class="text-muted "><i class="bi bi-key-fill"></i>  Password</label>
                                        </div>
                                       
                                    </div>
                                    <div class="d-grid gap-2 col-9 mx-auto pt-3">
                                        <button class="btn btn-success " type="submit">Enviar</button>
                                        <a class='d-flex justify-content-end' href="#">  Nuevo usuario</a>
                                        <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <script type="text/javascript">
                // $('[type!=\'hidden\'][data-val-required]').after('<span style="color:red; font-size: 20px; vertical-align: middle;">*</span>');
            </script>
            <?php
            include_once "../../estructHtml/pie.php";
            ?>