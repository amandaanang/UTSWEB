<?php

// session_start(); // Memulai session
// // Cek apakah pengguna sudah login atau belum
// if (isset($_SESSION["login"]) && $_SESSION["login"] === true) {
//     header("location: beranda.php"); // Redirect ke halaman beranda jika sudah login
//     exit;
// }

// require 'function.php';

// // Proses login33
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = "user";
//     $password = "123456";

//     $input_username = $_POST["username"];
//     $input_password = $_POST["password"];

//     if ($input_username == $username && $input_password == $password) {
//         // Login berhasil, set session dan redirect ke halaman welcome
//         $_SESSION["loggedin"] = true;
//         $_SESSION["username"] = $username;
//         header("location: beranda.php");
//     } else {
//         echo "Username atau password salah.";
//     }
// }

session_start();
if(isset($_SESSION["login"])) {
	header("Location: index.php");
}

require 'function.php';

if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>TOKO BUKU</title>
    <link rel="stylesheet" href="login.css" />

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=VqBU2a3dumBd25lsMhamOP5fY_mOzq2recCRJT67Lxh9oVgnb2VCdXTqUEAFM4mt0Mje97wSrVzs1VcCIlG5oLwcBChf1c3k3kHJWDcC9XB0F9mT6JibNhNYA_-ZokGh2rBtiW2fhOLP2rmHrGg4hwSBT9_pZqPYTdeZ8q4TaY87RFZC_bZ5k8W1jTUam-ij1atOe7FDysUd7eEa8flGYyNiE6trMTbTCKA-ON28gzwCzWfRuvdoOUj-OmcbzsU-mczt6enAmiGvcMdwhMJbbQeeJFsJk6l8CgIfQLhV9lN0FKWbZVEtxD_4CyRm0bSLw_Z1AtEZRY-mdLZ35Aqh-mnon5P3LEr0fXARP_wtp4fLEVYPnTeGSc_y6nyY0rCJh9wAhFPAztEOtfK7KdAtNh4gbtvQEw2vlR3EsdQdeUAW65yVyLDIuOBO3D4eUL8al0tarDnnmp9qXpgxQb2sL0oJHxywsivy8AaMPCqlNvvCe1GJVvSN7znj9DpUxRlxv3i7XmUshxmuB7JlE7tBKlZPTY7Mgv5oTtTi-1xgPh_pBUB7V_TA3ojz7vQeWUxNF8M9Wdj6aBYYJXGZWLIWgWeDfxwq_IgENwjpOzdC3_UltrP7hR7Yg1EvSS-nf-MsKwcV9DgmOnXv5Io34dISfqWvuLPU2C9H1Laz-lt3jw_C0cqItXI573zZ4PZICHHamhU4IYb5bMuP_wJrHvBEdWxTzXKpk6kjrKub3ZF2Z_BW72YfTE7Vm59a80qibEM9gVQHCJqNzBJu8AqFfLtypv2tje36w3H2ZMZx3uoznjAacbqhjTfn4fdHnPhTnLhUafxUDOa-vSAs9uZnMjxjWYpMDc-IJcTqXd797VVgdYYRzsizLqEWk7uDrk7VLmNeiuy4I8aeAxtVQ_xUg2uUgfEoeCkUIF9bx2K9TpVXd2QUatiGnJ4PfG4YGu7RraHi7Fwk237iguOhX--UQmNepjdPAnoQm0GNiJCgcRkBl3YOJpFx-1CbUwcLzfNk47sQyzFEptpZ-AJ0gxpRMvWLkp7lkt_7yYXvKYSyzOQf6ujgwgFT4wai_6urGCm955x_lEE_G2rnN1O2NIUACEp9YX72oovGcb645CjZwhpdeS1zsWObsbmArRInJUQfDfJBNpI4DpdnaB8yIvnkir8mrRHeNwyFmni8I7bYHdfzTtr3tTz9KuBV7Pk-H7mY_MqSVF8_nZT1v3RLmDG5MnWhZtuyUT3bAmUT0yDQFwnUj1j9ySwJAHTs9ogPTvX0vjsUK0JpKZl0vRY3b3QVfCocUU21zbemGBLqhkO8bK5u9jiYkS-9mc6XGeXSdsBiL1-EI1tQz-B4Q1av4M7VxLKyLlVAn20DMH0gpVkKB7_sXuMEsBuG9JiGfUvm19hNoWW4xsxP5Ch1SUadVEEUefVSQICQlxPts-7T2EXUtgiTsUk8zBtFyK_zn4oQ-XFkPYuNLnmWhmL3klDvJbB4Jh6dG7HtIMhLZVAj582QTPY1YzMDDR_bvsUDE3wlHvjzbDxIfY0rafXAcOoCpwF-cHcMPLMsNNLPica85qfpKkukNBdwTGhBCZ6aUn-39ZVfgp5CZt50fKrWGgMWSQXbn8G4VKfFoD1XIOsKI3rswmRC7IDBElfNw1Nk3GbXwWdh0UcCX7eVE9-MSFBKvIHsEDJwIKNE2sjGlwMgOeJQN_mfyuUIsxn_W-z8h_eIsTjN_ZZ2" charset="UTF-8"></script>

</head>

<body>
    <h1>LOGIN</h1>
    <div class="login">
        <h3> Login Boy </h3>
        <form method="POST" action="">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" value="Login" name="login">
        </form>
    </div>
</body>

</html>