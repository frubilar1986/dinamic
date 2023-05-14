<!-- index accionn!! -->
<?php $titulo = " ejercicio 3 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">tp5 accion login:</span>
                    <p>
                          Pruebas para variable session
                    </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                         $resp = $sesion->activa();
                        
                        $unUs = $sesion->getUsuario();
                      
                        
                        $rol = $sesion->getRol();
                        echo 'variable SESSION <br> <pre>' ;
                        print_r($rol);
                                        
                       
                        echo 'variable SESSION <br> <pre>' ;
                        print_r($_SESSION);
                        echo " </pre> ";    
                        $obj = $sesion->getUsuario();               

                        echo " <h2>Resultado: </h2>";
                        if($resp){
                            echo "<h1 class='bg-success' >$resp</h1>";

                        } 

                        ?>

                    </div>
                    <div>
                        <a href="index.php"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>