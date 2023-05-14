<!-- index -->
<?php $titulo = "ejercicio 5";
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
                    <!-- <form action="accion.php" method="get" name="form_eje5" class="needs-validation" novalidate> -->
                    <form action="accion.php" method="post" id="eje5" name="eje5" class="needs-validation" data-toggle='validator' novalidate>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro ">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ing nombre" pattern="^[A-Za-z ]*$" autocomplete="off" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <!-- componente input apellido -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-ape ">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ing apellido" pattern="^[A-Za-z ]*$" autocomplete="off" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <!-- componete input edad -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro">Edad:</label>
                                <input type="number" class="form-control" name="edad" id="edad" placeholder="Ing edad" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>


                            <!-- Componente radio button sexo/genero -->

                            <!-- hasta aca -->
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
                            

                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro">Domicilio:</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ing domicilio" pattern="^[A-Za-z0-9 ]*$" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <!-- Componente select estudios -->
                            <div class="col-md-3 mb3">
                                <label for="lbl_estudios" class="form-label">Estudios que posee</label>
                                <select class="form-select" id="estudios" name="estudios" aria-label="Nivel de estudios?" required>
                                    <!-- <option selected>opciones</option> -->
                                    <option value="">Seleccione</option>
                                    <option value="1">Sin estudios</option>
                                    <option value="2">Primarios</option>
                                    <option value="3">Secundario</option>
                                </select>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>


                        </div>
                        <button class="col-md-12 mt-3 mb-2 btn btn-primary" type="submit">Enviar</button>
                        <button class="col-md-12 mt-1 btn btn-warning" type="reset">Limpiar</button>
                    </form>
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>