<!-- index -->
<?php $titulo = "Ejemplo PDO";
include_once "../../estructHtml/cabecera.php";
$abmPersona = new abmPersona();
$personas = $abmPersona->buscar(null);
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 5: --LISTAR PERSONAS--</span>
                    <p> Crear una página "listaPersonas.php" que muestre un listado con las personas que se
                        encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                        los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM. </p>
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <p class='h3 text-info text-center'>Lista de datos</p>
                    <table class="table table-success table-hover ">
                        <?php
                        if (count($personas) > 0) {
                            echo "<th>Apellido</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Domicilio</th>";
                            echo "<th>Nro Documento</th>";
                            echo "<th>Ver Vehiculo</th>";

                            foreach ($personas as $persona) {
                                echo"<tr><td>".$persona->getApellido() ."</td>";
                                echo"<td>".$persona->getNombre(). "</td>";
                                echo"<td>".$persona->getDomicilio(). "</td>";
                                echo"<td>".$persona->getNroDni(). "</td>";
                                // echo "<tr ><td>" . $objDatos->getDescrip() . "</td>";
                              echo "<td><a class='link-primary' href='autosPersonas.php?nroDni=" . $persona->getNroDni() . "'>Vehiculo</a></td></tr>";
                               
                              // echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=" . $objDatos->getId() . "'>Borrar</a></td></tr>";
                            }
                        }else{
                            echo "<p class='h2 alert alert-warning' >Sin registros dentro de la base de datos</p>";
                        }
                        ?>
                    </table>
                    <div>
                        <!-- <a href="nuevo.php"><button class="btn btn-warning">Nuevo Regristro </button></a> -->
                    </div>
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