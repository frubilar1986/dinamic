<!-- index accionn!! -->
<?php $titulo = " ejercicio 2 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span>
                    <p>Crear una página php que contenga un formulario HTML como el que se indica en la
                        imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                        que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                        nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                        Cambiar el método Post por Get y analizar las diferencias</p><img class="rounded mx-auto d-block" src="img/ejemplo.png" alt="">
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                        //print_r($data);
                        $obj = new ctrol_eje4();
                        //print_r($obj);
                        $msj = $obj->accion($data);
                        



                        echo "<h1 class='alert alert-primary' >$msj</h1>";
                       // echo "<h2>Respuesta: </h2>";
                       
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