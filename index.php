<!DOCTYPE html>
<html>
<head>
	<title>Test git</title>
	
</head>
<body>
		<div class="container">
			<form method="post" action="">
				<div>
					<span id="erreurNom"></span><br>
					<label for="nom">Nom:</label>
					<input type="text" name="nom" id="nom" style="outline: none;">
				</div>

				<div>
					<span id="erreurPrenom"></span><br>
					<label for="prenom">Prenom:</label>
					<input type="text" name="prenom" id="prenom">
				</div>

				<div>
					<span id="erreurAge"></span><br>
					<label for="age">Age:</label>
					<input type="number" name="nom" id="age">
				</div>

				<div>
					<label>Sexe:  </label>
					<label for="m">M</label>
					<input type="radio" name="sexe" id="m">
					<label for="f">F</label>
					<input type="radio" name="sexe" id="fi">
				</div>

				<div>
					<span id="erreurPseudo"></span><br>
					<label for="pseudo">Pseudo:</label>
					<input type="text" name="pseudo" id="pseudo">
				</div>

				<div>
					<span id="erreurMotDePasse"></span><br>
					<label for="motDePasse">Mot de passe:</label>
					<input type="password" name="motDePasse" id="motDePasse">
				</div>

				<div>
					<span id="erreurConfirmeMotDePasse"></span><br>
					<label for="confirmeMotDePasse">Mot de passe(confirmation):</label>
					<input type="password" name="confirmeMotDePasse" id="confirmeMotDePasse">
				</div>
				<div>
					<span id="erreurPays"></span><br>
					<label for="pays">Pays:</label>
					<select name="pays" id="pays">
						<option>Choisir pays</option>
						<option>cote d'ivoire</option>
						<option>france</option>
						<option>USA</option>
					</select>
				</div>

				<div>
					<label>Souhaitez-vous recevoir des mails ? </label>
					<input type="checkbox" name="recevoirMail">
				</div>

				<div><input type="submit" name="Envoyer" value="Envoyer" id="Envoyer"></div>
			</form>
		</div>

<!--Verification des informations contenu dans le formulaire-->
			
			<script type="text/javascript">
				var btnEnvoyer=document.getElementById("Envoyer");
				//variables pour les erreurs
				var erreurNom=document.getElementById("erreurNom");
				var erreurPrenom=document.getElementById("erreurPrenom");
				var erreurPseudo=document.getElementById("erreurPseudo");
				var erreurAge =document.getElementById("erreurAge");
				var erreurMotDePasse=document.getElementById("erreurMotDePasse");
				var erreurConfirmeMotDePasse=document.getElementById("erreurConfirmeMotDePasse");
				var erreurPays=document.getElementById("erreurPays");

				//variable des champs de saisir
				var nom=document.getElementById('nom'),
					prenom=document.getElementById('prenom'),
					age=document.getElementById('age'),
					pseudo=document.getElementById('pseudo'),
					motDePasse=document.getElementById('motDePasse'),
					confirmeMotDePasse=document.getElementById('confirmeMotDePasse');
					pays=document.getElementById('pays');


				btnEnvoyer.addEventListener(btnEnvoyer,"click" ,function(){

						if(nom.value==="" ||nom.leng)
				},true);
			</script>

</body>
</html>