<!DOCTYPE html>
<html>
<head>
	<title>Test git</title>
	<style type="text/css">
		.draggableBox
		{

			position: absolute;
			width: 80px; height: 60px;
			padding-top: 10px;
			text-align: center;
			font-size: 40px;
			background-color: #222;
			color: #CCC;
			cursor: move;
		}
	</style>
</head>
<body>
		<div class="draggableBox">1</div>
		<div class="draggableBox">2</div>
		<div class="draggableBox">3</div>

		<script type="text/javascript">
			(function(){

				var storage ={};

				function addEvent(element,event,func)
				{
					if(element.attachEvent)
					{
						element.attachEvent("on"+event,func);
					}
					else
					{
						element.addEventListener(event,func,true);
					}
				}

				function init()
				{
					var elements=document.getElementsByTagName("div");
					var elementslength=elements.length;

					for(var i=0;i<elementslength;i++)
					{
						if(elements[i].className==="draggableBox")
						{
							addEvent(elements[i],"mousedown",function(e){
								var s = storage;
								s.target = e.target || event.srcElement;
								s.offsetX = e.clientX - s.target.offsetLeft;
								s.offsetY = e.clientY - s.target.offsetTop;
							   
							});

							addEvent(elements[i],"mouseup",function(e){
								storage={};
							});
						}
					}

					addEvent(document,"mousemove",function(e){
						var target=storage.target;
						if(target)
						{
							target.style.top=e.clientY-storage.offsetY+"px";
							target.style.left=eclientX-storage.offsetX+"px";
						}
					});

				}

				init();

			})();
		</script>
</body>
</html>