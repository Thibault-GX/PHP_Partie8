<?php
$partNb = 8;
$exerciseNb ='Exercice 1';
include '../header.php';;
echo('<p>Votre adresse IP est ['.$_SERVER['REMOTE_ADDR'].'].<br>Vous utilisez ['.$_SERVER['HTTP_USER_AGENT'].'].<br>Vous vous trouvez sur le serveur ['.$_SERVER['SERVER_NAME'].'].</p>');
include '../footer.php';