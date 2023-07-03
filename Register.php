<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Pweb</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="styleregister.css">
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
            <div class="login-wrap">
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                            In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                        <div class="login-form">
                        <div class="sign-in-htm">
                <?php
                if (isset($_POST['user']) && isset($_POST['pass'])) {
                    $username = $_POST['user'];
                    $password = $_POST['pass'];

                    if ($username == 'admin' && $password == 'admin') {
                        session_start();
                        $_SESSION['login'] = TRUE;
                        header("location: dashboard.php");
                        exit; 
                    } else {
                        echo 'Login failed';
                    }
                }
                ?>
                <form method="post" action="Register.php" enctype="multipart/form-data">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="user">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="pass"> 
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
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