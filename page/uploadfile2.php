<!DOCTYPE html>
<html>
<head>
	<title>upload file with progress bar</title>
</head>
<body>
		<input type="file" id="file">
		<progress id="progress"> </progress>

		<script type="text/javascript">
			
			var fileInput=document.querySelector("#file"),
				progress=document.querySelector("#progress");

				fileInput.onchange= function()
				{
					var xhr=new XMLHttpRequest();
						xhr.open("post","http://localhost:8080/projetGit/page");

						xhr.upload.onprogress=function(e)
						{
							progress.value=e.loaded;
							progress.max=e.total;
						};

						xhr.onload= function()
						{
							alert(xhr.status);
						};

					var form=new FormData();
						form.append("file",fileInput[0]);
						xhr.send(form);
				};
		</script>
</body>
</html>