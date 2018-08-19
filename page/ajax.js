//la fonction qui permet de charger le fichier choisir pas l'utilisateur
function loadFile(file)
{
	var xhr = new XMLHttpRequest();
	xhr.open("GET",file);
	xhr.onreadystatechange=function()
	{
		if(xhr.readyState===xhr.DONE && xhr.status===200)
		{
			document.getElementById('fileContent').innerHTML="<span>"+xhr.responseText+"</span>";

		}
	};

		xhr.send(null);
}



