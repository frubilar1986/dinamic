<!-- index -->
<?php $titulo = "Listar usuarios login";
include_once "../../estructHtml/cabecera.php";
//print_r($_SESSION);
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">TESTING LOGIN:</span>
                    <p> TESTING TESTING. </p>
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <p class='h3 text-info text-center'>Lista de datos</p>
                    <table class="table table-success table-hover ">
                       
                        <?php
                        $abmUsuarios = new ctrol_abmUsuario();
                        $colUsuarios = $abmUsuarios->buscar(null);
                        if (count($colUsuarios) > 0) {
                            //si hay usuarios en bd creo encabezado tabla
                           echo" <th>Nombre Usuarios</th> ";
                           echo" <th>Correo electronico</th>";
                           echo" <th>Fecha Baja</th>";
                           if(isset($_SESSION['rol'])){
                               if($_SESSION['rol'] == 1 || $_SESSION['rol'] == 4){

                                   echo" <th>Editar</th>";
                               }
                           }
                           //echo" <th>Apellido Propietario</th>";
                            foreach ($colUsuarios as $objUser) {
                                echo "<tr ><td>" . $objUser->getUsNombre() . "</td>";
                                echo "<td>" . $objUser->getUsMail() . "</td>";
                                echo "<td>" . $objUser->getUsDeshabilitado() . "</td>";
                                if(isset($_SESSION['rol'])){
                                    if($_SESSION['rol'] == 1 || $_SESSION['rol'] == 4){
     
                                        echo "<td>" . "<a class='btn btn-primary' href='#'><i class='fas fa-pen-square'></i></a>" . "</td>";
                                    }
                                }
                               // echo "<td>" . $objUser->getObjPersona()->getApellido() . "</td></tr>";
                               
                                
                            }
                        }else{
                           echo " <p class='h2 alert alert-danger text-center' >Sin sin registro en la basa de datos</p>";
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