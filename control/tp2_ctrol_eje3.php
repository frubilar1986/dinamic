<?php
//control ejejrcicio 3 del tp2 login 
//verifica el acceso al sistema 

class tp2_ctrol_eje3{


    public function bd_usurio(){

        $user0 = ['usuario'=>'admin','pass' =>'admin'];
        $user1 = ['usuario'=>'ana','pass' =>'anamaria'];
        $user2 = ['usuario'=>'visitante','pass' =>'panyagua'];
        $user3 = ['usuario'=>'francisco','pass' =>'bariloche'];
        $usuario = [$user0,$user1,$user2,$user3];
        return $usuario;
    }

    function login($datosForm){
        
        $bd = $this->bd_usurio();

        $nom = $datosForm['username'];
        $pass = $datosForm['password'];
        $i= 0;
        $existe = false;
        while($i < count($bd) && !$existe ){
            if( $nom == $bd[$i]['usuario'] && $pass == $bd[$i]['pass']){
                $existe = true;

            }
            $i++;
        }
        return $existe;
    }

    public function accion($datos){
        $texto = '';
        $existe = $this->login($datos);
        if($existe){
            $texto =  "<h2 class ='alert alert-info'> Bienvenido al sistema ". strtoupper( $datos['username'])." </h2>";
        }else{
            $texto =  "<h2 class ='alert alert-danger'> Error; usuario o contrase&ntilde;a no valido!</h2>";
        }
        return $texto;
    }
}
?>