//la fonction qui permet de charger le fichier choisir pas l'utilisateur
function loadFile(file)
{
	var xhr = new XMLHttpRequest();
	xhr.open('GET',file);
	xhr.onreadystatechange=function()
	{

		//alert(xhr.readyState +" / "+ xhr.status);
				if(xhr.readyState==4 && xhr.status==200)
		{
			document.getElementById('fileContent').innerHTML='<span>'+ xhr.responseText+'</span>';
			//alert("ok");

		}
		else
		{
			alert(xhr.statusTex);
		}
		
	};

		xhr.send(null);
}

//gestion des evenements avec un IEF
(function(){
		var inputs=document.getElementsByTagName('input'),
			inputslength=inputs.length;

			for(var i=0;i<inputslength;i++)
			{
				inputs[i].onclick=function()
				{
					loadFile(this.value);
				}
			}

})();

(function(){
	loadFile("http://localhost:8080/projetGit/page/fichier2.txt");
})();





