<?php

class Directories
{
    private $basePath;

    public function __construct()
    {
        $this->basePath = __DIR__ . "/../directories/";
    }

    public function createDirectoryAndFile($folderName, $content)
    {
        // Folder names must be alphanumeric
        if (!preg_match("/^[a-zA-Z0-9]+$/", $folderName)) {
            return [
                "success" => false,
                "message" => "Folder names must contain alphanumeric characters only."
            ];
        }

        $directory = $this->basePath . $folderName;

        if (is_dir($directory)) {
            return [
                "success" => false,
                "message" => "Directory already exists."
            ];
        }

        if (!mkdir($directory, 0777)) {
            return [
                "success" => false,
                "message" => "Unable to create directory."
            ];
        }

        $filePath = $directory . "/readme.txt";

        $file = fopen($filePath, "w");

        if (!$file) {
            return [
                "success" => false,
                "message" => "Unable to create file."
            ];
        }

        fwrite($file, $content);

        fclose($file);

        chmod($filePath, 0777);

        return [
            "success" => true,
            "message" => "Directory and file created successfully.",
            "link" => "directories/$folderName/readme.txt"
        ];
    }
}