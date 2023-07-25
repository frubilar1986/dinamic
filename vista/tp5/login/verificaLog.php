
<?php
include_once "../../../config.php";
$dataForm = datos_submitidos();
// print_r($dataForm);
$sesion = new Session();
if (array_key_exists('accion', $_GET) && $_GET['accion'] == 'cerrar') {
    $sesion->cerrar();
    // echo "<a class = 'text-warning' href='index.php?caso=1' >regresar a loguin</a>";
    header('location:index.php?code=1');

} else {
    
    $sesion->iniciar($dataForm['usnombre'], $dataForm['uspass']);
    
    // if (isset($dataForm['accion']) && $dataForm['accion'] == 'new') {
        
    // }

    if ($sesion->validar()) {

        header('location:paginaSegura.php');
        //echo 'acceso correcto';

    } else {
        $sesion->cerrar();
        // echo $sesion->getMjsError() . "<br> <button class = 'btn btn-primary'><a class = 'text-warning' href='index.php?code=2' >regresar a loguin</a></button>";
        header('location:index.php?code=2');
    }
}
