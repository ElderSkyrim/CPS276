<?php

$nameList = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["clearNames"]))
    {
        $nameList = "";
    }
    elseif (isset($_POST["addName"]))
    {
        $name = trim($_POST["name"] ?? "");
        $nameList = trim($_POST["namelist"] ?? "");

        if (!empty($name))
        {
            $parts = preg_split('/\s+/', $name);

            if (count($parts) >= 2)
            {
                $firstName = $parts[0];
                $lastName = $parts[count($parts) - 1];

                $formattedName = $lastName . ", " . $firstName;

                $names = [];

                if (!empty($nameList))
                {
                    $names = explode("\n", $nameList);
                }

                $names[] = $formattedName;

                sort($names, SORT_STRING);

                $nameList = implode("\n", $names);
            }
        }
    }
}
?>

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
                      rows="20"><?php echo htmlspecialchars($nameList); ?></textarea>
        </div>

    </form>

</div>

</body>
</html>
