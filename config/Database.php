 <?php


    class Database
    {
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "uniba1_db";
        public $conn;


        public function __construct()
        {
            $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->db);

            if (!$this->conn) {
                echo "Not Connection";
            }
        }
    }








    ?> 