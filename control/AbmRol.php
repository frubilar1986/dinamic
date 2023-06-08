<?php
class Abmrol
{

    
    private function cargarObjeto($param)
    {
        $obj = null;
        if (
            array_key_exists('idrol', $param) && array_key_exists('rodescripcion', $param)) {
            $obj = new rol();
            $obj->setear($param['idrol'], $param['rodescripcion']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden 
     * con los nombres de las variables instancias del objeto  CLAVES
     * @param array $param
     * @return obj
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;
        if (isset($param['idrol'])) {
            $obj = new rol();
            $obj->setear($param['idrol'], null);
        }
        return $obj;
    }

    /**
     * verifica que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['idrol']))
            $resp = true;
        return $resp;
    }

    /**
     * 
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        // $param['idrol'] =null;
        $Objrol = $this->cargarObjeto($param);
        // verEstructura($Objrol);
        if ($Objrol != null and $Objrol->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $Objrol = $this->cargarObjetoConClave($param);
            if ($Objrol != null and $Objrol->eliminar()) {
                $resp = true;
            }
        }

        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $Objrol = $this->cargarObjeto($param);
            if ($Objrol != null and $Objrol->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['idrol']))
                $where .= " and idrol = " . $param['idrol'] ;
            if (isset($param['roldescripcion']))
                $where .= " and roldescripcion ='" . $param['roldescripcion'] . "'";
        }
        $arreglo = rol::listar($where);
        return $arreglo;
    }
} // Fin clase abmrol
