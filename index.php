<?php

include __DIR__ . "/partials/_functions.php";

$has_number = isset($_GET['number-chars']);

if ($has_number) {

  $number = $_GET['number-chars'];

  $input_valid = false;
  if (intval($number)) {
    $input_valid = true;
  }
  ;
  session_start();

  $_SESSION['password'] = get_random_password($number);
  var_dump($_SESSION['password']);
  header('Location: ./results.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Passsword Generator</title>
  <!-- BOOTSTRAP V.5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- STYLE -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <div class="container">

    <?php if ($has_number): ?>
    <div class="alert <?php echo $input_valid ? 'alert-primary' : 'alert-danger' ?>">
      <?php echo $input_valid ? 'input inviato con successo' : 'inserisci un input corretto' ?>
    </div>
    <?php endif; ?>

    <form action="" method="GET">
      <div class="mb-3">
        <label for="number-chars">Da quanti caratteri sarà formata la tua password?</label>
      </div>
      <div class="mb-3">
        <input class="form-control w-50" type="number" min="0" name="number-chars" id="number-chars" required>
      </div>
      <button class="btn btn-primary">Invia</button>
    </form>
  </div>

</body>

</html>