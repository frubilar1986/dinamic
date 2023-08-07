<?php

include_once('../../../config.php');
$abmUsuario = new AbmUsuario;
$dataForm = datos_submitidos();
$session = new Session;
//  print_r($dataForm);
if (isset($_SESSION['activa']) && $dataForm['accion'] == 'edit') {

    
    if($dataForm['id'] != $_SESSION['id']){
        $id = $dataForm['id'];
    }else{
        $id = $_SESSION['id'];
    }

    $user = [
        'idusuario' => $id,
        'usnombre' => $dataForm['usnombre'],
        'uspass' => $dataForm['uspass'],
        'usmail' => $dataForm['usmail'],
        'usdeshabilitado' => null,
    ];
    // echo 'MODIFICACIONNNNNNN DE FORMULARIO';
    // viewArray($user);
    if ($abmUsuario->modificacion($user)) {
        header('location:index.php?code=10');
    } else {
        header('location:index.php?code=20');
    }
} else {
    // crea nuevo usuario
    $search['usnombre'] = $dataForm['usnombre'];
    $usuarios = $abmUsuario->buscar($search);
    if (count($usuarios)) {
        // header('Location:index.php?accion=2');
    } else {
        $user = [
            'idusuario' => null,
            'usnombre' => $dataForm['usnombre'],
            'uspass' => md5($dataForm['uspass']),
            'usmail' => $dataForm['usmail'],
            'usdeshabilitado' => date('Y-m-d'),
        ];
        print_r($user);
        if ($abmUsuario->alta($user)) {
            header('location:index.php?code=10');
        } else {
            header('location:index.php?code=20');
        }
    }
}
