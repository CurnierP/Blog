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
	
			</body>
<?php
//On se connecte à la base de donnée
             $erreur = false; 
			 
try
				{
					$bdd = new PDO('mysql:host=localhost; dbname=exercice_alternance;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				//Afficher l'erreur
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}
//Test pour voir si les titre / description / image sont valides
				if(
				!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['image']))
				{				
				//Requête pour sélectionner la table actu
					$reponse = $bdd->query('SELECT * FROM actu');		
//On ajoute l'article sur le site et sur la base de données

if ($erreur == false)
					{
						//Ajout dans la base de données des données rentrées précédemment
						$req = $bdd->prepare('INSERT INTO actu (titre, description, image, date) VALUES(?,?,?,NOW())');
						$req->execute(array($_POST['titre'], $_POST['description'], $_POST['image']));
?>
<div class="message">Votre article a bien été ajouter au blog.<br />
<a href="t.php">Retourner à l'accueil</a></div>
<?php
					}	
				}
//Si il y a une case qui est resté vide l'article ne s'ajoute pas				
				else
				{
?>
<div class="message">Tout les champs sont obligatoires.<br />
<a href="ajout.php">Ajouter un article</a></div>
<?php
				}				
?>				
</html>