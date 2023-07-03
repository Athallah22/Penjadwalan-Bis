<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Pweb</title>
    <link rel="stylesheet" href="styleadmin.css">
</head>

<body class="main-content">
    <header class="header">
        <a href="#" class="logo">Dahlan Bus</a>
        <nav class="navbar">
            <a href="index.html" class="active">Home</a>
            <a href="jadwal.php">Jadwal</a>
            <button class="btnLogin-popup">
                <a href="#admin">Admin</a></button>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-kontent">
            <div class="login-wrap">
                <div class="login-html">
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <form method="post" action="proses.php">
                                <div class="group">
                                    <label for="bus" class="label">Bus:</label>
                                    <input type="text" id="bus" name="bus" class="input" required>
                                </div>
                                <div class="group">
                                    <label for="tujuan" class="label">Tujuan:</label>
                                    <input type="text" id="tujuan" name="tujuan" class="input" required>
                                </div>
                                <div class="group">
                                    <label for="kelas" class="label">Kelas:</label>
                                    <select id="kelas" name="kelas" class="input" required>
                                        <option value="">-- Pilih Kelas --</option>
                                        <option value="Ekonomi">EKONOMI</option>
                                        <option value="Bisnis">BISNIS</option>
                                        <option value="Eksekutif">EKSEKUTIF</option>
                                    </select>
                                </div>
                                <div class="group">
                                    <label for="harga" class="label">Harga:</label>
                                    <input type="number" id="harga" name="harga" class="input" required>
                                </div>
                                <div class="group">
                                    <input type="submit" value="Submit" class="button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <footer>
        <div class="footer-kontent">
            <p>&copy; 2023 Dahlan Bus. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
