<?php


include('../../estructHtml/cabecera.php');
// include ('../../../utiles/funciones.php');
// print_r($_SERVER);
//  print_r($_SESSION);
if (isset($_SESSION['activa'])) {
?>

    <div class="col-lg-12 py-1 px-1">
        <div class="">

            <div class="col-lg-10">
                <div class="card shadown-lg p-3 mb-2 bg-white">
                    <!--inicio clase card-->
                    <div class="card-header"><span class="text-danger">Ejercicio 9:</span>
                        <p> Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
                            numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
                            busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
                            formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
                            documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
                            persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                            antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    </div>
                    <div class="card-body">

                        <h1>Pagina segura (?)</h1>
                        <?php echo'<pre>'; print_r($_SESSION);echo '</pre>';
                        
                            $abmUsers = new AbmUsuario;
                            $usuarios = $abmUsers->buscar(null);
                            viewArray($usuarios);
                        ?>

                    </div><!-- fin contenedor card-body del formulario -->


                    <?php
                    // echo '123456 <br>';
                    // echo md5('123456');


                    ?>
                    <a href="verificaLog.php?accion=cerrar">
                        <div class="btn-group btn-group-lg" role="group" aria-label="...">Cerrar sesion</div>
                    </a>





                </div>
                <!--fin clase card-->
                <!-- Footer -->

            <?php
        } else {
            ?>
                <div>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">ERROR!</h4>
                        <p>Usuario no registrado, . This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Para poder registrarse haga click <a href="index.php">aqu&iacute;</a></p>
                    </div>
                <?php

            }
                ?>
                <?php
                include_once "../../estructHtml/pie.php";
                ?>