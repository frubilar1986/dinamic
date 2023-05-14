<!-- index -->
<?php $titulo = "ejercicio 4";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span><p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                        esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                        persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                        Enviar los datos usando el método GET y luego probar de modificar los datos
                        directamente en la url para ver los dos posibles mensajes.</p>
                </div>
                <div class="card-body">
                    <!-- <form action="accion.php" method="get" id="eje4" name="form_eje4" class="needs-validation" data-toggle="validator " novalidate> -->
                    <form action="accion.php" method="get" id="eje4" name="eje4" class="needs-validation" data-toggle="validator " novalidate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ing nombre" pattern="^[A-Za-z ]*$" autocomplete="off" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"> </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lbl-ape">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ing apellido" pattern="^[A-Za-z ]*$" autocomplete="off" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Edad:</label>
                                <input type="number" class="form-control"  name="edad" id="edad" placeholder="Ing edad" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Domicilio:</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ing domicilio" pattern="^[A-Za-z0-9 ]*$" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>

                        </div>
                        <button class="col-md-12 mt=3 mb-2 btn btn-primary" type="submit">Enviar</button>
                        <button class="col-md-12 mt=3 btn btn-warning" type="reset">Limpiar</button>
                    </form>
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
           <?php 
           include_once "../../estructHtml/pie.php";
           ?>