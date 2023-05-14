<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejemplo:</span>
                    <p><p> Funcionamiento completo de la estructura MVC <br> Procedimientos basico en donde se intercatua con base de datos con los metodos basico: <br> ALTA BAJA MODIFICACION </p></p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                            $resp = false;
                            $datosForm = datos_submitidos();
                           $obj = new ctrol_tp4_ejem();
                           if (isset($datosForm['accion'])) {
                                if ($datosForm['accion'] == 'editar') {
                                    if($obj->modificacion($datosForm)){
                                        $resp = true;
                                    }
                                }
                                if($datosForm['accion'] == "borrar"){
                                    if($obj->baja($datosForm)){
                                        $resp = true;
                                    }
                                }
                                if($datosForm['accion'] == "new"){
                                    if($obj->alta($datosForm)){
                                        $resp = true;
                                    }
                                }
                            }
                           
                            echo "<h2>Resultado: </h2>";
                            if($resp){
                                echo" <p class= 'alert alert-success'>la accion de ".$datosForm['accion']." se realizo satisfactoriamente</p>"; 
                            }else{
                                echo" <p class= 'alert alert-danger'>la accion de ".$datosForm['accion']." NO se realizo </p>"; 
                            }                      
                           
                        ?>                       
                        

                    </div>
                    <div>
                        <a href="../ejemplo/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>