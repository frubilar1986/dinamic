<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span>
                    <p> Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                        //print_r($datosForm);
                        // echo '<br>';
                        $abmAuto = new abmAuto();
                        $objAuto = $abmAuto->buscar($datosForm);
                        // $auto = $objAuto[0];
                        //print_r($auto);
                        ?>
                        <table class="table table-success table-hover ">
                            <?php

                            echo "<h2>Resultado: </h2>";
                            if (!empty($objAuto)) {
                                echo " <th>Matricula</th> ";
                                echo " <th>Marca</th>";
                                echo " <th>Modelo</th>";
                                echo " <th>Nombre Propietario</th>";
                                echo " <th>Apellido Propietario</th>";
                                echo "<tr ><td>" . $objAuto[0]->getPatente() . "</td>";
                                echo "<td>" . $objAuto[0]->getMarca() . "</td>";
                                echo "<td>" . $objAuto[0]->getModelo() . "</td>";
                                echo "<td>" . $objAuto[0]->getObjPersona()->getNombre() . "</td>";
                                echo "<td>" . $objAuto[0]->getObjPersona()->getApellido() . "</td></tr>";
                            } else {
                                echo "<p class='h2 alet alert-danger'>No existe auto con patente ingresada</p>";
                            }
                            ?>
                        </table>
                        <?php
                        // sleep(5);
                            

                        ?>
                        


                    </div>
                    <div>
                        <a href="../eje4/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>