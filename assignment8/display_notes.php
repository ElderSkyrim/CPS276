<?php
require_once 'classes/Date_time.php';

$dt = new Date_time();
$notes = $dt->checkSubmit();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Notes</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-4">

    <h1>Display Notes</h1>

    <a href="index.php">Add Note</a>

    <br><br>

    <form method="post">

        <div class="form-group">
            <label>Beginning Date</label>

            <input type="date"
                   class="form-control"
                   name="begDate">
        </div>

        <div class="form-group">
            <label>Ending Date</label>

            <input type="date"
                   class="form-control"
                   name="endDate">
        </div>

        <input type="submit"
               class="btn btn-primary"
               name="getNotes"
               value="Get Notes">

    </form>

    <br>

    <?= $notes ?>

</div>

</body>
</html>