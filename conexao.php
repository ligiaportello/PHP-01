<?php
session_start();

function Login($usuario,$senha)
{

    if($usuario =="rodolfo" && $senha="123")
    {

        $_SESSION ['entrou']= "sim";
        $_SESSION ['quem']= $usuario;

    }else {
        echo "Dados Invalidos";
    }
}
?>