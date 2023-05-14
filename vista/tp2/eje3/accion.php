<!-- index accionn!! -->
<?php $titulo = " ejercicio 3 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 3:</span>
                    <p>Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                        y la password para loguearse. Los datos del formulario son enviados a un script
                        verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                        arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                        de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                        y en caso contrario un mensaje de error. </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $data = datos_submitidos();
                        // echo '<br>en accion<br>';
                         print_r($data);
                        $obj = new tp2_ctrol_eje3();
                        $resp = $obj->accion($data);
                        // $obj5 = new ctrol_eje5();
                        // $obj6 = new ctrol_eje6();


                        //    $msj = $obj4->accion($data);
                        //   $msj .= ", ".$obj5->accion($data);
                        //   $msj .=$obj6->accion($data);



                        echo "<h2>Resultado: </h2>";
                        echo "<h1 class='' >$resp</h1>";

                        ?>

                    </div>
                    <div>
                        <a href="../eje3/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>