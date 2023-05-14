<!-- index -->
<?php $titulo = "ejercicio 5";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 6:</span>
                    <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                        deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                        que procesa el formulario la cantidad de deportes que practica.</p>
                </div>
                <div class="card-body">
                    <!-- <form action="accion.php" method="post" name="form_eje6" class="needs-validation" novalidate> -->
                    <form action="accion.php" method="post" id="eje6" name="eje6" class="needs-validation" data-toggle="validator" novalidate>
                        <div class="row">
                            <!-- componente nombre -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro ">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" pattern="^[A-Za-z ]*$" autocomplete="off" placeholder="Ing nombre" required>
                                <!-- <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div> -->
                            </div>
                            <!-- componente input apellido -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-ape ">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" pattern="^[A-Za-z ]*$" autocomplete="off" placeholder="Ing apellido" required>
                                <!-- <div class="valid-feedback "></div>
                                <div class="invalid-feedback"></div> -->
                            </div>
                            <!-- componete input edad -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro">Edad:</label>
                                <input type="number" class="form-control"  name="edad" id="edad" placeholder="Ing edad" required>
                                <!-- <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback"></div> -->
                            </div>

                            <!-- Componente radio button sexo -->

                            <fieldset class="col-md-4 border">
                                <legend class="text-decoration-underline">Sexo/Genero:</legend>
                                <div class = 'form-check form-check-inline'>
                                    <div class="">
                                        <input type="radio" class="form-check-input" id="sexof" name="sexo" value="femenino" required>
                                        <label class="form-check-label" for="sexof">Femenino</label>
                                    </div>
                                    <div class=" ">
                                        <label class="form-check-label" for="sexom">Masculino</label>
                                        <input type="radio" class="form-check-input" id="sexom" name="sexo" value='masculino' required>
                                        <!-- <div class="invalid-feedback"></div> -->
                                    </div>
                                </div>
                            </fieldset>
                            <!-- <fieldset class="col-md-4 border">
                                <legend class="text-decoration-underline">Sexo/Genero:</legend>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="sexo" id="sexoM" value="masculino" required>
                                    <label for="sexoM">Masculino</label> -->
                                    <!-- <div class="valid-feedback">OK!</div>
                                    <div class = "invalid-feedback" >Campo requerido !!</div> -->
                                <!-- </div>
                                <div class="form-check form-check">
                                    <label for="sexoF">Femenino</label>
                                    <input type="radio" class="form-check-input" name="sexo" id="sexoF" value="femenino" required> -->
                                    <!-- <div class="valid-feedback">OK!</div>
                                    <div class="invalid-feedback">Campo requerido !!</div> -->
                                <!-- </div>
                            </fieldset> -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro">Domicilio:</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" pattern="^[A-Za-z0-9 ]*$" placeholder="Ing domicilio" required>
                                <!-- <div class="valid-feedback">OK!</div>
                                <div class="invalid-feedback">Campo requerido !!</div> -->
                            </div>
                            <!-- Componente select estudios -->
                            <div class="col-md-3 mb3">
                                <label for="lbl_estudios" class="form-label">Estudios que posee</label>
                                <select class="form-select"  name="estudios" required>
                                    <!-- <option selected>opciones</option> -->
                                    <option value="">Seleccione</option>
                                    <option value="1">Sin estudios</option>
                                    <option value="2">Primarios</option>
                                    <option value="3">Secundario</option>
                                </select>
                                <!-- <div class="valid-feedback"> bien!</div>
                                <div class="invalid-feedback"> debe seleccionar!</div> -->
                            </div>
                            <div class="">
                                <div class="col-md-6 mb-4 ">
                                    <p class="text-decoration-underline">Realiza algun deporte?:</p>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" name="deporte[]" type="checkbox" value="Futbol" id="deporte[]">
                                        <label class="form-check-label" for="futbol">
                                            Futbol
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" name="deporte[]" type="checkbox" value="Tennis" id="deporte[]">
                                        <label class="form-check-label" for="tennis">
                                            Tennis
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" name="deporte[]" type="checkbox" value="Basquet" id="deporte[]">
                                        <label class="form-check-label" for="basquet">
                                            Basquet
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input" name="deporte[]" type="checkbox" value="Voley" id="deporte[]">
                                        <label class="form-check-label" for="voley">
                                            Voley
                                        </label>
                                        <!-- <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div> -->
                                    </div>
                                    <!-- testing -->
                                </div>

                                <!-- <div class="col-md-4 mb-3">
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
                            </div> -->

                            </div>
                            <button class="col-md-12 mt-3 mb-2 btn btn-primary" type="submit">Enviar</button>
                            <button class="col-md-12 mt-1 btn btn-warning" type="reset">Limpiar</button>
                    </form>
                </div>
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <!-- <script type="text/javascript">
                $('[type!=\'hidden\'][data-val-required]').after('<span style="color:red; font-size: 20px; vertical-align: middle;">*</span>');
            </script> -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>