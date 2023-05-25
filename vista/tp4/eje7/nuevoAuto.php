<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 7:</span>
                    <p> Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
                        todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
                        “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
                        antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
                        link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
                        no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
                        control antes generada, no se puede acceder directamente a las clases del ORM</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        // $texto = "Ya existe el auto con esa patente";
                        $datosForm = datos_submitidos();
                        //  print_r($datosForm);
                        $abmAuto = new abmauto();
                        $where['patente'] = $datosForm['patente']; //ctrol si existe patente
                        $Autos = $abmAuto->buscar($where);
                        if (count($Autos) == 0) {

                            $abmPersona = new abmPersona();
                            $arrData['nroDni'] = $datosForm['dniDuenio'];

                            $arrPersonas = $abmPersona->buscar($arrData);
                            if (count($arrPersonas) == 0) {
                                // $texto = "No existe la persona para asigna auto":
                                echo "<p class='h2 alert alert-warning'> No existe la persona. Puede crearla en el siguiente link</p>";
                                echo "<a class= ' h3 link-primary' href='../eje6?nroDni=" . $datosForm['dniDuenio'] . "'>Crear Persona<a>";
                            } else {
                                $abmAuto->alta($datosForm);
                                $resp = true;
                                echo "<p class='h2 alert alert-success'> Auto creado! </p>";
                            }
                        } else {
                            echo "<p class='h2 alert alert-danger'> Patente ingresada YA existe en la base de datos! </p>";
                        }


                        ?>

                        <?php

                        ?>


                    </div>
                    <div>
                        <a href="../eje7/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>