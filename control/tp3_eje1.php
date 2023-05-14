<?php 
    class tp3_eje1{
        public function maneja_datos($param){
            $size = $_FILES['archivo']['size'];
            //$error = "achivo demaciado grande";
            $retorno = "";
            $dir = "../vista/uploads";
            if ($_FILES['archivo']['error'] <= 0 && $size/1024 < 2000) {
                # code...
                $nombre = $_FILES['archivo']['name'];
                if (copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
                    $linkArch = $dir.$nombre;
                    $retorno = $linkArch;
                }else{
                    $retorno = "Error NO se pudo copiar el archivo";
                }
            }else{
                $retorno = "Error No subio el archivo al srv";
            }
            return $retorno;
        }
    }
?>