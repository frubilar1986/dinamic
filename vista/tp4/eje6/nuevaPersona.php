<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 6:--NUEVA PERSONA--</span>
                    <p> Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
                        los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
                        un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
                        pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
                        Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php

                        $resp = false;
                        $datosForm = datos_submitidos();
                        // print_r($datosForm);
                        $abmPersona = new abmPersona();
                        $arr['nroDni'] = $datosForm['nroDni'];

                        $personas = $abmPersona->buscar($arr);
                        if (count($personas) == 0) { // igual a cero, es porque no encontro persona con ese dni

                            $abmPersona->alta($datosForm);
                            $resp = true;
                        }
                        if ($resp) {
                            echo "<p class='h3 alert alert-success'> Persona Agregada correctamente</p>";
                        } else {
                            echo "<p class='h3 alert alert-danger'> No se pudo agregar a la persona . EXISTE.</p>";
                        }

                        ?>



                    </div>
                    <div>
                        <a href="../eje6/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>