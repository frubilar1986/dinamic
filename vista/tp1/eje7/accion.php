<!-- index accionn!! -->
<?php $titulo = " ejercicio 2 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 7:</span>
                <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En
                        los inputs se ingresarán números y el select debe dar la opción de una operación
                        matemática que podrá resolverse usando los números ingresados. En la página que
                        procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                        uno de los operandos y el resultado obtenido de resolver la operación. </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                        print_r($data);
                       // echo '<br>en accion<br>';
                       // print_r($data);
                        $obj4 = new ctrol_eje7();
                        $resp = $obj4->accion($data);
                       // $obj5 = new ctrol_eje5();
                       // $obj6 = new ctrol_eje6();
                        
                        
                    //    $msj = $obj4->accion($data);
                    //   $msj .= ", ".$obj5->accion($data);
                    //   $msj .=$obj6->accion($data);



                    echo "<h2>Resultado: </h2>";
                      echo "<h1 class='alert alert-primary' >$resp</h1>";
                       
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