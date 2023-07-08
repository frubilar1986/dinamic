<?php

class Usuario
{
    private $idusuario;
    private $usnombre;
    private $uspass;
    private $usmail;
    private $usdeshabilitado;
    //private $estado;
    private $mensajeoperacion;


    public function getIdUsuario()
    {
        return $this->idusuario;
    }

    public function setIdUsuario($id)
    {
        $this->idusuario = $id;
    }

    public function getUsNombre()
    {
        return $this->usnombre;
    }

    public function setUsNombre($nombre)
    {
        $this->usnombre = $nombre;
    }

    public function getUsPass()
    {
        return $this->uspass;
    }

    public function setUsPass($pass)
    {
        $this->uspass = $pass;
    }

    public function getUsMail()
    {
        return $this->usmail;
    }

    public function setUsMail($mail)
    {
        $this->usmail = $mail;
    }

    public function getUsDeshabilitado()
    {
        return $this->usdeshabilitado;
    }

    public function setUsDeshabilitado($fecha)
    {
        $this->usdeshabilitado = $fecha;
    }


    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

    public function __construct()
    {

        $this->idusuario = "";
        $this->usnombre = "";
        $this->uspass = "";
        $this->usmail = "";
        // $this->estado = "";
        $this->usdeshabilitado = "";
        $this->mensajeoperacion = "";
    }

    public function setear($idusuario, $usnombre, $uspass, $usmail, $usdeshabilitado)
    {
        $this->setIdUsuario($idusuario);
        $this->setUsNombre($usnombre);
        $this->setUsPass($uspass);
        $this->setUsMail($usmail);
        // $this->setEstado($estado);
        $this->setUsDeshabilitado($usdeshabilitado);
    }

    public function cargar()
    {
        $resp = false;
        $base = new dbLogin;
        $sql = "SELECT * FROM usuario WHERE idusuario = " . $this->getIdUsuario();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['usdeshabilitado']);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new dbLogin();
        $sql = "INSERT INTO usuario ( usnombre,uspass, usmail) VALUES ('" . $this->getUsNombre() . "'," . $this->getUsPass() . ",'" . $this->getUsMail() . "')";

        //echo $sql;
        if ($base->Iniciar()) {
            if ($elId = $base->Ejecutar($sql)) {
                $this->setIdUsuario($elId);

                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: " . $base->getError()[2]);
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: " . $base->getError()[2]);
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new dbLogin();
        $sql = "UPDATE usuario SET usnombre='" . $this->getUsNombre() . "',uspass=" . $this->getUsPass() . ",usmail='" . $this->getUsMail() . "',  WHERE idusuario= " . $this->getIdUsuario();
        //echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $dblogin = new dbLogin;
        $query = "DELETE FROM usuario WHERE idusuario = {$this->getIdUsuario()}";
        if ($dblogin->Iniciar()) {
            if ($dblogin->Ejecutar($query)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: " . $dblogin->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: " . $dblogin->getError());
        }
        return $resp;
    }
    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new dbLogin();
        $sql = "SELECT * FROM usuario ";
        if ($parametro != "") {
            $sql .= ' WHERE ' . $parametro;
        }
        //  echo $sql;
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['usdeshabilitado']);

                    array_push($arreglo, $obj);
                }
            }
        } else {
            // $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }

        return $arreglo;
    }


    /* ------------- */
}//class Usuario
