<!-- index -->
<?php $titulo = "Ejemplo PDO";
include_once "../../estructHtml/cabecera.php";
// $objAbmTabla = new ctrol_tp4_abmPersona();
// $listaDatos = $objAbmTabla->buscar(null);
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 8:</span>
                    <p> Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
                        numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
                        a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
                        ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
                        cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                        antes generada, no se puede acceder directamente a las clases del ORM.</p>
                </div>
                <div class=" d-flex justify-content-center card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <form action="cambioDuenio.php" method="post" id="tp4Eje8" class="needs-validation" data-toggle="validator" novalidate>
                        <div class=''>
                            <div class='row'>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Patente</label>
                                    <input type="text" name="patente" class="form-control" id="exampleFormControlInput1" pattern=^[A-Z,a-z]{3}\s[0-9]{3}$ placeholder="" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dni </label>
                                        <input type="text" name="dniPersona" class="form-control" id="exampleFormControlInput1" pattern="^[0-9]{1,8}$" placeholder="" maxlength="8" required>
                                    </div>
                                </div>
                             </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                </div>
                <!-- fin contenedor card-body del formulario -->
                <!-- lista de autos  -->
                <table class="table table-success table-hover ">
                    <?php
                    $objAbmAuto = new abmAuto();
                    $listaDatos = $objAbmAuto->buscar(null);
                    if (count($listaDatos) > 0) {
                        echo " <th>Matricula</th> ";
                        echo " <th>Marca</th>";
                        echo " <th>Modelo</th>";
                        //   echo" <th>Nombre Propietario</th>";
                        echo " <th> Propietario</th>";
                        echo " <th> DNI</th>";
                        foreach ($listaDatos as $objDatos) {
                            echo "<tr ><td>" . $objDatos->getPatente() . "</td>";
                            echo "<td>" . $objDatos->getMarca() . "</td>";
                            echo "<td>" . $objDatos->getModelo() . "</td>";
                            echo "<td>" . $objDatos->getObjPersona()->getNombre() . ", " .  $objDatos->getObjPersona()->getApellido() . "</td>";
                            echo "<td>" . $objDatos->getObjPersona()->getNroDni() . "</td></tr>";
                        }
                    } else {
                        echo " <p class='h2 alert alert-danger text-center' >Sin sin registro en la basa de datos</p>";
                    }
                    ?>
                </table>


            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <script type="text/javascript">
                // $('[type!=\'hidden\'][data-val-required]').after('<span style="color:red; font-size: 20px; vertical-align: middle;">*</span>');
            </script>
            <?php
            include_once "../../estructHtml/pie.php";
            ?>