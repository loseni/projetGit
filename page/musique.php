<!DOCTYPE html>
<html>
<head>
	<title>Play music</title>

</head>
<body>
	<?php 

		function age($dateNaissance)
		{
			$toDay=time();
			$dateNai=strtotime($dateNaissance);
			$ag = $toDay - $dateNai;
			$ag=floor($ag/60/60/24/365);

			return $ag;
		}
		

		$nom=urlencode("dembele");
		$prenom=urlencode("loseni");
		$lien="../index.php?nom=$nom&prenom=$prenom";
		echo "<a href='$lien'>lien</a>";

		echo "<input type='image' src='image.jpg' alt='envoyer' name='envoyer'>";
		var_dump(filter_var(120,FILTER_VALIDATE_INT,array("options"=>
					array("min_range"=>10,"max_range"=>20))));

		function deconnecteHTTP() {
			$titre = 'Authentification';
			header('WWW-Authenticate: Basic realm="'.$titre.'"');
			header('Unauthorized', TRUE, 401);
			exit ;
		}

		

	?>


</body>
</html>