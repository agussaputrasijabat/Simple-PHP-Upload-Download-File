<?php

include "dbconfig.php";

$sql = "SELECT * FROM file";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>File Sharing</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h2>FILE SHARING</h2>
    <a href="upload.php">Upload File</a>
    <table>
        <thead>
            <tr>
                <th>Icon</th>
                <th>File Name</th>
                <th>Name</th>
                <th>Description</th>
                <th>File Size</th>
                <th>Total Download</th>
                <th>Username</th>
                <th>Upload Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($row = $result->fetch_assoc()) {
                ?>
            <tr>
                <td><img src="http://cdn.webiconset.com/file-type-icons/images/icons/<?= $row['type'] ?>.png" width="50px"/></td>
                <td><?= $row['filename'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['size'] ?></td>
                <td><?= $row['total_download'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['upload_date'] ?></td>
                <td><a target="_blank" href="download.php?filename=<?= $row['filename'] ?>&total_download=<?= $row['total_download'] ?>" onclick="ReloadPage();">Download</a></td>
            </tr>

            <?php

        }
        ?>
        </tbody>
    </table>

    <script>
        function ReloadPage(){
            
        }

        var blurred = false;
        window.onblur = function() { blurred = true; };
        window.onfocus = function() { blurred && (location.reload()); };
    </script>
</body>

</html>