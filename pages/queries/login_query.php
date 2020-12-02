<?php
    include_once "../../services/database.php";

    session_start();

    $db = new Db;

    $login = $_POST["login"];
    $password = $_POST["password"];

    // Get Account ID if password matched
    $query = "SELECT `AccountInfo`.`ID` FROM `AccountInfo` INNER JOIN `AccountLoginData` ON `AccountInfo`.`LoginDataID` = `AccountLoginData`.`ID` WHERE `Login` = '$login' AND `Password` = '$password'";
    $result = $db->RunQuery($query);
    $fetched = mysqli_fetch_array($result);
    $id = $fetched['ID'];
    if($id)
    {
        $_SESSION['AccountID'] = $id;
        header("Location:/pages/main.php");
    }
    else
        header("Location:/pages/login.php");;
?>