<!-- Control del ejercicio 1 del practico 1 -->
<?php
    class ctrol_eje1{
        public function leer_datos($get_o_post){
                $num = $get_o_post['nro'];
            //print_r($get_o_post);
            $respuesta = "";
            if($num > 0){
                $respuesta = "<h1 class='alert alert-info'>El numero ingresadoes es $num, es positivo ;-)</h1>";
            }elseif($num < 0 ){
                $respuesta =  "<h1 class='alert alert-danger'>El numero ingresado es $num, es negativo :-(</h1>";
            }else{
                $respuesta = "<h2 class = 'alert alert-dark'>El numero es CERO :-\</h2>";
            }
            return $respuesta;
        }
        
    }
?>