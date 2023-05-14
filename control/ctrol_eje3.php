<!-- Control del ejercicio 2 del practico 1 -->
<?php
    class ctrol_eje3{
        /**
         * recibe datos del formulario y realiza metodos de resolucion
         */
        public function accion($get_o_post){
            $edad = $get_o_post['edad'];
            $nombre = $get_o_post['nombre'];
            $ape = $get_o_post['apellido'];
            $dire = $get_o_post['direccion'];
            $resp = '';
            // if ($edad >= 18) {
            //     # code...
            //     $resp = "Soy mayor de edad";
            // }else{
            //     $resp = "No soy mayor de edad";
            // }
            
            $texto = "Hola, soy $nombre $ape , tengo $edad a&ntilde;os , vivo en $dire. ";
            
             //print_r($resp);
            return $texto;
             
        }
        
    }
?>