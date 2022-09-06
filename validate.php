<?php

$adminUser = "admin@lidiettes.com";
$adminPwd = "Pass";


if(isset ($_POST["user"]) && isset($_POST ["pwd"])) {
    if ($_POST["user"] == $adminUser && $_POST["pwd"] == $adminPwd) {
    session_start();

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pwd"] = $_POST["pwd"];

    header("Location: ./panel.php");

    } else {
    header("Location: ./index.php?msg=errorLogin");
    }
}