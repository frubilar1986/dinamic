<!-- index accionn!! -->
<?php $titulo=" ejercicio1- Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header">Ejercicio 1: <p>Ingregsar numero y verificar si es positivo, negativo o cero.</p>
                </div>
                <div class="card-body">

                    <div class = "alert alert-danger">
                        <?php 
                             $data = datos_submitidos();
                            //  print_r($_REQUEST);
                             $obj = new ctrol_eje1();
                            //print_r($obj);
                             $msj = $obj->leer_datos($data);
                             echo "<h2>Respuesta: $msj</h2>";
                        ?>

                    </div>
                    <div>
                        <a href="../eje1/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>
                    
                    </div>
                    <!-- <form action="../../Control/procesa_eje4.php" method="get" name="form_eje4" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ing nombre" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lbl-ape">Apellido:</label>
                                <input type="text" class="form-control" name="ape" id="ape" placeholder="Ing apellido" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Edad:</label>
                                <input type="number" class="form-control" min="1" max="80" name="edad" id="edad" placeholder="Ing edad" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Domicilio:</label>
                                <input type="text" class="form-control" name="domic" id="domic" placeholder="Ing domicilio" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>

                        </div>
                        <button class="col-md-12 mt=3 mb-2 btn btn-primary" type="submit">Enviar</button>
                        <button class="col-md-12 mt=3 btn btn-warning" type="reset">Limpiar</button>
                    </form> -->
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
           <?php 
           include_once "../../estructHtml/pie.php";
           ?>