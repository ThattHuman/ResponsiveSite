<?php
    session_start();
    include_once "../../services/database.php";

    $db = new Db;

    $authorID = $_SESSION["AccountID"];
    $categoryID = $_POST["category"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Set Post
    $query = "INSERT INTO `Post` (`AuthorID`, `CategoryID`, `CreationDate`, `UpdateDate`, `Title`, `Content`) VALUES ($authorID, $categoryID, now(), now(), '$title', '$content');";
    $db->RunQuery($query);

    $msg = "";

  // If upload button is clicked ...
    if (isset($_POST['picture'])) {
        // Get image name
        $tmp = $_FILES['picture']['tmp_name'];
        $image = addslashes(file_get_contents($tmp));

        echo $image;

        // image file directory
        $target = "src/img/".basename($image);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        if( in_array($imageFileType,$extensions_arr) ){
 
            // Insert record
            $query = "INSERT INTO `Post`(`Picture`) VALUES ('$image');";
            $db->RunQuery($query);
         
            // Upload file
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
         }
    }

    header("Location:/pages/main.php");
?>