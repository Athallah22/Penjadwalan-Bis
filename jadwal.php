<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Pweb</title>

    <link rel="stylesheet" href="stylejadwal2.css">
    <link rel="stylesheet" href="stylejadwal.css">
</head>

<body class="main-content">
    <header class="header">
    <a href="#" class="logo">Dahlan Bus</a>
        <nav class="navbar">
            <a href="index.html" class="active">Home</a>
            <a href="jadwal.php">Jadwal</a>
            <button class="btnLogin-popup">
                <a href="Register.php">Login</a></button>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-kontent">
        <div class="data-table-wrapper">
            <?php
            $db_host = 'localhost'; // Nama Server
            $db_user = 'root'; // User Server
            $db_pass = ''; // Password Server
            $db_name = 'jadwalbus'; // Nama Database

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
            if (!$conn) {
                die('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
            }

            $sql = 'SELECT * FROM jadwalbus';

            $query = mysqli_query($conn, $sql);

            if (!$query) {
                die('SQL Error: ' . mysqli_error($conn));
            }
            ?>

            <table class="data-table">
                <caption class="title">JADWAL KEBERANGKATAN BUS</caption>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>BUS</th>
                        <th>TUJUAN</th>
                        <th>KELAS</th>
                        <th>HARGA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     = 1;
                    $total  = 0;
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<tr>
                                <td>' . $no . '</td>
                                <td>' . $row['nama'] . '</td>
                                <td>' . $row['tujuan'] . '</td>
                                <td>' . $row['kelas'] . '</td>
                                <td>' . $row['harga'] . '</td>
                            </tr>';
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer>
        <div class="footer-kontent">
            <p>&copy; 2023 Dahlan Bus. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>