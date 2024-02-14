<?php
define("SERVEUR", "localhost");
define("BASE", "nassim");
define("USER", "root");
define("MDP", "");


$connection=mysqli_connect(SERVEUR,USER, MDP,BASE) or die("Erreur".mysqli_error());

?>