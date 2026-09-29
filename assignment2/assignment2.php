<?php
$numbers = range(1, 50);
$evens = array_values(array_filter($numbers, fn($n) => $n % 2 === 0));
$evensLine = 'Even Numbers: ' . implode(' - ', $evens);

$formHtml = <<<HTML
<form class="row g-3">
  <div class="col-12">
    <label for="email" class="form-label"><strong>Email address</strong></label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  <div class="col-12">
    <label for="exampleTextarea" class="form-label"><strong>Example textarea</strong></label>
    <textarea class="form-control" id="exampleTextarea" name="message" rows="4" placeholder="put text here"></textarea>
  </div>
</form>
HTML;

function createTable(int $rows, int $cols): string
{
  $html = '<div class="table-responsive"><table class="table table-bordered table-striped">';
  $html .= '<tbody>';
  for ($r = 1; $r <= $rows; $r++) {
    $html .= '<tr>';
    for ($c = 1; $c <= $cols; $c++) {
      $html .= '<td>' . "Row {$r}, Col {$c}" . '</td>';
    }
    $html .= '</tr>';
  }
  $html .= '</tbody></table></div>';
  return $html;
}

$tableHtml = createTable(8, 6);

$content = <<<HTML
<div class="container py-4">
  <div class="mb-3">
    <p class="mb-0"><strong>{$evensLine}</strong></p>
  </div>

  <div class="mb-4">
    {$formHtml}
  </div>

  <div class="mt-4">
    {$tableHtml}
  </div>
</div>
HTML;
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Even Numbers, Form, and Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
  <?php
  // Echo the pre-built HTML content variable inside the body
  echo $content;
  ?>
</body>

</html>