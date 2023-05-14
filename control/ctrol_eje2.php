<!-- Control del ejercicio 2 del practico 1 -->
<?php
    class ctrol_eje2{
        /**
         * recibe datos del formulario y realiza metodos de resolucion
         */
        public function accion($get_o_post){
            $dias = ["lunes","Martes","Miercoles","Jueves","Viernes"];
            $coldias = array();
            $contadorHs = 0;
            $x = 0;
            $colHs = array();
            $i = 0;
            foreach($get_o_post as $valor){
                $colHs[$x] = $valor;
                if($colHs[$x] != 0){
                    $coldias[$i] = ["dia" => $dias[$x],"horas" => $colHs[$x]];
                    $i++;
                    $contadorHs += $colHs[$x];
                }
                $x++;
            }
            $resp = array();
             $resp[0]= $coldias;
             $resp[1] = $contadorHs;
             //print_r($resp);
            return $resp;
             
        }
        
    }
?>