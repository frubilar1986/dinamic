<!-- Control del ejercicio 2 del practico 1 -->
<?php
class ctrol_eje8
{
    /**
     * recibe datos del formulario y realiza metodos de resolucion
     */
    public function accion($colDatos)
    {
        $edad = $colDatos['edad'];
        $nombre = $colDatos['nombre'];
        $ape = $colDatos['apellido'];
        $estudia = $colDatos['estudiante'];
        $precio = 0;
        $respuesta = "";
       // print_r($colDatos);
         if ($estudia == 1){
            $estudia = true;
         }else{
             $estudia = false;
         }   
         if ($edad < 12 ) {
             $precio = 160;
             
             }elseif($edad >= 12 && $estudia){
                 $precio = 180;
             }else{
                 $precio = 300;
             }
             $respuesta = "Cliente: $nombre $ape, Valor de entrada es: $$precio".($estudia == true?" Es estudiande ":"").", edad $edad a&ntilde;os.";
             
        return $respuesta;
    }
}
?>