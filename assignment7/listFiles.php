<?php

$files = require_once('php/listFilesProc.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>List Files</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h1>List Files</h1>

    <a href="index.php" class="btn btn-dark mb-3">
        Add File
    </a>

    <ul class="list-group">

        <?php foreach ($files as $file): ?>

            <li class="list-group-item">

                <a href="<?php echo $file['file_path']; ?>" target="_blank">

                    <?php echo $file['file_name']; ?>

                </a>

            </li>

        <?php endforeach; ?>

    </ul>

</div>

</body>
</html>