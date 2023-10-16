 <?php

    include '../../config/Database.php';

    class dosenPenguji
    {
        private $connection;

        public function __construct()
        {
            $connection = new Database();
        }

        public function queryAll()
        {
            $query = "SELECT * FROM  " ;
        }
    }

    ?> 