<!-- Control del ejercicio 2 del practico 1 -->
<?php
class ctrol_eje7
{
    /**
     * recibe datos del formulario y realiza metodos de resolucion
     */
    public function accion($colDatos)
    {
        $nro1 = $colDatos['nro1'];
        $nro2 = $colDatos['nro2'];
        $ope = $colDatos['operador'];
        $resultado = 0;
        //print_r($colDatos);

        switch($ope){
            case ("1"):
                $resultado = $nro1 + $nro2;
                break;
            case ("2"):
                $resultado = $nro1 - $nro2;
                break;
            case ("3"):
                $resultado = $nro2 * $nro1;
                break;
            case ("4"):
                $resultado = $nro1 / $nro2;
                break;
        }
        return $resultado;
    }
}
?>