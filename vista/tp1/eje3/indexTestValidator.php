<!-- index -->
<?php $titulo = "ejercicio 3";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"> <span class= "text-danger" >Ejercicio 3:</span>  <p>Crear una página php que contenga un formulario HTML como el que se indica en la
                                        imagen (darle formato con CSS), eeeeenviar estos datos por el método Post a otra página php
                                        que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                                        nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                                        Cambiar el método Post por Get y analizar las diferencias</p><img class ="rounded mx-auto d-block" src="img/ejemplo.png" alt="">
                </div>
                <div class="card-body">
                    <form action="accion.php" id="eje3" method="post" name="eje3"  autocomplete="off"  >
                        <div class=" ">
                            <div class="col-md-3 mb-3 " >
                                <label class = "form-label" for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="o apodo" pattern="^[A-Za-z ]*$" maxlength="15"  required>
                                <!-- <div class="valid-feedback">OK!</div> -->
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3 mb-3 ">
                                <label class = "mb-1" for="apellido">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="" pattern="^[A-Za-z ]*$"  required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="2">Edad:</label>
                                <input type="number" class="form-control" name="edad" id="edad" placeholder=""  required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="3">Direccion:</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="" pattern="^[A-Za-z0-9 ]*$"  required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div>
                            <!-- <div class="col-md-3 mb-3">
                                <label class = "mb-1" for="4">Viernes:</label>
                                <input type="number" class="form-control" name="hsViernes" id="4" placeholder="horas" min="0" max = "12" required>
                                <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div>
                            </div> -->
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