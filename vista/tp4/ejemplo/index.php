<!-- index -->
<?php $titulo = "Ejemplo PDO";
include_once "../../estructHtml/cabecera.php";

?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejemplo:</span>
                    <p> Funcionamiento completo de la estructura MVC <br> Procedimientos basico en donde se intercatua con base de datos con los metodos basico: <br> ALTA BAJA MODIFICACION </p>
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <p class='h3 text-info text-center'>Lista de datos</p>
                    <table class="table table-success table-hover ">
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Modificar</th>
                        <th>Eliminar registro</th>
                        <?php 
                        $objAbmTabla = new ctrol_tp4_ejem();
                        $listaDatos = $objAbmTabla->buscar(null);
                            if (count($listaDatos) > 0){
                                foreach($listaDatos as $objDatos){
                                    echo "<tr ><td>".$objDatos->getId()."</td>" ; 
                                    echo "<td>".$objDatos->getDescrip()."</td>" ; 
                                    echo "<td><a class='link-primary' href='editar.php?id=".$objDatos->getId()."'>Editar</a></td>" ; 
                                    echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=".$objDatos->getId()."'>Borrar</a></td></tr>" ; 
                                }
                            }
                        ?>
                    </table>
                    <div>
                        <a href="nuevo.php"><button class="btn btn-warning" >Nuevo Regristro </button></a>
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