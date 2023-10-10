<?php
include '../../config/Database.php';

class MahasiswaController
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Database();
    }

    public function queryAll()
    {
        $query = "SELECT * FROM tabel_proposal";
        $result = $this->connection->conn->query($query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }


    public function insertData($data)
    {
        $nama_mahasiswa = $this->connection->conn->real_escape_string(htmlspecialchars($data["nama_mahasiswa"]));
        $npm = $this->connection->conn->real_escape_string(htmlspecialchars($data["npm"]));
        $jurusan = $this->connection->conn->real_escape_string(htmlspecialchars($data["jurusan"]));
        $tempat_tanggal_lahir = $this->connection->conn->real_escape_string(htmlspecialchars($data["tempat_tanggal_lahir"]));
        $alamat = $this->connection->conn->real_escape_string(htmlspecialchars($data["alamat"]));
        $no_telepon = $this->connection->conn->real_escape_string(htmlspecialchars($data["no_telepon"]));
        $judul_pertama = $this->connection->conn->real_escape_string(htmlspecialchars($data["judul_pertama"]));
        $masalah_pertama1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_pertama1"]));
        $masalah_pertama2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_pertama2"]));
        $masalah_pertama3 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_pertama3"]));
        $judul_kedua = $this->connection->conn->real_escape_string(htmlspecialchars($data["judul_kedua"]));
        $masalah_kedua1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_kedua1"]));
        $masalah_kedua2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_kedua2"]));

        $query = "INSERT INTO tabel_proposal
         (nama_mahasiswa, npm, jurusan, tempat_tanggal_lahir, alamat, no_telepon, judul_pertama, masalah_pertama1, masalah_pertama2, masalah_pertama3, judul_kedua, masalah_kedua1, masalah_kedua2)
                                VALUES
                ('$nama_mahasiswa', '$npm', '$jurusan', '$tempat_tanggal_lahir', '$alamat', '$no_telepon', '$judul_pertama', '$masalah_pertama1', '$masalah_pertama2', '$masalah_pertama3', '$judul_kedua', '$masalah_kedua1', '$masalah_kedua2')
                        ";

        mysqli_query($this->connection->conn, $query);
        return mysqli_affected_rows($this->connection->conn);
    }

    public function updateData($data)
    {
        $id_proposal = $data['id_proposal'];
        $nama_mahasiswa = $this->connection->conn->real_escape_string(htmlspecialchars($data["nama_mahasiswa"]));
        $npm = $this->connection->conn->real_escape_string(htmlspecialchars($data["npm"]));
        $jurusan = $this->connection->conn->real_escape_string(htmlspecialchars($data["jurusan"]));
        $tempat_tanggal_lahir = $this->connection->conn->real_escape_string(htmlspecialchars($data["tempat_tanggal_lahir"]));
        $alamat = $this->connection->conn->real_escape_string(htmlspecialchars($data["alamat"]));
        $no_telepon = $this->connection->conn->real_escape_string(htmlspecialchars($data["no_telepon"]));
        $judul_pertama = $this->connection->conn->real_escape_string(htmlspecialchars($data["judul_pertama"]));
        $masalah_pertama1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_pertama1"]));
        $masalah_pertama2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_pertama2"]));
        $masalah_pertama3 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_pertama3"]));
        $judul_kedua = $this->connection->conn->real_escape_string(htmlspecialchars($data["judul_kedua"]));
        $masalah_kedua1 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_kedua1"]));
        $masalah_kedua2 = $this->connection->conn->real_escape_string(htmlspecialchars($data["masalah_kedua2"]));

        $queryUpdate = " UPDATE tabel_proposal SET 
                        nama_mahasiswa = '$nama_mahasiswa',
                        npm = '$npm',
                        jurusan = '$jurusan',
                        tempat_tanggal_lahir = '$tempat_tanggal_lahir',
                        alamat = '$alamat',
                        no_telepon = '$no_telepon',
                        judul_pertama = '$judul_pertama',
                        masalah_pertama1 = '$masalah_pertama1',
                        masalah_pertama2 = '$masalah_pertama2',
                        masalah_pertama3 = '$masalah_pertama3',
                        judul_kedua = '$judul_kedua',
                        masalah_kedua1 = '$masalah_kedua1',
                        masalah_kedua2 = '$masalah_kedua2',
                        WHERE id_proposal = '$id_proposal'
            ";

        mysqli_query($this->connection->conn, $queryUpdate);
        return mysqli_affected_rows($this->connection->conn);
    }


    public function deleteData($id)
    {
        mysqli_query($this->connection->conn, "DELETE FROM tabel_proposal WHERE id_proposal = $id");
        return mysqli_affected_rows($this->connection->conn);
    }
}
