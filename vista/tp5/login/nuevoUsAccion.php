<?php

include_once('../../../config.php');
$abmUsuario = new AbmUsuario;
$dataForm = datos_submitidos();
$session = new Session;
print_r($dataForm);
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
    if($dataForm['accion'] == 'delete' && $_SESSION['activa']) {
        $buscar = [
            'idusuario'=>$dataForm['id']
        ];
        $usuarios = $abmUsuario->buscar($buscar);
        $usuario = $usuarios[0];
        viewArray($usuario);//ok

        $abmUsuarioRol = new AbmUsuarioRol;
        $usuarioRols = $abmUsuarioRol->buscar($buscar);
        $usuarioRol = $usuarioRols[0];
        viewArray($usuarioRol);//ok
        $param = [
            'idusuario' => $usuarioRol->getObjUsuario()->getIdUsuario(),
            'idrol'=>$usuarioRol->getObjRol()->getIdRol()
        ];
           $abmUsuarioRol->baja($param);
          // creo arreglo;
        //   $user = [
        //           'idusuario' => $usuario->getIdUsuario(),
        //           'idrol' => $usuario->
        //       ]
              $abmUsuario->baja($buscar);
               header('location:index.php?code=99');
        // $roles = $abmUsuarioRol->buscar($buscar)[0];
        
        
        
    }else{

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
            // print_r($user);
            // if ($abmUsuario->alta($user)) {
            //     header('location:index.php?code=10');
            // } else {
            //     header('location:index.php?code=20');
            // }
        }
    }
}
