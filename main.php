<?php

$name = addslashes($_POST['first-name']);
$lastname = addslashes($_POST['last-name']);
$service = addslashes($_POST['clean']);
$phone = addslashes($_POST['phone']);
$email = addslashes($_POST['email']);
$address = addslashes($_POST['address']);
$city = addslashes($_POST['city']);
$zip = addslashes($_POST['zip']);
$message = addslashes($_POST['message']);

$to = "cleanupservicesorlando1@gmail.com";
$information = "Próximo Serviço:";

$body = "Name: ".$name."\n"."Last Name:  ".$lastname."\n".\"Service: ".$service."\n"."Phone: ".$phone."\n"
."E-mail: ".$email."\n"."Address: ".$address."\n"."City: ".$city."\n"."Zip-Code: ".$zip."\n"."Message: ".$message."\n";

$header = "Agenda de: ".$name."\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$information,$body,$header)){
    echo("Agenda enviada com sucesso!");
    else{
        echo("Houve um erro ao enviar o email!");
    }
}
?>