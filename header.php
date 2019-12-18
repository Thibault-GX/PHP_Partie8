<?php
session_start();
setcookie('userName', '', time() + 365*24*3600, null, null, false, true);
setcookie('password', '', time() + 365*24*3600, null, null, false, true);
$_SESSION['firstName'] = 'Thibault';
$_SESSION['lastName'] = 'Grimoux';
$_SESSION['age'] = 27;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>PHP | Partie <?= $partNb ?> | <?= $exerciseNb ?></title>
</head>
<body>
  <div class="container bg-secondary">
    <h1 class="text-center text-dark">PHP | Partie <?= $partNb ?> | <?= $exerciseNb ?></h1>
    <div class="row bg-info">
      <div class="col-2 bg-primary">
        <nav class="nav flex-column font-weight-bold">
          <a class="nav-link text-warning" href="../Ex1/index.php">Ex1</a>
          <a class="nav-link text-warning" href="../Ex2/index.php">Ex2</a>
          <a class="nav-link text-warning" href="../Ex3/index.php">Ex3</a>
          <a class="nav-link text-warning" href="../Ex4/index.php">Ex4</a>
          <a class="nav-link text-warning" href="../Ex5/index.php">Ex5</a>
        </nav>
      </div>
      <div id="exercicesContent" class="d-flex flex-column align-items-center justify-content-center col-10">
