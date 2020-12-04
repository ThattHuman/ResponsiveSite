<?php
    session_start();

    class Db
    {
        private $cServerAddress = 'localhost';
        private $cLogin = 'root';
        private $cPassword = '';
        private $cDatabaseName = 'api_db';

        public function RunQuery($query)
        {
            $connection = mysqli_connect($this->cServerAddress, $this->cLogin, $this->cPassword, $this->cDatabaseName);

            $result = mysqli_query($connection, $query) or die("    vmer    ");

            mysqli_close($connection);

            return $result;
        }
    }

    class DbCommands
    {
        private $db;
        
        public function __construct()
        {
            $this->db = new Db;
        }

        public function GetProfileInfo($id)
        {
            $query = "SELECT `AccountInfo`.`FullName`, `AccountInfo`.`Nickname`, `AccountInfo`.`RegistrationDate`, `AccountLoginData`.`Login` FROM `AccountInfo` INNER JOIN `AccountLoginData` ON `AccountInfo`.`LoginDataID` = `AccountLoginData`.`ID` WHERE `AccountInfo`.`ID` = $id";
            $result = $this->db->RunQuery($query);
            $fetched = mysqli_fetch_array($result);
            return $fetched;
        }

        public function GetCategories()
        {
            $query = "SELECT `ID`, `Name` FROM `Category`";
            $result = $this->db->RunQuery($query);

            while($row = $result->fetch_assoc())
            {
                $rows[] = $row;
            }

            //$fetched = mysqli_fetch_all($result);
            return $rows;
        }
    }
?>