 <?php

    include "../../config/Database.php";

    class dosenPenguji
    {
        private $connection;

        public function __construct()
        {
            $this->connection = new Database();
        }

        public function queryAll()
        {
            $query = "SELECT * FROM tabel_nilai_sempro JOIN tabel_proposal ON tabel_nilai_sempro.id_proposal = tabel_proposal.id_proposal";
            $result = $this->connection->conn->query($query);
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }

        public function createData($data)
        {
            $id_proposal = $this->connection->conn->real_escape_string(htmlspecialchars($data["id_proposal"]));
            $dosen_pembimbing1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing1"]));
            $dosen_pembimbing2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing2"]));
            $nilai_total = $this->connection->conn->real_escape_string(htmlspecialchars($data["nilai_total"]));
            $nilai_mutu = $this->connection->conn->real_escape_string(htmlspecialchars($data["nilai_mutu"]));

            $query = " INSERT INTO tabel_nilai_sempro ( id_proposal, dosen_pembimbing1, dosen_pembimbing2, nilai_total, nilai_mutu ) VALUES ('$id_proposal', '$dosen_pembimbing1', '$dosen_pembimbing2', '$nilai_total', '$nilai_mutu')
             ";

            $this->connection->conn->query($query);
            return $this->connection->conn->affected_rows;
        }

        public function updateData($data)
        {
            $id_sempro = $this->connection->conn->real_escape_string(htmlspecialchars($data['id_sempro']));
            $id_proposal = $this->connection->conn->real_escape_string(htmlspecialchars($data["id_proposal"]));
            $dosen_pembimbing1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing1"]));
            $dosen_pembimbing2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing2"]));
            $nilai_total = $this->connection->conn->real_escape_string(htmlspecialchars($data["nilai_total"]));
            $nilai_mutu = $this->connection->conn->real_escape_string(htmlspecialchars($data["nilai_mutu"]));

            $query =  " UPDATE tabel_nilai_sempro SET 
                        id_proposal = '$id_proposal',
                        dosen_pembimbing1= '$dosen_pembimbing1',
                        dosen_pembimbing2= '$dosen_pembimbing2',
                        nilai_total = '$nilai_total',
                        nilai_mutu = '$nilai_mutu',
                        WHERE id_sempro = $id_sempro
                        ";
            $this->connection->conn->query($query);
            return $this->connection->conn->affected_rows;
        }

        public function deleteData($id)
        {
            $query = "DELETE FROM tabel_jadwal WHERE id_jadwal = $id";
            mysqli_query($this->connection->conn, $query);
            return mysqli_affected_rows($this->connection->conn);
        }

        public function find($id)
        {
            $query = "SELECT * FROM tabel_proposal WHERE id_proposal = $id";
            $result = $this->connection->conn->query($query);
            return $result->fetch_assoc();
        }
    }




    ?> 