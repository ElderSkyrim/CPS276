<?php
require_once 'classes/Date_time.php';

$dt = new Date_time();
$message = $dt->checkSubmit();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Note</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-4">

    <h1>Add Note</h1>

    <a href="display_notes.php">Display Notes</a>

    <br><br>

    <?= $message ?>

    <form method="post">

        <div class="form-group">
            <label>Date and Time</label>

            <input type="datetime-local"
                   class="form-control"
                   name="dateTime">
        </div>

        <div class="form-group">
            <label>Note</label>

            <textarea class="form-control"
                      rows="8"
                      name="note"></textarea>
        </div>

        <input type="submit"
               class="btn btn-primary"
               name="addNote"
               value="Add Note">

    </form>

</div>

</body>
</html>