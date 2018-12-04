<?php

include "dbconfig.php";

function formatBytes($bytes, $precision = 2)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    return round($bytes, $precision) . ' ' . $units[$pow];
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filename"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$filename = $_FILES["filename"]["name"];

$size = number_format(($_FILES["filename"]["size"] / 1024) / 1024, 2, '.', '');
$file_size = number_format(($_FILES["filename"]["size"] / 1024) / 1024, 2, '.', '') . " MB";

// Check file size
if ($size > 10) {
    echo "<script>alert('Maaf, file Anda terlalu besar.');</script>";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType == "php") {
    echo "<script>alert('Maaf, PHP file tidak diizinkan untuk di upload karena alasan keamanan.');</script>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Maaf, file Anda tidak dapat diunggah.');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["filename"]["name"]) . " has been uploaded.";
    } else {
        echo "<script>alert('Maaf, ada kesalahan saat mengunggah file Anda.');</script>";
    }
}

extract($_POST);

$date = date("D M d, Y G:i");

$sql = "INSERT INTO file VALUES ('$filename','$name', '$description','$imageFileType','$file_size', 0,'$username', '$date')";

if ($conn->query($sql) === true) {
    header("location:index.php");
} else {
    echo "<script>alert(\"Error: " . $conn->error . "\");</script>";
    echo "<script>window.history.go(-1);</script>";
}