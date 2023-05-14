<!-- index accionn!! -->
<?php $titulo = " ejercicio 2 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 8:</span>
                    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                        Agregar un botón para limpiar el formulario y volver a consultar. </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                        // echo '<br>en accion<br>';
                        print_r($data);
                        $obj8 = new ctrol_eje8();
                        $resp = $obj8->accion($data);
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
                        <a href="../eje8/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>