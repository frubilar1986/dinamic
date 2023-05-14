<?php
class Auto{
    
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $msjOp;


    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objPersona = null;
        $this->msjOp = "";
        
    }

    public function setear($patente,$marca,$modelo,$objPersona){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjPersona($objPersona);
        

    }

    public function getPatente(){
        return $this->patente;
    }
    public function setPatente($patente){
        $this->patente = $patente;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getObjPersona(){
        return $this->objPersona;
    }
    public function setObjPersona($objPersona){
        $this->objPersona = $objPersona;
    }
    public function getMsjOp(){
        return $this->msjOp;
    }
    public function setMsjOp($msjOp){
        $this->msjOp = $msjOp;
    }


    public function cargar(){
        $resp = false;
        $db = new db();
        $query = "SELECT * FROM auto WHERE patente = ".$this->getPatente();
        if($db->Iniciar()){
            $rta = $db->Ejecutar($query);
            if($rta > -1){
                if($rta > 0 ){
                    $row = $db->Registro();
                    $this->setear($row['Patente'],$row['Marca'],$row['Modelo'],$row['DniDuenio']);
                }
            }
        }else{
            $this->setMsjOp("Auto->listar: ".$db->getError());
        }
        return $resp;
    }


    public function insertar(){
        $resp = false;
        $db=new db();
        $sql="INSERT INTO auto (Patente,Marca,Modelo,DniDuenio)  VALUES('".$this->getPatente()."','".$this->getMarca()."',".$this->getModelo().",'".$this->getObjPersona()->getNroDni()."')";
        //echo $sql;
        if ($db->Iniciar()) {
            if (/*$elid = */$db->Ejecutar($sql)) {
                // $this->setId($elid); no se requiere campo clave ya que no es autoincrement 
                $resp = true;             
            } else {
                $this->setMsjOp("Auto->insertar: ".$db->getError());
            }
        } else {
            $this->setMsjOp("Auto->insertar: ".$db->getError());
        }
        return $resp;
    }


    public function modificar(){
        $resp = false;
        $db = new db();
       
        $sql="UPDATE auto SET Marca ='".$this->getMarca()."', Modelo = ".$this->getModelo().", DniDuenio = '".$this->getObjPersona()->getNroDni()."'  WHERE Patente= '".$this->getPatente()."'";
        // echo $sql;
        if ($db->Iniciar()) {
            if ($db->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMsjOp("Auto->modificarr: ".$db->getError());
            }
        } else {
            $this->setMsjOp("Auto->modificarrrr: ".$db->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $db = new db();
        $sql="DELETE FROM auto WHERE patente=".$this->getPatente();
        if ($db->Iniciar()) {
            if ($db->Ejecutar($sql)) {//ejecutar en este punto retorna la cantidad de filas afectadas
                $resp = true;
            } else {
                $this->setMsjOp("Auto->eliminar: ".$db->getError());
            }
        } else {
            $this->setMsjOp("Auto->eliminar: ".$db->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $db = new db();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $db->Ejecutar($sql);
        if($res > -1){
            if($res > 0){
                
                while ($row = $db->Registro()){
                    $obj= new Auto();
                    $duenio = new Persona();
                    $duenio->setNroDni($row['DniDuenio']);
                    // print_r($duenio);
                    // var_dump($duenio);
                    $duenio->cargar();
                    $obj->setear($row['Patente'],$row['Marca'],$row['Modelo'],$duenio);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            // $this->setMsjOp("Auto->listar: ".$db->getError());
        }
 
        return $arreglo;
    }



}//fin clase auto


?>