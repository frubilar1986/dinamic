<!-- index accionn!! -->
<?php $titulo = " ejercicio 2 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 5:</span>
                <p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                        “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                        estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                        apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                        un mensaje que indique el tipo de estudios que posee y su sexo.</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                        //print_r($data);
                        $obj4 = new ctrol_eje4();
                        //$obj4->accion($data);
                        $obj5 = new ctrol_eje5();
                        
                        $msj = $obj4->accion($data);
                        $msj .= ", ".$obj5->accion($data);



                       echo "<h1 class='alert alert-primary' >$msj</h1>";
                       // echo "<h2>Respuesta: </h2>";
                       
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