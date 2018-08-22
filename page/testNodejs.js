var http=require("http"),
    url=require("url"),
    querystring=require("querystring");

var server=http.createServer(function(req,res){
	var page=url.parse(req.url).pathname;
	var params=querystring.parse(url.parse(req.url).query);
	console.log(page);
	res.writeHead(200,{"Content-Type":"text/plain"});

	if("prenom" in params && "nom" in params)
	{
		res.write("votre nom est "+params["nom"] +" et votre prenom est "+params["prenom"]);
	}
	else
	{
		res.write("vous etes un inconnu pour moi");
	}
	res.end();
});

server.listen("8081");