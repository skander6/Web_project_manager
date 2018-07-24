<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("connexion.php");
//echo $_GET['num'].'---'.$_GET['nom'];
$sql = "DELETE FROM portfolio WHERE id='".$_GET['id']."'";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
mysql_close ();
echo "<script language='javascript' type='text/javascript'>alert('Suppression avec succes!')</script>";
echo "<script type='text/javascript'>document.location.replace('affichage_projet_admin.php');</script>";

?>