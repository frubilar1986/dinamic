<!-- index -->
<?php $titulo = "ejercicio 3";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 3:</span>
                    <p>Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                        y la password para loguearse. Los datos del formulario son enviados a un script
                        verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                        arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                        de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                        y en caso contrario un mensaje de error. </p>
                </div>
                <br>
                <div class="container ">
                    <div class='row  '>
                        <div class="col-lg-5 mx-auto border">
                            <div class="card-body p-5 rounded shadow bg-white">
                                <!-- <form action="accion.php" method="post" name="eje7" class="needs-validation" novalidate onsubmit="return ctrlJsEje7()"> -->
                                <form action="accion.php" method="post" enctype="multipart/form-data" id="form_file1" name="form_file1">
                                    <input type="file" name="archivo" id="archivo" accept="application/msword,application/pdf"> cargar archivo
                                    <input type="submit" value="enviar">


                                </form>

                                </form>
                            </div>
                        </div>
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