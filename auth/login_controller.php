 <?php

    require_once "../config/Database.php";

    class loginUser
    {
        private $connection;

        public function __construct()
        {
            $this->connection = new Database;
        }

        public function roleUser()
        {
            if (isset($_POST['submit'])) {
                $username = $_POST['uname'];
                $password = $_POST['pass'];

                $cekuser = mysqli_query($this->connection->conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

                $hitung = mysqli_num_rows($cekuser);

                if ($hitung) {
                    $ambilData = mysqli_fetch_array($cekuser);
                    $role = $ambilData['role'];

                    if ($role == 'kaprodi') {
                        // jika admin 
                        $_SESSION['log'] = 'logged';
                        $_SESSION['role'] = 'kaprodi';
                        header('location:../views/kaprodi/tabel_judul_mahasiswa.php');
                    } elseif ($role == "penguji") {
                        $_SESSION['log'] = 'logged';
                        $_SESSION['role'] = 'penguji';
                        header('location:../views/dosenPenguji/tabel_nilai_sidang.php');
                    } elseif ($role == "pembingbing") {
                        $_SESSION['log'] = 'logged';
                        $_SESSION['role'] = 'pembingbing';
                        header('location:../views/pembingbing/');
                    } else {
                        $_SESSION['log'] = 'logged';
                        $_SESSION['role'] = 'mahasiswa';
                        header('location:../views/mahasiswa/input_judul_mahasiswa.php');
                    }
                } else {
                    echo "
                    <script>
                        alert('  ');
                    </script>
                    ";
                }
            }
        }
    }
