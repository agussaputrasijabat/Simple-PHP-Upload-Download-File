<?php

include "dbconfig.php";

extract($_GET);

$total_download = (int)$total_download + 1;

$sql = "UPDATE file SET total_download='$total_download' WHERE filename='$filename'";

if ($conn->query($sql) === true) {
    header("location:uploads/$filename");
    echo "<script>window.close();</script>";
} else {
    echo "Error download file: " . $conn->error;
}
