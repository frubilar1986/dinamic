<?php

class UsuarioRol
{
    private $objUsuario;
    private $objRol;
    private $mensajeoperacion;

    public function __construct()
    {
        $this->objUsuario = null;
        $this->objRol = null;
    }

    public function setear($idUser, $idRol)
    {
        $this->objUsuario = $idUser;
        $this->objRol = $idRol;
    }



    public function getObjUsuario()
    {
        return $this->objUsuario;
    }
    public function getObjRol()
    {
        return $this->objRol;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeoperacion;
    }

    public function setObjUsuario($idUser)
    {
        $this->objUsuario = $idUser;
    }
    public function setObjRol($idRol)
    {
        $this->objRol = $idRol;
    }
    public function setmensajeoperacion($mensaje)
    {
        $this->mensajeoperacion = $mensaje;
    }

    public function cargar()
    {
        $resp = false;
        $base = new dbLogin();
        $sql = "SELECT * FROM usuariorol WHERE idusuario = " . $this->getObjUsuario()->getIdUsuario();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['idusuario'], $row['idrol']);
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
        $sql = "INSERT INTO usuariorol (idusuario,idrol) VALUES(" . $this->getObjUsuario()->getIdUsuario() . ", " . $this->getObjRol()->getIdRol() . ")";
        //$sql = "INSERT INTO usuariorol(idusuario,idrol) VALUES({$this->getObjUsuario()->getIdUsuario()}, {$this->getObjRol()->getIdRol()})";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;

        $base = new dbLogin();
        $sql = "UPDATE usuariorol SET idrol ='" . $this->getObjRol()->getIdRol() . "' WHERE idusuario = " . $this->getObjUsuario()->getIdUsuario();
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
        $base = new dbLogin();
        $sql = "DELETE FROM usuariorol WHERE idusuario = " . $this->getObjUsuario()->getIdUsuario();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new dbLogin();
        $sql = "SELECT * FROM usuariorol ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        // echo $sql;
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $usuarioRol = new usuarioRol();
                    $usuario = new usuario();
                    $rol = new Rol();
                    
                    $usuario->setIdUsuario($row['idusuario']);
                    $usuario->cargar();
                    
                    $rol->setIdRol($row['idrol']);
                    $rol->cargar();
                    $usuarioRol->setear($usuario, $rol);
                    array_push($arreglo, $usuarioRol);
                }
            }
        }
        return $arreglo;
    }
}
