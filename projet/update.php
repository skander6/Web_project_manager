<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('connexion.php');
if(isset($_POST["titre"]) ){
$titre=$_POST["titre"];}
if(isset($_POST["date"]))
{$date=$_POST["date"];}
if(isset($_POST["description"]))
{$description=$_POST["description"];}
if(isset($_POST["logo"]))
{$logo=$_POST["logo"];}
$id=$_POST['id'];
$sql="update portfolio set titre='".$titre."', date='".$date."',description='".$description."',logo='".$logo."' where id='".$id."'";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
//mysql_free_result ($req);
mysql_close ();
echo "<script language='javascript' type='text/javascript'>alert('Mise a jour avec succes!')</script>";
echo "<script type='text/javascript'>document.location.replace('affichage_projet_admin.php');</script>";



?>