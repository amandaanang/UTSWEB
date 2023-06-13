<?php 

$conn = mysqli_connect("localhost", "root", "", "user");

function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah terdaftar');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES ('',  '$username', '$email', '$password' )");

    return mysqli_affected_rows($conn);
}
?>