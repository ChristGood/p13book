<!doctype html>
<html lang="fr">
<head>
<link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <title>Bienvenue sur le réseau social de l'Université Paris 13 !</title>
</head>
<body>
  <header id="banniere">
  	<img src="" alt="logo"/>
  	<span>P13Book</span>
  </header>
  <section id="conteneur">
  
	  <section id="left">
	  	<div>
			<p>Connexion</p>
			<form method="post" action="connexion.php">
				 <input type="text" name="id" placeholder="Identifiant"><br>
				 <input type="text" name="pwd" placeholder="Mot de passe"><br>
				 <input type="submit" name="valider" value="Connexion">
			</form>
			<p><a href="oublie.php">Mot de passe oublié ?</a></p>
		</div>
	  </section>
	  <section id="right">
		<div>
			<p>Pas encore inscrit ?</p>
			<form method="post" action="inscription.php">
			  <input type="text" name="prenom" placeholder="Nom"><br>
			  <input type="text" name="nom" placeholder="Prenom"><br>
			  <input type="email" name="email" placeholder="E-mail"><br>
			  <input type="text" name="genre" placeholder="Genre"><br>
			  <input type="text" name="anniv" placeholder="Date de naissance"><br>
			  <input type="text" name="lieuN" placeholder="Lieu de naissance"><br>
			  <input type="text" name="situation" placeholder="Situation"><br>
			  <input type="tel" name="tel" placeholder="Téléphone"><br>
			  <input type="submit" name="valider" value="Inscription">
			</form>
		</div>
	  </section>
  </section>
  <footer>
    <p>Florian Choiselle, Christopher Goodman</p>
  </footer>
</body>
</html>
