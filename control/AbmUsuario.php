<?php

class AbmUsuario
{

    private function cargarObjeto($param)
    {
        $usuario = null;

        if (array_key_exists('idusuario', $param) and array_key_exists('usnombre', $param) and array_key_exists('uspass', $param) and array_key_exists('usmail', $param) and array_key_exists('usdeshabilitado', $param)) {
            $usuario = new Usuario();

            $usuario->setear($param['idusuario'], $param['usnombre'], $param['uspass'], $param['usmail'], $param['usdeshabilitado'], true);
        }
        return $usuario;
    }

    private function cargarObjetoConClave($param)
    {
        $usuario = null;

        if (isset($param['idusuario'])) {
            $usuario = new Usuario;
            $usuario->setear($param['idusuario'], null, null, null, null);
        }
        return $usuario;
    }

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['idusuario']))
            $resp = true;
        return $resp;
    }

    public function alta($param)
    {
        $resp = false;
        //var_dump($param);
        //$param['id'] = null;
        $usuario = $this->cargarObjeto($param);

        if ($usuario != null and $usuario->insertar()) {
            $resp = true;
            $abmUsuarioRol = new AbmUsuarioRol;
            $arr = [
                'idusuario' => $usuario->getIdUsuario(),
                'idrol' => '5',
            ];
            $abmUsuarioRol->alta($arr);
        }
        return $resp;
    }

    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla != null and $elObjtTabla->eliminar()) {
                $resp = true;
            }
        }

        return $resp;
    }

    public function modificacion($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $usuario = $this->cargarObjeto($param);
            if ($usuario != null and $usuario->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }


    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['idusuario']))
                $where .= " and idusuario  = " . $param['idusuario'];
            if (isset($param['usnombre']))
                $where .= " and usnombre = '" . $param['usnombre'] . "'";
            if (isset($param['uspass']))
                $where .= " and uspass = '" . $param['uspass'] . "'";
            //if  (isset($param['fechaNac']))
            //      $where.=" and fechaNac ='".$param['fechaNac']."'";
        }

        $arreglo = Usuario::listar($where);
        return $arreglo;
    }
}//fin clase abmUSuario