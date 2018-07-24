<html>
<head>
<title>Mise à jour etudiant</title>
</head>
<body>
<form action = "update.php" method="post">
<input type="hidden" name = "id" value="<?php echo $_GET['id']; ?>"><br />
<pre>
titre:        <input type = "text" name = "titre" value="<?php echo $_GET['titre']; ?>"><br />
date :        <input type = "text" name = "date" value="<?php echo $_GET['date']; ?>"><br />
description:  <input type = "text" name = "description" value="<?php echo $_GET['description']; ?>"><br />
logo:         <input type = "text" name = "logo" value="<?php echo $_GET['logo']; ?>"><br />
                  <input type = "submit" value = "Envoyer">
                  <input type="reset" value="Refresh">
</pre>
</form>
</body>
</html>
