<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    @$fileExt = strtolower(end(explode(".", $_FILES['file']['name'])));
    $extensions = array("pdf", "doc", "docx", "txt");

    if (!in_array($fileExt, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    if ($fileSize > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    if (empty($errors) == true) {
        move_uploaded_file($_FILES['file']['tmp_name'], "documents/" . $fileName);
        echo "File berhasil diunggah";
    } else {
        echo implode("", $errors);
    }
}
?>