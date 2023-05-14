<!-- index -->
<?php $titulo = "editar";
include_once "../../estructHtml/cabecera.php";
$objAbmTabla = new ctrol_tp4_ejem();
$datosForm = datos_submitidos();
//print_r($datosForm);
$obj = null;
if( isset($datosForm['id'])){
    $row = $objAbmTabla->buscar($datosForm);
    if (count($row) == 1) {
        # code...
        $obj= $row[0];
    }
    
}
// $listaDatos = $objAbmTabla->buscar(null);
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
                    <?php if ($obj != null) {?>
                    <form method="post" action="accion.php" name="tp4Ejem" class="needs-validation" data-toggle='' novalidate onsubmit="">
                        <p>Datos selecionado para modificar</p>
                        <div class="col-md-2" >                            
                            <label for="" class="form-label"> ID </label>
                            <input class="form-control" type="text" readonly name="id" id="id" value="<?php echo $obj->getId()?>">
                        </div>
                        <div class='col-mb-3'>
                            <label for=""class="form-label">Descripcion:</label>
                            <textarea name="descript" id="descript" class="form-control mb-2" cols="5" rows="3"><?php echo $obj->getDescrip()?></textarea>
                        </div>
                        <!-- input hidden para definir que accion tomar -->
                        <input type="hidden" value="editar" name="accion">
                        <!-- boton enviar -->
                        <input type="submit" class="btn btn-primary mb-2" name="" id="" value="Enviar" > 

                    </form>
                    <?php }else{
                        echo "<p class='h3 alert alert-warning'> No se encontro la clave en motor DB para modificar</p>";
                    }?>

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