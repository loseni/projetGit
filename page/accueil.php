<!DOCTYPE html>
<html>
<head>
	<title>application d'AJAX</title>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8">
</head>
<body>

	<p>
		Veillez choisir le fichier dont vous voulez voir le contenu:
	</p>

	<p>
		<input type="button" value="http://localhost:8080/projetGit/page/fichier1.txt">
		<input type="button" value="http://localhost:8080/projetGit/page/fichier2.txt">
	</p>

	<p id="fileContent">
		<span>Aucun fichier charge</span>
	</p>

	<iframe src="fichier2.txt" name="frame" id="frame" onload="trigger()"></iframe>

	<p>dddddddddddddddddddddddddddddddddddddddddddddddddd <br>999999999999999999999999</p>

	<script type="text/javascript">
		
		function trigger()
		{
			var frame=document.getElementById("frame");
				frame= frame.contentDocument|| frame.document;
				alert("page charge");

		}


	</script>

	<script type="text/javascript">
		
		window.top.window.trigger();
	</script>
</body>
</html>