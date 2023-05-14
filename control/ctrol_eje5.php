<!-- Control del ejercicio 2 del practico 1 -->
<?php
    class ctrol_eje5{
        /**
         * recibe datos del formulario y realiza metodos de resolucion
         */
        public function accion($colDatos){
           // print_r($colDatos);
           if ($colDatos['estudios'] == 1) {
               # code...
               $estudios = "no tiene estudios";
           }elseif ($colDatos['estudios'] == 2){
               $estudios = " estudios primarios completos";
           }else{
               $estudios = "estudios terciarios completos o incompletos";
           }

           //control del campo sexo
           $sexo = ' de sexo femenino';
           if($colDatos['sexo'] == "masculino"){
               $sexo = ' de sexo masculino';
           }
           $estudios .=$sexo;

            
            return $estudios;
             
        }
        
    }
?>