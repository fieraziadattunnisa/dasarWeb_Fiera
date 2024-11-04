<?php
include 'database.php';

if (isset($_GET['id_hijab'])) {
    $id_hijab = htmlspecialchars($_GET['id_hijab']);
    $query = "SELECT * FROM hijabs WHERE id_hijab = ?";
    $params = [$id_hijab];
    $sql = sqlsrv_query($conn, $query, $params);

    if ($sql) {
        $hijab = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC);
    } else {
        header('Location:index.php');
    }
} else {
    header('Location:index.php');
}

if (isset($_POST['submit'])) {
    $merk_hijab = htmlspecialchars($_POST['merk_hijab']);   
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);
    $id_hijab = htmlspecialchars($_POST['id_hijab']);

    if (isset($merk_hijab) && isset($harga)) {
        $query = "UPDATE hijabs SET merk_hijab = ?, deskripsi = ?, harga = ?, stok = ? WHERE id_hijab = ?";
        $params = [
            $merk_hijab,
            $deskripsi,
            $harga,
            $stok,
            $id_hijab
        ];
        $sql = sqlsrv_query($conn, $query, $params);

        if ($sql) {
            header("Location:index.php?msg=update");
        } else {
            $errors = print_r(sqlsrv_errors(), true);
            echo "<script>alert('$errors');</script>";
        }
    } else {
        echo "<script>alert('Merk dan Harga Barang harus diisi!');</script>";
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
    <title>BASIC CRUD</title>
</head>

<body>
    <h3 class="text-center my-3">UPDATE</h3>
    <div class="card mx-5 py-2 px-3">
        <form action="update.php" method="POST">
            <div class="mb-3">
                <label for="merk_hijab" class="form-label">Merk Barang</label>
                <input type="text" class="form-control" id="merk_hijab" name="merk_hijab" value="<?= $hijab['merk_hijab'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $hijab['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Barang</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $hijab['harga'] ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="stok" class="form-label">Stok Barang</label>
                <input type="number" class="form-control" id="stok" min="0" name="stok" value="<?= $hijab['stok'] ?>" required>
            </div>
            <input type="hidden" name="id_hijab" value="<?= $hijab['id_hijab'] ?>">
            <button class="btn btn-primary" type="submit" name="submit">SIMPAN</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>