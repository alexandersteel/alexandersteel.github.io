<?php
var_dump($_POST);

mail(
    "stahl950@gmail.com",
    "Neue Anfrage",
    "Email: {$_POST ['email']}, Name: {$_POST['name']}, Nachricht: {$_POST['message']}");

header("Location: index.php?contacted=1");

?>