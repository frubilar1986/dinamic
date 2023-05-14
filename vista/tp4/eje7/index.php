<!-- index -->
<?php $titulo = "Ejemplo PDO";
include_once "../../estructHtml/cabecera.php";
$objAbmTabla = new abmPersona();
$listaDatos = $objAbmTabla->buscar(null);
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 7: --- nuevo auto---</span>
                    <p> 
                        Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
                        todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
                        “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
                        antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
                        link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
                        no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
                        control antes generada, no se puede acceder directamente a las clases del ORM
                    </p>
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <form action="nuevoAuto.php" method="post" id="tp4Eje7" class="needs-validation" data-toggle="validator" novalidate>
                        <div>
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Patente</label>
                                    <input type="text" name="patente" class="form-control" id="exampleFormControlInput1" pattern=^[A-Z,a-z]{3}\s[0-9]{3}$  placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Marca</label>
                                    <input type="text" name="marca" class="form-control" id="exampleFormControlInput1" pattern="^[A-Za-z ]*$" placeholder="" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Modelo</label>
                                    <input type="number" name="modelo" class="form-control" id="exampleFormControlInput1" pattern="^[A-Za-z0-9 ]*$" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Dni Due&ntilde;o</label>
                                <input type="text" name="dniDuenio" class="form-control" id="exampleFormControlInput1" pattern="^[0-9]{1,8}$" placeholder="" required>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                                <button class="btn btn-secondary" type="reset">reset</button>
                            </div>
                        </div>
                    </form>
                    <!-- lista de personas existentes -->
                    <hr>
                    <table class="table table-success table-hover ">
                        <?php
                        $ctrol = new abmPersona;
                        // $where['apellido'] = "Apellido";
                        
                        $listaDatos = $ctrol->buscar(null);
                       
                        if (count($listaDatos) > 0) {
                            echo "<th>Apellido</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Domicilio</th>";
                            echo "<th>Nro Documento</th>";
                            // echo "<th>Ver Vehiculo</th>";

                            foreach ($listaDatos as $objDatos) {
                                echo"<tr><td>".$objDatos->getApellido() ."</td>";
                                echo"<td>".$objDatos->getNombre(). "</td>";
                                echo"<td>".$objDatos->getDomicilio(). "</td>";
                                echo"<td>".$objDatos->getNroDni(). "</td>";
                                // echo "<tr ><td>" . $objDatos->getDescrip() . "</td>";
                                // echo "<td><a class='link-primary' href='autosPersonas.php?nroDni=" . $objDatos->getNroDni() . "'>Vehiculo</a></td></tr>";
                                // echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=" . $objDatos->getId() . "'>Borrar</a></td></tr>";
                            }
                        }else{
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