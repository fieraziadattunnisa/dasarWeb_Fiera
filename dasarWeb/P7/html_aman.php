<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi Email</title>
</head>
<body>

    <form action="html_aman.php" method="post">
        <label for="email">Masukkan email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Memeriksa apakah data telah dikirim melalui metode POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email yang dimasukkan valid: $email</p>";
        } else {
            echo "<p>Email yang dimasukkan tidak valid. Silakan masukkan alamat email yang benar.</p>";
        }
    }
    ?>

</body>
</html>
