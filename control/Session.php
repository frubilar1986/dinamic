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
    public function iniciar($us, $pass)
    {
        $_SESSION['usnombre'] =  $us;
        $_SESSION['uspass'] = md5($pass);
        $_SESSION['activa'] = false;
        $_SESSION['rol'] = 5;
        
    }

    public function validar()
    {
        $msj = false;
        $abmUsuario = new AbmUsuario;
        // echo '<br/>';
        // print_r($_SESSION);
        $usuarios = $abmUsuario->buscar($_SESSION);
        //  print_r($usuarios[0]->getUsPass());
        //  print_r($usuarios);
        if (count($usuarios) == 1) {
            $usuario = $usuarios[0];
            if ($usuario->getUsPass() == $_SESSION['uspass']) { // esta validacion  la realiza la BD al buscar con los param d SESSION
                // $_SESSION['usnombre'] = $usuarios[0]->getUsNombre();
                $_SESSION['id'] = $usuario->getIdUsuario();
                $_SESSION['activa'] = true;
                $_SESSION['rol'] = $this->getRol();
                unset($_SESSION['uspass']);
                // echo ' sesion cargada correcctamente ( class Session-> validar() )';
                $msj = true;
            } else {
                $this->setMsjError("error en la password");
            }
        } else {
            $this->setMsjError("error en el nombre de usuario");
        }
        // if (!isset($_SESSION['activa'])) {
        //     session_destroy();
        // }
        return $msj;
    }

    public function activa()
    {
        $msj = false;
        session_status() == PHP_SESSION_ACTIVE ? $msj = true : $msj = false;
        return $msj;
    }


    public function getUsuario()
    {
        $usuario = null;
        if ($this->activa()) {
            //echo 'entroooo';//--------------------------------------------------
            $abmUsuario = new AbmUsuario();
            //$where['usnombre'] = $_SESSION['usuario'];
            $where['idusuario'] = $_SESSION['id'];

            $colUsers = $abmUsuario->buscar($where);

            if (count($colUsers) == 1) {

                $usuario = $colUsers[0];
            }
        }
        return $usuario;
    }


    /**
     * getRol(). Devuelve el rol del usuario logeado.
     * Pensado para un rol por usuario
     */
    public function getRol()
    {
        $rol = null; //obj
        $usuario = $this->getUsuario();
        // print_r($usuario);
        if ($usuario == null) {

            $this->setMsjError('no hay usuario logueado');
        } else {

            $where['idusuario'] = $usuario->getIdUsuario();

            $usRol = new abmUsuarioRol();
            $colRol = $usRol->buscar($where);

            $rol = $colRol[0]->getObjRol()->getIdRol();
        }
        return $rol;
    }

    public function cerrar()
    {
        $msj = false;
        if ($this->activa()) {
            session_destroy();
            $msj = true;
        }
        return $msj;
    }
}
/* fin claser Session */
