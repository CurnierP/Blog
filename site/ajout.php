<!DOCTYPE html>
<html>
<?php
include('config_2.php');
?>
    <head> 
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8" />
        <title>Blog Alternance</title>
		<link  rel="Stylesheet" type="text/css" href="stylee.css"/>
    </head>
	
    <body>
	
	    <div class="header">
		<!-- faire de la photo un lien clicable pour retourner à l'acceuil. -->
        	<a href="<?php echo $url_home; ?>"><img src="bann_p11.jpg" alt="Blog Alternance" /></a>
		</div>
	<div id="menu">
	<dl>
		
	<!-- Menu déroulant de l'administrateur -->
      <dt>
	  Administrateur
	  </dt>
	  <!-- Sous Menu pour pouvoir gérer les actualités -->
	  <dd>
	     <ul>
		 <li><a href="ajout.php"> Ajouter </a></li>
		 <li><a href="modifier.php"> Modifier </a></li>
		 <li><a href="suppr.php"> Supprimer </a></li>
		 </ul>
	  </dd>
	</dl>
	
	</div>
	
	<div class="content">
	<br><br>Vous désirez écrire un nouvel article:<br><br>
	
	<form method="post" action="ajo.php">
	
		Titre: <input type="text" name="titre"/><br><br>
		
		Article: <br> <textarea name="description" rows="8" cols="45">
		
		</textarea> <br><br>
		
		Lien de l'image: <input type="text" name="image"/><br><br>
		
		<input type="submit" value="Valider"/>
		
	</form>
	</div>
	</body>
</html>