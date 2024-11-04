<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $merk_hijab = htmlspecialchars($_POST['merk_hijab']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);

    if (isset($merk_hijab) && isset($harga)) {
        $query = "INSERT INTO hijabs (merk_hijab, deskripsi, harga, stok) VALUES (?, ?, ?, ?)";
        $params = [
            $merk_hijab,
            $deskripsi,
            $harga,
            $stok,
        ];

        $sql = sqlsrv_query($conn, $query, $params);
        if ($sql) {
            header("Location:index.php?msg=create");
        } else {
            $errors = print_r(sqlsrv_errors(), true);
            echo "<script>alert('$errors');</script>";
        }
    } else {
        echo "<script>alert('Merk dan Harga Hijab harus diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>DAFTAR HIJAB</title>
</head>

<body>
    <h3 class="text-center my-3">TAMBAH DATA</h3>
    <div class="card mx-5 py-2 px-3">
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="merk_hijab" class="form-label">Merk Barang</label>
                <input type="text" class="form-control" id="merk_hijab" name="merk_hijab" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Barang</label>
                <input type="number" class="form-control" id="harga" name="harga" min="0" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok Barang</label>
                <input type="number" class="form-control" id="stok" name="stok" min="0"></input>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">TAMBAH</button>
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>