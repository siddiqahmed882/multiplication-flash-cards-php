<?php
  // returns empty if there is no number.
  $number = filter_input(INPUT_GET, 'num', FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Multiplication Flash Cards</title>
</head>

<body>
  <?php include('./src/view/header.php') ?>
  <?php 
    if(!empty($number)) include('./src/view/results.php');
    else include('./src/view/form.php');
  ?>
  <?php include('./src/view/footer.php') ?>
</body>

</html>