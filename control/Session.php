<?php
class Session
{
    private $msjError;

    public function __construct()
    {
        session_start();
    }

    /* gets &  sets */

    public function getMjsError()
    {
        return $this->msjError;
    }

    public function setMsjError($param)
    {
        $this->msjError = $param;
    }
/* 
////////////////////Metodos////////////////////////////////////
*/
    public function iniciar ( $us, $pass){
        $_SESSION['userName'] =  $us;
        $_SESSION['userPass'] = md5($pass);
    }

    public function activa(){
        
    }




}/* fin claser Session */
