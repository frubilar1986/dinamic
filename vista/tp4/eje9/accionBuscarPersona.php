<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 9:</span>
                    <p> Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
                        numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
                        busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
                        formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
                        documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
                        persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                        antes generada, no se puede acceder directamente a las clases del ORM.</p>
                </div>
                <div class=" card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                        // print_r($datosForm);
                        $where['nroDni'] = $datosForm['nroDni'];
                        // $objCtrolAuto = new ctrol_tp4_abmAuto();
                        $objctrolPers = new ctrol_tp4_abmPersona();
                        $colPersonas = $objctrolPers->buscar($where);
                        //$persona = $colPersonas[0];
                        if(count($colPersonas) == 1){
                            $persona = $colPersonas[0];
                        ?>
                         <form action="actualizarDatosPersona.php" method="post" id="tp4Eje6" class="was-validated" data-toggle="validator" novalidate onsubmit="validaEdad()">
                        <div>
                            <div class="row g-3">

                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">DNI</label>
                                    <input type="text" name="nroDni" readonly pattern="^[0-9]{1,8}$" class="form-control" value="<?= $persona->getNroDni() ?>"  id="" placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" pattern="^[A-Za-z ]*$" class="form-control" value="<?= $persona->getApellido() ?>" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" pattern="^[A-Za-z ]*$" class="form-control" value="<?= $persona->getNombre() ?>" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                                    <input type="text" name="telefono" class="form-control" pattern="^[0-9]{1,12}$" value="<?= $persona->getTelefono() ?>" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" name="fechaNac" class="form-control" value="<?= $persona->getFechaNac() ?>"  id="fn" onblur="validaEdad()"  placeholder="2000-11-12" required>
                                </div>
                                <div class="col-sm-1 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Edad</label>
                                    <input type="text" name="edad" readonly class="form-control"   id="edad"  placeholder=""  >
                                </div>
                                <div id="alerta" class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oh No!</strong> La edad esta mal!!!!.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Domicilio</label>
                                    <input type="text" name="domicilio" class="form-control" value="<?= $persona->getDomicilio() ?>" id="" pattern="^[A-Za-z0-9 ]*$" placeholder="" required>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                                <button class="btn btn-secondary" type="reset">reset</button>
                            </div>
                        </div>
                    </form><?php }else{ 
                        echo "<p class = 'h2 alert alert-danger'> NO EXISTE DNI EN BASE DE DATOS </p>";
                    }
                        ?>
                                               
                    </div>

                </div>
                <br>
                <div>
                    <a href="../eje9/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                </div>

            </div>

        </div>
        <!--fin clase card-->
        <!-- Footer -->
        <?php
        include_once "../../estructHtml/pie.php";
        ?>