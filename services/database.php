<?php
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
        
    }
?>