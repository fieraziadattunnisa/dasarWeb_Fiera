<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");
    $totalFiles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileType = $_FILES['files']['type'][$i];
        @$fileExt = strtolower(end(explode(".", $fileName)));

        if (!in_array($fileExt, $extensions)) {
            $errors[] = "Ekstensi file $fileName yang diizinkan adalah JPG, JPEG, PNG, atau GIF.<br>";
        }

        if ($fileSize > 2097152) {
            $errors[] = "Ukuran file $fileName tidak boleh lebih dari 2 MB.<br>";
        }

        if (empty($errors)) {
            move_uploaded_file($_FILES['files']['tmp_name'][$i], "images/" . $fileName);
            echo "File $fileName berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("", $errors);
    }
}
?>
