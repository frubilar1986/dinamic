<?php

class Rol
{
    //variables instancias

    private $idRol;
    private $roDescripcion;
    private $msj;

    //metodo construct

    public function __construct()
    {
        $this->idRol = "";
        $this->roDescripcion = "";
    }

    public function setear($id, $descrip)
    {
        $this->setIdRol($id);
        $this->setRolDescripcion($descrip);
    }

    //metodos get /  set

    public function getIdRol()
    {
        return $this->idRol;
    }

    public function getRolDescripcion()
    {
        return $this->roDescripcion;
    }

    public function getMensajeOperacion()
    {
        return $this->msj;
    }

    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }

    public function setRolDescripcion($rolDescripcion)
    {
        $this->roDescripcion = $rolDescripcion;
    }

    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->msj = $mensajeOperacion;
    }



    //metodos db

    public function cargar()
    {
        $msj = false;
        $dbLogin = new dbLogin;
        $query = "SELECT * FROM rol where idrol = {$this->getIdRol()}";
        if ($dbLogin->Iniciar()) {
            $resp = $dbLogin->Ejecutar($query);
            if ($resp > -1) {
                if ($resp > 0) {
                    $row = $dbLogin->Registro();
                    $this->setear($row['idrol'], $row['rodescripcion']);
                }
            } else {
                $this->setmensajeoperacion("Rol->listar: {$dbLogin->getError()}");
            }
        } else {
            $this->setmensajeoperacion("Rol->listar: {$dbLogin->getError()}");
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new dbLogin();
        $sql = "INSERT INTO rol (rodescripcion)  VALUES('" . $this->getRolDescripcion() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setIdRol($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Rol->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Rol->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new dbLogin();
        $sql = "UPDATE rol SET rodescripcion ='" . $this->getRolDescripcion() . "' WHERE idrol=" . $this->getIdRol();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Rol->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Rol->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new dbLogin();
        $sql = "DELETE FROM rol WHERE iderol=" . $this->getIdRol();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Rol->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Rol->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $roles = array();
        $base = new dbLogin();
        $sql = "SELECT * FROM rol ";
        if ($parametro != "") {
            $sql .= ' WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $rol = new rol();
                    $rol->setear($row['idrol'], $row['rodescripcion']);
                    array_push($roles, $rol);
                }
            }
        } else {
            //$this->setmensajeoperacion("Rol->listar: ".$base->getError());
        }

        return $roles;
    }
}
