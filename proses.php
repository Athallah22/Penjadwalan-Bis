<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Pweb</title>
    <link rel="stylesheet" href="styleproses.css">
</head>

<body class="main-content">

    <header class="header">
    <a href="#" class="logo">Dahlan Bus</a>
        <nav class="navbar">
            <a href="index.html" class="active">Home</a>
            <a href="jadwal.php">Jadwal</a>
            <button class="btnLogin-popup">
                <a href="admin.php">Admin</a></button>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-kontent">
        <?php
            $db_host = 'localhost'; // Nama Server
            $db_user = 'root'; // User Server
            $db_pass = ''; // Password Server
            $db_name = 'jadwalbus'; // Nama Database

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $bus = $_POST["bus"];
                $tujuan = $_POST["tujuan"];
                $kelas = $_POST["kelas"];
                $harga = $_POST["harga"];

                $sql = "INSERT INTO jadwalbus ( nama, tujuan, kelas, harga) 
                        VALUES ('$bus', '$tujuan', '$kelas', '$harga')";

                if ($conn->query($sql) === true) {
                    echo "JADWAL BERHASIL DIMASUKAN";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            $conn->close();
            ?>

        </div>
        </div>
    </section>
    </div>
    </section>
    <footer>
        <div class="footer-kontent">
            <p>&copy; 2023 Dahlan Bus. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>