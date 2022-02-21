
<?php

$destinatario = 'dm.visualdesing@gmail.com';
$subject = "Mensaje enviado desde la pagina WEB";
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$motivos = "";
foreach($_POST['motivo'] as $carre){
    $motivos .= $carre." - ";
}
$header = "Enviado desde la pagina WEB";

$msg =  
        "Nombre: ".$name."\n
        Email: ".$email."\n
        Mensaje: ".$message."\n
        Motivos elegidos: ".$motivos.".";

mail($destinatario,$subject,$msg,$header);
echo "<h4>¡Mail enviado exitosamente!</h2>";
echo "<script> setTimeout(\"location.href='../index.html'\",1000) </script>";

?>