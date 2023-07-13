<?php

    include_once ('../../../config.php');

    $dataForm = datos_submitidos();
    //  print_r($dataForm);
    $abmUsuario = new AbmUsuario;
    $search['usnombre'] = $dataForm['usnombre'];
    $usuarios = $abmUsuario->buscar($search);
    if (count($usuarios)){
        // header('Location:index.php?accion=2');
    }else{
        $user = [
            'idusuario' =>null,
            'usnombre' =>$dataForm['usnombre'],
            'uspass' =>md5($dataForm['uspass']),
            'usmail' =>$dataForm['usmail'],
             'usdeshabilitado' =>null,
        ];
         print_r($user);
         if($abmUsuario->alta($user)){
         header('location:index.php?code=10');
         }else{
             header('location:index.php?code=20');
         }
    }
