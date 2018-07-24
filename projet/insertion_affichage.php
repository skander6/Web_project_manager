<html>
<body>
<link rel="stylesheet" type="text/css" href="main.css">
<div>
<form  method="POST" action="">
<pre>
<label><strong><font size=5>titre : </strong></font>       </label><input type="text" name="titre" size=50 placeholder="  entrer le titre ...." />
</br></br>
<label><strong><font size=5>date : </strong></font>         </label><input type="text" name="date" placeholder="  entrer la date ...." size=50 />
</br></br>
<label><strong><font size=5>description :</strong></font></label><input type="text" name="description" placeholder="  entrer la description ...." size=50 />
</br></br>
<label><strong><font size=5>logo(lien) :</strong></font> </label> <input type="text" name="logo" placeholder="  entrer le lien du logo ...." size=50 />
</pre>
<button name="submit" type="submit" value="submit" id="contact-submit" >Submit</button>
</form>
</div>
</body>
</html>
<?php
include("connexion.php");
if(isset($_POST["titre"]) ){
$titre=$_POST["titre"];}
if(isset($_POST["date"]))
{$date=$_POST["date"];}
if(isset($_POST["description"]))
{$description=$_POST["description"];}
if(isset($_POST["logo"]))
{$logo=$_POST["logo"];}
if(!empty($_POST["submit"]))
{$sql = "INSERT INTO portfolio values('','$titre','$date','$description','$logo')";
$req = mysql_query($sql) or die('Erreur d insertion');}
?>