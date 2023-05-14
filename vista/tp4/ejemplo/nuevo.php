<!-- index -->
<?php $titulo = "Ejemplo PDO";
include_once "../../estructHtml/cabecera.php";
$objAbmTabla = new ctrol_tp4_ejem();
$listaDatos = $objAbmTabla->buscar(null);
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
                    <!-- aqui formulario para nuevo registro -->
                    <form method="post" action="accion.php" name="tp4Ejem" class="needs-validation" data-toggle='' novalidate onsubmit="">
                        <p>Ingresar una descripcion para insertar en base de datos</p>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control" name='descript' id="floatingInput" placeholder="wow" required>
                            <label for="floatingInput">Descripcion</label>
                        </div>
                        <input type="hidden" value="new" name="accion">
                        <input type="submit" class="btn btn-primary mb-2" name="" id="" value="Enviar" >

                    </form>


                    <div>
                        <a href="../ejemplo/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>
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