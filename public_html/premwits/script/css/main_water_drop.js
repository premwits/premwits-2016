$(function(){
	ndrops = 1000;
	addDrops();
	moveDrops()
	
})
function addDrops(){
	wW = $(window).width();
	WH = $(window).height();
	for(i=0; i<=ndrops; i++){
		dp = "<li class='d" + i + "''></li>"
		dX =  Math.floor((Math.random()*wW)+1) + "px";
		dY =  Math.floor((Math.random()*WH)+1) + "px";
		dS = Math.floor((Math.random()*1)+1) * 0.3;
		dB = (Math.floor((Math.random()*2)+1) * 0.5)+ "px";
		dO = (Math.floor((Math.random()*2)+1) * 0.5);
		dW = "25px" //Math.floor((Math.random()*30)+30) + "px";
		dH = Math.floor((Math.random()*20)+18) + "px";
		//goingDown = ".d" + Math.floor((Math.random()*100)+50);
		$("ul").append(dp);
		$(".d" + i).css("opacity",dO).css("width",dW).css("height",dH).css({x: dX, y:dY, scale: dS});
	}
	xxx = setInterval(function(){
		moveDrops();	
	},90000);
	
}
function moveDrops(){
	for(i=0; i<=ndrops; i++){
		goingDown = ".d" + Math.floor((Math.random()*100)+1);
		$(goingDown).addClass("move").transition({y:"+=" + Math.floor((Math.random()*40)+1) + "px"},Math.floor((Math.random()*1000)+800), "ease");
	};
	/*$("ul li").each(function(i){
		dO = (Math.floor((Math.random()*2)+1) * 0.5);
		$(this).transition({opacity: dO, delay:(i*10)},50);
	})*/
	
}
//.css("-webkit-filter","blur(" + dB +")")