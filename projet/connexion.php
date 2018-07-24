<?php
$base=mysql_connect ('127.0.0.1', 'root', '') or die("erreur de connexion au serveur");
mysql_select_db ('skander',$base) or die("erreur de connexion a la base") ;
?>