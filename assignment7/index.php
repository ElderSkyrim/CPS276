
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h1>File Upload</h1>

    <a href="listFiles.php">Show File List</a>

    <form action="php/fileUploadProc.php"
          method="POST"
          enctype="multipart/form-data"
          class="mt-3">

        <div class="mb-3">
            <label for="fileName" class="form-label">
                File Name
            </label>

            <input type="text"
                   class="form-control"
                   name="fileName"
                   id="fileName"
                   required>
        </div>

        <div class="mb-3">
            <input type="file"
                   class="form-control"
                   name="pdfFile"
                   accept=".pdf,application/pdf"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Upload File
        </button>

    </form>

</div>

</body>
</html>
