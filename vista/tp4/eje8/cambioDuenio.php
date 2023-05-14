<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 8:</span>
                    <p> Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
                        numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
                        a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
                        ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
                        cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                        antes generada, no se puede acceder directamente a las clases del ORM.</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                        //  print_r($datosForm);
                        $abmAuto = new abmAuto();
                        $abmPersona = new abmPersona();

                        $arrData['patente'] = strtoupper($datosForm['patente']);
                        // viewArray($arrData);
                        $autos = $abmAuto->buscar($arrData); //ctrol si existe patente

                        // viewArray($arregloAutos);

                        if (count($autos) == 1) {

                            //  echo 'busca persona';

                            $arrData['nroDni'] = $datosForm['dniPersona'];

                            $personas = $abmPersona->buscar($arrData);

                            // viewArray($arregloPersonas);

                            if (count($personas) == 1) {
                                $objAuto = $autos[0];
                                $objPersona = $personas[0];

                                // print_r($objAuto);
                                // print_r($objPersona);
                                if ($objAuto->getObjPersona()->getNroDni() == $objPersona->getNroDni()) {
                                    echo " <p class = 'h2 alert alert-danger'> El auto ya pertenece a " . $objPersona->getNombre() . " !</p>";
                                } else {

                                    $arrAuto = [
                                        'patente' => $objAuto->getPatente(),
                                        'marca' => $objAuto->getMarca(),
                                        'modelo' => $objAuto->getModelo(),
                                        'dniDuenio' => $objPersona->getNroDni()
                                    ];

                                    // echo 'antes de modificar  el modelo';


                                    $resp =  $abmAuto->modificacion($arrAuto);
                                }
                            } else {
                                echo " <p class = 'h2 alert alert-danger'> Numero de documento ingresado no pertenece a ninguna persona registrada!</p>";
                            }

                            // $arrData2['nroDni'] = $arregloAutos[0]->getObjPersona()->getNroDni(); // ctrol si esxiste persona
                        } else {
                            echo " <p class = 'h2 alert alert-danger'> Patente ingresada no pertenece a ningun auto registrado.!</p>";
                        }

                        if ($resp) {
                            echo " <p class = 'h2 alert alert-success'> El cambio de due&ntilde;o se realizo con exito!.</p>";
                        }
                        ?>

                        <?php

                        ?>


                    </div>
                    <div>
                        <a href="../eje8/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>