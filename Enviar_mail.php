<?php

    $texto_mail=$_POST["comentarios"];
    $destinario=$_POST["email"];
    $asunto=$_POST["asunto"];
    $headers="MIME_Version: 1.0\r\n";
    $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
    $headers.="From: prueba de mer inc < contacto@merinc.io >\r'n";

    $exito=mail($destinario,$asunto,$texto_mail,$headers);

    if($exito){
        echo "mensaje enviado exitosamente";
    }else{
        echo "Ocurrio un error";
    }

    


?>