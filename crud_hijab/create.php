<?php
// mengimport kode program yang ada didalam database.php
include 'database.php';

// mengecek apakah ada data bernama 'submit'
if (isset($_POST['submit'])) {
    // memasukkan value bersih dari $_POST ke dalam variabel-variabel
    $merk_hijab = htmlspecialchars($_POST['merk_hijab']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $stok = htmlspecialchars($_POST['stok']);
    $harga = htmlspecialchars($_POST['harga']);

    // mengecek apakah $nama dan $harga sudah terisi
    if (isset($merk_hijab) && isset($harga)) {
        // query sql
        $query = "INSERT INTO hijabs (merk_hijab, deskripsi, stok, harga) VALUES (?, ?, ?, ?)";
        // parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
        $params = [
            $merk_hijab,
            $deskripsi,
            $stok,
            $harga
        ];
        // eksekusi query
        $sql = sqlsrv_query($conn, $query, $params);

        // jika query berhasil maka akan dikembalikan ke halaman index
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
    <title>DAFTAR HIJAB</title>
</head>

<body>
    <h3 class="text-center my-3">CREATE</h3>
    <div class="card mx-5 py-2 px-3">
        <!-- form yang akan menjalankan ulang file create.php dengan method post -->
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="merk_hijab" class="form-label">Merk Barang</label>
                <!-- input nama -->
                <input type="text" class="form-control" id="merk_hijab" name="merk_hijab" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                <!-- input deskripsi -->
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok Barang</label>
                <!-- input stok -->
                <textarea class="form-control" id="stok" name="stok" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Barang</label>
                <!-- input harga -->
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <!-- tombol kirim yang memiliki nama 'submit' -->
            <button class="btn btn-primary" type="submit" name="submit">TAMBAH</button>
            <!-- tombol reset jika ingin menghapus data yang diinputkan ke form -->
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>