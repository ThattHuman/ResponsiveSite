<?php 
    include_once "../../services/database.php";

    session_start();

    $db = new Db;

    $name = $_POST["name"];
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Set Login Data
    $query = "INSERT INTO `AccountLoginData` (`Login`, `Password`) VALUES ('$login', '$password');";
    $db->RunQuery($query);
    // Get LoginData ID
    $query = "SELECT `ID` FROM `AccountLoginData` WHERE `Login` = '$login'";
    $result = $db->RunQuery($query);
    $fetched = mysqli_fetch_array($result);
    $id = $fetched['ID'];
    // Set Account info
    $query = "INSERT INTO `AccountInfo` (`FullName`, `LoginDataID`, `RegistrationDate`, `RoleID`) VALUES ('$name', $id, CURDATE(), 3);";
    $db->RunQuery($query);
    // Get Account ID
    $query = "SELECT `ID` FROM `AccountInfo` WHERE `LoginDataID` = $id";
    $result = $db->RunQuery($query);
    $fetched = mysqli_fetch_array($result);
    $accountId = $fetched['ID'];
    // Save ID in Session
    $_SESSION['AccountID'] = $accountId;
    
    header("Location:/pages/main.php");

    //"INSERT INTO `Post` (`AuthorID`, `CategoryID`, 'CreationDate', 'UpdateDate', 'Title', 'Content') VALUES (3, 4, NOW(), NOW(), );" // POST PROTOTYPE
?>