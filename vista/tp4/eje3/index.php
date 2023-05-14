<!-- index -->
<?php $titulo = "Ver autos";
include_once "../../estructHtml/cabecera.php";

?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 3:</span>
                    <!-- <p> Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
                        mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
                        En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
                        autos cargados. </p> -->
                    <h1>Ver autos </h1>
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <p class='h3 text-info text-center'>Lista de datos</p>
                    <table class="table table-success table-hover ">

                        <?php
                        $abmAuto = new abmAuto();
                        $autos = $abmAuto->buscar(null); //null trae tooodo
                        if (count($autos) > 0) {
                            echo " <th>Matricula</th> ";
                            echo " <th>Marca</th>";
                            echo " <th>Modelo</th>";
                            echo " <th>Nombre Propietario</th>";
                            echo " <th>Apellido Propietario</th>";
                            foreach ($autos as $auto) {
                                echo "<tr ><td>" . $auto->getPatente() . "</td>";
                                echo "<td>" . $auto->getMarca() . "</td>";
                                echo "<td>" . $auto->getModelo() . "</td>";
                                echo "<td>" . $auto->getObjPersona()->getNombre() . "</td>";
                                echo "<td>" . $auto->getObjPersona()->getApellido() . "</td></tr>";
                            }
                        } else {
                            echo " <p class='h2 alert alert-danger text-center' >Sin registros de vehiculos en la basa de datos</p>";
                        }
                        ?>
                    </table>
                    <!-- <div>
                        <a href="nuevo.php"><button class="btn btn-warning">Nuevo Regristro </button></a>
                    </div> -->
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <script type="text/javascript">
                // $('[type!=\'hidden\'][data-val-required]').after('<span style="color:red; font-size: 20px; vertical-align: middle;">*</span>');
            </script>
            <?php
            include_once "../../estructHtml/pie.php";
            ?>