<!-- index accionn!! -->
<?php $titulo = " ejercicio 2 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 6:</span>
                <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                                            deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                                            que procesa el formulario la cantidad de deportes que practica.</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                       // print_r($data);
                       $obj4 = new ctrol_eje4();
                        //$obj4->accion($data);
                        $obj5 = new ctrol_eje5();
                        $obj6 = new ctrol_eje6();
                        
                        
                       $msj = $obj4->accion($data);
                      $msj .= ", ".$obj5->accion($data);
                      $msj .=$obj6->accion($data);



                       echo "<h1 class='alert alert-primary' >$msj</h1>";
                      // echo "<h2>Respuesta: </h2>";
                       
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