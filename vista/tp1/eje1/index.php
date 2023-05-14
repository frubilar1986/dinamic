<!-- index -->
<?php $titulo = "ejercicio 1";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 1:</span>
                    <p>Ingregsar numero y verificar si es positivo, negativo o cero</p>
                </div>
                <div class="card-body">
                    <form action="accion.php" method="get" name="form_eje1" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="lbl-nro">Numero:</label>
                                <input type="number" class="form-control" name="nro" id="nro" placeholder="Ing un numero" required>
                                <div class="valid-feedback">OK!</div>
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