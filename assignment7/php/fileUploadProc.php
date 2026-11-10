<?php

require_once(__DIR__ . '/../classes/Pdo_methods.php');

$pdo = new PdoMethods();

if (!isset($_FILES['pdfFile'])) {
    die("No file selected.");
}

$file = $_FILES['pdfFile'];

if ($file['error'] != 0) {
    die("Please select a file.");
}

$displayName = trim($_POST['displayName']);

$maxSize = 5000000;

if ($file['size'] > $maxSize) {
    die("File is too large.");
}

$fileExtension = strtolower(
    pathinfo(
        $file['name'],
        PATHINFO_EXTENSION
    )
);

if ($fileExtension != "pdf") {
    die("Only PDF files are allowed.");
}

$newFileName = time() . "_" . basename($file['name']);

$filePath = __DIR__ . "/../files/" . $newFileName;

if (move_uploaded_file($file['tmp_name'], $filePath)) {

    $sql = "INSERT INTO files
            (file_name, file_path)
            VALUES
            (:fileName, :filePath)";

    $bindings = [
        [
            "placeholder" => ":fileName",
            "value" => $displayName
        ],
        [
            "placeholder" => ":filePath",
            "value" => "files/" . $newFileName
        ]
    ];

    $pdo->otherBinded($sql, $bindings);

    header("Location: ../listFiles.php");
    exit();
}

die("Upload failed.");