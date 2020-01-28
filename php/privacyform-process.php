<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Campo obrigatório ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Campo obrigatório ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["select"])) {
    $errorMSG = "Campo obrigatório ";
} else {
    $select = $_POST["select"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Campo obrigatório ";
} else {
    $terms = $_POST["terms"];
}

if (empty($_POST["subject"])) {
    $errorMSG = "Campo obrigatório ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "contato.mandaai@gmail.com";
$Subject = $_POST["subject"];

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Request: ";
$Body .= $select;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "sucesso";
}else{
    if($errorMSG == ""){
        echo "Aconteceu algo de errado :(";
    } else {
        echo $errorMSG;
    }
}
?>