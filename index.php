<?php

$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' .
  '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP boiler-plate</title>
  <!-- BOOTSTRAP V.5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- STYLE -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <div class="container">
    <form action="GET">
      <div class="mb-3">
        <label for="number-chars">Da quanti caratteri sarà formata la tua password?</label>
      </div>
      <div class="mb-3">
        <input class="form-control w-50" type="number" min="0" name="number-chars" id="number-chars">
      </div>
      <button class="btn btn-primary">Invia</button>
    </form>
  </div>


</body>

</html>