<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Names</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-3">

    <h1 class="display-4">Add Names</h1>

    <form method="post" action="processNames.php">

        <input type="submit"
               name="addName"
               value="Add Name"
               class="btn btn-primary">

        <input type="submit"
               name="clearNames"
               value="Clear Names"
               class="btn btn-primary">

        <div class="mb-3 mt-3">
            <label for="name" class="form-label">
                Enter Name
            </label>

            <input type="text"
                   class="form-control"
                   id="name"
                   name="name">
        </div>

        <div class="mb-3">
            <label for="namelist" class="form-label">
                List of Names
            </label>

            <textarea class="form-control"
                      id="namelist"
                      name="namelist"
                      rows="20"></textarea>
        </div>

    </form>

</div>

</body>
</html>