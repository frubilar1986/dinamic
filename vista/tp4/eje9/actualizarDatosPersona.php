<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
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

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                      // print_r($datosForm);
                        $ctroObjPersona = new ctrol_tp4_abmPersona;
                        $ctroObjPersona->modificacion($datosForm);
                        $arr['nroDni'] = $datosForm['nroDni'];
                        $listaDatos = $ctroObjPersona->buscar($arr);
                        ?>
                        <table class="table table-success table-hover ">
                       
                        <?php
                         if (count($listaDatos) > 0) {
                            echo "<th>Apellido</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Domicilio</th>";
                            echo "<th>Nro Documento</th>";
                            echo "<th>Fecha Nacimiento</th>";
                           // echo "<th>Ver Vehiculo</th>";

                            foreach ($listaDatos as $objDatos) {
                                echo"<tr><td>".$objDatos->getApellido() ."</td>";
                                echo"<td>".$objDatos->getNombre(). "</td>";
                                echo"<td>".$objDatos->getDomicilio(). "</td>";
                                echo"<td>".$objDatos->getNroDni(). "</td>";
                                echo"<td>".$objDatos->getFechaNac(). "</td>";

                                // echo "<tr ><td>" . $objDatos->getDescrip() . "</td>";
                               // echo "<td><a class='link-primary' href='autosPersonas.php?nroDni=" . $objDatos->getNroDni() . "'>Vehiculo</a></td></tr>";
                                // echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=" . $objDatos->getId() . "'>Borrar</a></td></tr>";
                            }
                        }else{
                            echo "<p class='h2 alert alert-warning' >Sin registros dentro de la base de datos</p>";
                        }
                        ?>
                    </table>
                     
                        
                        

                        <?php

                        ?>


                    </div>
                    <div>
                        <a href="../eje9/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>