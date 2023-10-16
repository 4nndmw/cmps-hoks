     <?php

        use LDAP\Result;

        include '../../config/Database.php';

        class makeJadwal
        {
            private $connection;

            public function __construct()
            {
                $this->connection = new Database;
            }

            public function queryAll()
            {
                $query = "SELECT * FROM tabel_jadwal JOIN tabel_proposal ON tabel_jadwal.id_proposal = tabel_proposal.id_proposal";
                // $query = "SELECT * FROM tabel_jadwal";
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
                $hariTanggal = $this->connection->conn->real_escape_string(htmlspecialchars($data["hari_tanggal"]));
                $jam = $this->connection->conn->real_escape_string(htmlspecialchars($data["jam"]));
                $tempatSidang = $this->connection->conn->real_escape_string(htmlspecialchars($data["tempat_sidang"]));
                $dosenPembimbing1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing1"]));
                $dosenPembimbing2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing2"]));
                $naskah = $this->connection->conn->real_escape_string(htmlspecialchars($data["naskah"]));

                $query = "INSERT INTO tabel_jadwal 
                ( id_proposal, hari_tanggal, jam, tempat_sidang, dosen_pembimbing1, dosen_pembimbing2, naskah) 
                                        VALUES
                 ( '$id_proposal', '$hariTanggal', '$jam', '$tempatSidang', '$dosenPembimbing1', '$dosenPembimbing2', '$naskah')
                                     ";
                $this->connection->conn->query($query);
                return $this->connection->conn->affected_rows;
            }

            public function updateData($data)
            {
                $id_jadwal = $this->connection->conn->$data('id_jadwal');
                $hariTanggal = $this->connection->conn->real_escape_string(htmlspecialchars($data["hari_tanggal"]));
                $jam = $this->connection->conn->real_escape_string(htmlspecialchars($data["jam"]));
                $tempatSidang = $this->connection->conn->real_escape_string(htmlspecialchars($data["tempat_sidang"]));
                $dosenPembimbing1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing1"]));
                $dosenPembimbing2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["dosen_pembimbing2"]));
                $naskah = $this->connection->conn->real_escape_string(htmlspecialchars("naskah"));

                $queryUpdate = "UPDATE tabel_jadwal SET 
                            hari_tanggal= '$hariTanggal',
                            jam = '$jam',
                            tempat_sidang = '$tempatSidang',
                            dosen_pembimbing1 = '$dosenPembimbing1',
                            dosen_pembimbing2 = '$dosenPembimbing2',
                            naskah = '$naskah',
                            WHERE id_jadwal = '$id_jadwal' 
                            ";

                mysqli_query($this->connection->conn, $queryUpdate);
                return mysqli_affected_rows($this->connection->conn);
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