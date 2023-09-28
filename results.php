<?php
session_start();
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
  <h1 class="text-sucsess">La tua Passsword è :
    <?php echo $_SESSION['password']; ?>
  </h1>
</body>

</html>