<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $id_hijab = htmlspecialchars($_POST['id_hijab']);

    $query = "DELETE FROM hijabs WHERE id_hijab = ?";
    $params = [$id_hijab];
    $sql = sqlsrv_query($conn, $query, $params);

    if ($sql) {
        header("Location:index.php?msg=delete");
    } else {
        $errors = print_r(sqlsrv_errors(), true);
        echo "<script>alert('$errors');</script>";
    }
} 
?>