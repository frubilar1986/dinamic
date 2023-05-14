<!-- index -->
<?php $titulo = "ejercicio 2";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"> <span class= "text-danger" >Ejercicio 2:</span>  <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
                            de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                            Enviar los datos del formulario por el método Get a otra página php que los reciba y
                            complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                            se cursan por semana.</p>
                </div>
                <div class="card-body">
                    <form action="accion.php" method="post" name="form_eje2" class=" needs-validation" novalidate onsubmit="return valHsPwd()">
                        <div class="row g-3 ">
                            <div class="col-md-3 mb-3">
                                <label class = "form-label" for="0">Lunes:</label>
                                <input type="number" class="form-control" name="hsLunes" id="0" placeholder="horas" min="0" max = "12" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="1">Martes:</label>
                                <input type="number" class="form-control" name="hsMartes" id="1" placeholder="horas" min="0" max = "12" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="2">Miercoles:</label>
                                <input type="number" class="form-control" name="hsMiercoles" id="2" placeholder="horas" min="0" max = "12" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="3">Jueves:</label>
                                <input type="number" class="form-control" name="hsJueves" id="3" placeholder="horas" min="0" max = "12" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="4">Viernes:</label>
                                <input type="number" class="form-control" name="hsViernes" id="4" placeholder="horas" min="0" max = "12" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <!-- <div class="col-md-4 mb-3">
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
                            </div> -->

                        </div>
                        <button class="col-md-12   btn btn-primary" type="submit">Enviar</button>
                        <button class="col-md-12 mt-2 btn btn-warning" type="reset">Limpiar</button>
                    </form>
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
           <?php 
           include_once "../../estructHtml/pie.php";
           ?>