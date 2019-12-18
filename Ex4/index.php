<?php
$_COOKIE['userName'] = '';
$_COOKIE['password'] = '';
$partNb = 8;
$exerciseNb = 'Exercice 4';
include '../header.php';
?>
<form method="post" action="index.php">
    <label for="userName">Choisissez votre pseudo :</label>
    <div class="w-100 p-1"></div>
    <input id="userName" type="text" name="userName" required/>
    <div class="w-100 p-2"></div>
    <label for="password">Choisissez votre mot de passe :</label>
    <div class="w-100 p-1"></div>
    <input id="password" type="password" name="password" required/>
    <div class="w-100 p-1"></div>
    <input type="submit" value="Envoyer"/>
</form>
<?php
if ((isset($_POST['userName'])) & (isset($_POST['password']))) {
    $_COOKIE['userName'] = $_POST['userName'];
    $_COOKIE['password'] = $_POST['password'];
    var_dump($_COOKIE);
    echo $_COOKIE['userName'].' '.$_COOKIE['password'];
}
include '../footer.php';

include '../footer.php';