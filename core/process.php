<?php 


    $host_aceptados = array('localhost', '127.0.0.1', '192.168.167.1');
    $metodo_acepatdo = "POST";
    $usuario_correcto = "Adming";
    $password_correcto = "Admin";
    $txt_usuario = $_POST['txt_usuario'];
    $txt_password = $_POST['txt_password']

    if(in_array($_SERVER['HTTP_HOST'], $host_aceptados)){
        if($_SERVER['REQUEST_METHOD'] == $metodo_acepatdo){
            if(isset($txt_usuario) && !empty($txt_usuario )){
                if(isset($txt_usuario) && !empty($txt_usuario )){
                    if(($txt_usuario == $usuario_correcto) && ($txt_password == $password_correcto)){

                    } else {
                        
                    }
                } else {

                }
            }
        } else {

        }
    } else {
        
    }


?>