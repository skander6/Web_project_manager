<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('connexion.php');
// lancement de la requete select
$sql = 'SELECT * FROM portfolio';

$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
?>
<body background="back.jpg">
<table style="background-color:powderblue;" background-co border="1" align="center" width="50%">
<tr>
<th>ID</th>
<th>Titre</th>
<th>Date</th>
<th>Description</th>
<th>Logo</th>
</tr>
<?php

// on recupere le resultat sous forme d'un tableau
while ($data = mysql_fetch_array($req))
{
echo"<tr>";
echo"<td>".$data['id']."</td>";
echo"<td>".$data['titre']."</td>";
echo"<td>".$data['date']."</td>";
echo"<td>".$data['description']."</td>";
echo"<td><img width=50 src=".$data['logo']." /></td>";
?>

<?php
echo"</tr>";

}

mysql_free_result ($req);
mysql_close ();

?>
<caption> Liste des projets </caption>
</table>
</body>
