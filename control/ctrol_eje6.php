<!-- Control del ejercicio 2 del practico 1 -->
<?php
class ctrol_eje6
{
    /**
     * recibe datos del formulario y realiza metodos de resolucion
     */
    public function accion($colDatos)
    {
        $deportes = "";
        //print_r($colDatos);
        if (!empty($colDatos['deporte'])) {
            # code...
            $deportes = ", los deportes que practica son: ". count($colDatos['deporte']).'<br>';
            foreach ($colDatos['deporte'] as $depo) {
                
                $deportes .= $depo . "<br> ";
            }
        }else{
            $deportes = ", no realiza deportes.";
        }
        return $deportes;
    }
}
?>