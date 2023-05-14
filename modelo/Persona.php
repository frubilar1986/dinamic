<?php
class Persona
{

    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $msjOp;
    private $ColobjAutos;
    //objautos?


    public function __construct()
    {

        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->msjOp = "";
        $this->ColobjAutos = array();
    }

    public function setear($dni, $ape, $nombr, $fechNac, $telefono, $domicilio)
    {
        $this->setNroDni($dni);
        $this->setApellido($ape);
        $this->setNombre($nombr);
        $this->setFechaNac($fechNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    public function getNroDni()
    {
        return $this->nroDni;
    }
    public function setNroDni($dni)
    {
        $this->nroDni = $dni;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }
    public function getColObjAutos()
    {
        // $where['dniDuenio'] = $this->getNroDni();
        $ctroAbmAuto = new AbmAuto;
        $arreglo = $ctroAbmAuto->buscar(['dniDuenio' => $this->getNroDni()]);
        $this->setColObjAutos($arreglo);
        return $arreglo;
    }
    public function setColObjAutos($colObjAutos)
    {
        $this->ColobjAutos = $colObjAutos;
    }
    public function getMsjOp()
    {
        return $this->msjOp;
    }
    public function setMsjOp($msjOp)
    {
        $this->msjOp = $msjOp;
    }

    public function cargar()
    {
        $resp = false;
        $db = new db();
        $query = "SELECT * FROM persona WHERE NroDni = " . $this->getNroDni();
        if ($db->Iniciar()) {
            $rta = $db->Ejecutar($query);
            if ($rta > -1) {
                if ($rta > 0) {
                    $row = $db->Registro();
                    // print_r($row);
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                }
            }
        } else {
            $this->setMsjOp("Persona->listar: " . $db->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $db = new db();
        $sql = "INSERT INTO persona(NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio)  VALUES('" . $this->getNroDni() . "','" . $this->getApellido() . "','" . $this->getNombre() . "','" . $this->getFechaNac() . "','" . $this->getTelefono() . "','" . $this->getDomicilio() . "')";
        //echo $sql;
        if ($db->Iniciar()) {
            if (/*$elid = */$db->Ejecutar($sql)) {
                // $this->setId($elid); no se requiere campo clave ya que no es autoincrement 
                $resp = true;
            } else {
                $this->setMsjOp("Persona->insertar: " . $db->getError());
            }
        } else {
            $this->setMsjOp("Persona->insertar: " . $db->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $db = new db();
        $sql = "UPDATE persona SET Apellido ='" . $this->getApellido() . "', Nombre ='" . $this->getNombre() . "', fechaNac = '" . $this->getFechaNac() . "', telefono ='" . $this->getTelefono() . "', domicilio ='" . $this->getDomicilio() . "'  WHERE NroDni=" . $this->getNroDni();
        if ($db->Iniciar()) {
            if ($db->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMsjOp("Persona->modificar: " . $db->getError());
            }
        } else {
            $this->setMsjOp("Persona->modificar: " . $db->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $db = new db();
        $sql = "DELETE FROM persona WHERE NroDni=" . $this->getNroDni();
        if ($db->Iniciar()) {
            if ($db->Ejecutar($sql)) { //ejecutar en este punto retorna la cantidad de filas afectadas
                $resp = true;
            } else {
                $this->setMsjOp("Persona->eliminar: " . $db->getError());
            }
        } else {
            $this->setMsjOp("Persona->eliminar: " . $db->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $personas = array();
        $db = new db();
        $sql = "SELECT * FROM persona ";
        
        if ($parametro != "") {
            $sql .= ' WHERE ' . $parametro;
        }
        $res = $db->Ejecutar($sql);
        // echo 'listar model persona';
        //  echo $sql;
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $db->Registro()) {
                    $persona = new Persona();
                    $persona->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    array_push($personas, $persona);
                }
            }
        } else {
            // $this->setMsjOp("persona->listar: ".$db->getError());
        }

        return $personas;
    }
}
