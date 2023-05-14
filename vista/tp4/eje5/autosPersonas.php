<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
//$objAuto = new ctrol_tp4_abmAuto;
//$dniDuenio = datos_submitidos()
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 5: VEHICULOS DE CADA PERSONA-- </span>
                    <p> Crear una página "listaPersonas.php" que muestre un listado con las personas que se
                        encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                        los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                       
                        $obj = new abmPersona();
                        // $where['nroDni'] = $datosForm['nroDni']; 
                        $arrPersona = $obj->buscar($datosForm);
                        $persona = $arrPersona[0];//primer persona encontrada
  
                        $arrAutos = $persona->getColObjAutos();//orm persona 1 ------- m Autos
                      
                        ?>
                        <h2 class="" >Resultado:</h2>
                        <table class="table table-success table-hover ">
                            <?php
                          
                                if (count($arrAutos) > 0) {
                                    echo"<p class='h2 alert alert-success'>".$persona->getApellido().", ".$persona->getNombre()."  registra vehiculos:   </p>";
                                    echo "<th>Patente</th>";
                                    echo "<th>Marca</th>";
                                    echo "<th>Modelo</th>";
                                    echo "<th>Dni Duen&ntilde;o</th>";
                                   
                                    foreach ($arrAutos as $auto) {
                                        echo"<tr><td>".$auto->getPatente() ."</td>";
                                        echo"<td>".$auto->getMarca(). "</td>";
                                        echo"<td>".$auto->getModelo(). "</td>";
                                        echo"<td>".$auto->getObjPersona()->getNroDni(). "</td>";
                                        // echo "<tr ><td>" . $objDatos->getDescrip() . "</td>";
                                        //echo "<td><a class='link-primary' href='autosPersonas.php?nroDni=" . $objDatos->getNroDni() . "'>Vehiculo</a></td></tr>";
                                        // echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=" . $objDatos->getId() . "'>Borrar</a></td></tr>";
                                    }
                                }else{
                                    echo"<p class='h2 alert alert-danger'>".$persona->getApellido().", ".$persona->getNombre()." no registra vehiculos a su nombre. </p>";
                                }
                           
                            ?>
                        </table>
                        <?php

                        ?>


                    </div>
                    <div>
                        <a href="../eje5/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>