<?php

require_once("classes/Directories.php");

$message = "";

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST["folderName"]) &&
    isset($_POST["fileContent"])
) {

    $folderName = trim($_POST["folderName"]);
    $fileContent = trim($_POST["fileContent"]);

    if ($folderName !== "" && $fileContent !== "") {

        $directory = new Directories();

        $result = $directory->createDirectoryAndFile(
            $folderName,
            $fileContent
        );

        if ($result["success"]) {

            $message = "
            <div class='alert alert-success'>
                {$result['message']}<br>
                <a href='{$result['link']}' target='_blank'>
                    Open File
                </a>
            </div>";
        } else {

            $message = "
            <div class='alert alert-danger'>
                {$result['message']}
            </div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File and Directory Assignment</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h1 class="display-3">File and Directory Assignment</h1>

    <p class="mt-4">
        Enter a folder name and the contents of a file.
        Folder names should contain alphanumeric characters only.
    </p>

    <?= $message ?>

    <form method="post">

        <div class="mb-3">
            <label for="folderName" class="form-label">
                Folder Name
            </label>

            <input
                type="text"
                class="form-control"
                id="folderName"
                name="folderName"
                required>
        </div>

        <div class="mb-3">
            <label for="fileContent" class="form-label">
                File Content
            </label>

            <textarea
                class="form-control"
                id="fileContent"
                name="fileContent"
                rows="8"
                required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</div>

</body>
</html>