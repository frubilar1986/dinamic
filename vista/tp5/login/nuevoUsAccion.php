<?php

    include_once ('../../../config.php');
    $abmUsuario = new AbmUsuario;
    $dataForm = datos_submitidos();
    //  print_r($dataForm);
    if($_SESSION['activa'] && $dataForm['accion'] == 'edit'){
        
            $user = [
                'idusuario' =>$dataForm['id'],
                'usnombre' =>$dataForm['usnombre'],
                // 'uspass' =>md5($dataForm['uspass']),
                'usmail' =>$dataForm['usmail'],
                 'usdeshabilitado' =>null,
            ];
            if($abmUsuario->modificacion($user)){
                header('location:index.php?code=10');
                }else{
                    header('location:index.php?code=20');
                }
        
    }
   
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
        //  print_r($user);
         if($abmUsuario->alta($user)){
         header('location:index.php?code=10');
         }else{
             header('location:index.php?code=20');
         }
    }
