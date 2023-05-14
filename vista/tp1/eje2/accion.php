<!-- index accionn!! -->
<?php $titulo = " ejercicio 2 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 2:</span>
                    <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
                        de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                        Enviar los datos del formulario por el método Get a otra página php que los reciba y
                        complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                        se cursan por semana.</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                        // print_r($data);
                        $obj = new ctrol_eje2();
                        //print_r($obj);
                        $msj = $obj->accion($data);
                        $contadorHs = $msj[1];
                        $dias = $msj[0];
                        
                        
                       
                        echo "<h2>Respuesta: </h2>";
                        echo "<h1 class='alert alert-primary' >La cantidad de horas de cursada son: $contadorHs hs </h1>";
                        echo "<h2>array retornado: </h2>";
                        print_r($dias);
                        ?>

                    </div>
                    <div>
                        <a href="../eje2/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>
                    
                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>