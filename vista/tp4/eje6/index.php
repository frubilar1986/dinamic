<!-- index -->
<?php $titulo = "Ejemplo PDO";
include_once "../../estructHtml/cabecera.php";
// $objAbmPersona = new abmPersona();
// $listaDatos = $objAbmPersona->buscar(null);
$dataForm = datos_submitidos();
// print_r($dataForm);
if (empty($dataForm = datos_submitidos())) {
    $dataForm = ['nroDni' => ""];
    $algo = $dataForm['nroDni'];
} else {
    $algo = $dataForm['nroDni'];
}

?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 6: ---NUEVA PERSONA---</span>
                    <!-- <p> Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
                        los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
                        un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
                        pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
                        Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM </p> -->
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <form action="nuevaPersona.php" method="post" id="tp4Eje6" class="needs-validation" data-toggle="validator" novalidate onsubmit="validaEdad()">
                        <div>
                            <div class="row g-3">
                                <!-- Input dni -->
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">DNI</label>
                                    <input type="text" name="nroDni" pattern="^[0-9]{1,8}$" class="form-control" value="<?php echo $algo ?>" id="" placeholder="" required>
                                </div>
                                <!-- Input apellido -->
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" pattern="^[A-Za-z ]*$" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <!-- input Nombre -->
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" pattern="^[A-Za-z ]*$" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                                    <input type="text" name="telefono" class="form-control" pattern="^[0-9]{1,12}$" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" name="fechaNac" class="form-control" id="fn" onblur="validaEdad()" placeholder="2000-11-1" required>
                                </div>
                                <div class="col-sm-1 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Edad</label>
                                    <input type="text" name="edad" readonly class="form-control" id="edad" placeholder="">
                                </div>
                                <div id="alerta" class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Oh No!</strong> La edad esta mal!!!!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Domicilio</label>
                                    <input type="text" name="domicilio" class="form-control" id="" pattern="^[A-Za-z0-9 ]*$" placeholder="" required>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                                <button class="btn btn-secondary" type="reset">reset</button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <table class="table table-success table-hover ">
                        <?php
                        $ctrol = new abmPersona;
                        // $where['apellido'] = "Apellido";

                        $listaDatos = $ctrol->buscar(null);

                        if (count($listaDatos) > 1) {
                            echo "<th>Apellido</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Domicilio</th>";
                            echo "<th>Nro Documento</th>";
                            // echo "<th>Ver Vehiculo</th>";

                            foreach ($listaDatos as $objDatos) {
                                echo "<tr><td>" . $objDatos->getApellido() . "</td>";
                                echo "<td>" . $objDatos->getNombre() . "</td>";
                                echo "<td>" . $objDatos->getDomicilio() . "</td>";
                                echo "<td>" . $objDatos->getNroDni() . "</td>";
                                // echo "<tr ><td>" . $objDatos->getDescrip() . "</td>";
                                // echo "<td><a class='link-primary' href='autosPersonas.php?nroDni=" . $objDatos->getNroDni() . "'>Vehiculo</a></td></tr>";
                                // echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=" . $objDatos->getId() . "'>Borrar</a></td></tr>";
                            }
                        } else {
                            echo "<p class='h2 alert alert-warning' >Sin registros dentro de la base de datos</p>";
                        }
                        ?>
                    </table>
                </div><!-- fin contenedor card-body del formulario -->


            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <script type="text/javascript">
                // $('[type!=\'hidden\'][data-val-required]').after('<span style="color:red; font-size: 20px; vertical-align: middle;">*</span>');
            </script>
            <?php
            include_once "../../estructHtml/pie.php";
            ?>