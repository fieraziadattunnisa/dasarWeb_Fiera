<?php
// mengimport kode program yang ada didalam database.php
include 'database.php';

// mengecek apakah ada data bernama 'submit'
if (isset($_POST['submit'])) {
    // memasukkan value bersih dari $_POST ke dalam variabel
    $id_hijab = htmlspecialchars($_POST['id_hijab']);

    // query sql
    $query = "DELETE FROM hijabs WHERE id_hijab = ?";
    // parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
    $params = [$id_hijab];
    // eksekusi query
    $sql = sqlsrv_query($conn, $query, $params);

    // jika query berhasil maka akan dikembalikan ke halaman index
    if ($sql) {
        header("Location:index.php?msg=delete");
    } else {
        $errors = print_r(sqlsrv_errors(), true);
        echo "<script>alert('$errors');</script>";
    }
} else {
    echo "biji";
}
?>