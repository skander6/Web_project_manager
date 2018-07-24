<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('connexion.php');
// lancement de la requete select
$sql = 'SELECT * FROM portfolio';

$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
?>
<table border="1" align="center">
<tr>
<th>ID</th>
<th>Titre</th>
<th>Date</th>
<th>Description</th>
<th>Logo</th>
<th>Supprimer</th>
<th>Modifier</th>
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
echo"<td>".$data['logo']."</td>";
?>
<td>
<a href="supprimer.php?id=<?php echo $data['id'];?> ">
<button>Supprimer</button>
</a>
</td>

<td>
<a href="modifier.php?id=<?php echo $data['id'];?>&titre=<?php echo $data['titre'];?>&date=<?php echo $data['date'];?>&description=<?php echo $data['description'];?>&logo=<?php echo $data['logo'];?>">
<button>Modifier</button>
</a>
</td>

<?php
echo"</tr>";

}

mysql_free_result ($req);
mysql_close ();

?>
<caption> Liste des projets </caption>
</table>
