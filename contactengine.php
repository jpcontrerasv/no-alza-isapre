<?php

$EmailFrom = "alzaisapre@index.ninja";
$EmailTo = "dalejandracc@gmail.com";
$Subject = "Contacto solicitud alza Isapre";
$nombre = Trim(stripslashes($_POST['nombre'])); 
$apellidos = Trim(stripslashes($_POST['apellidos'])); 
$telefono = Trim(stripslashes($_POST['telefono'])); 
$asunto = Trim(stripslashes($_POST['asunto']));
$email = Trim(stripslashes($_POST['email'])); 
$mensaje = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";

$Body .= "Apellidos: ";
$Body .= $apellidos;
$Body .= "\n";

$Body .= "Telefono: ";
$Body .= $telefono;
$Body .= "\n";

$Body .= "Asunto: ";
$Body .= $asunto;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto-enviado.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>