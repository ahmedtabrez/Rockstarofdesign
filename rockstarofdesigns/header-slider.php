<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.min.js"></script>
<script>
var front=1;
var day=0;
setInterval(function(){slidertimer()},3000);
setInterval(function(){backtimer()},10000);
$(document).ready(function(){
var headerleft= $(".header-background").css("left");
		headerleft=headerleft.replace("px","");
var mountainleft= $(".mountain").css("left");
		mountainleft=mountainleft.replace("px","");
var slider1right= $(".slider1-right").css("right");
		slider1right=slider1right.replace("px","");

	backtimer();
	$(document).mousemove(function(event){
		var tempslider1right=$(".slider1-right").css("right");
		

		//$(".slider1").hide();
		//$(".slider2").hide();
		
		$("h3").text(event.pageX+"  ");
		$(".header-background").css("left","-"+((event.pageX*0.012)-(headerleft)));

		$(".mountain").css("left","-"+((event.pageX*0.039)-(mountainleft)));
		
		if(front==1){
			$(".slider1-right").css("right","-"+((event.pageX*0.05)-(slider1right)));
		}
		else
			if(front==2){
			$(".slider2-right").css("right","-"+((event.pageX*0.05)-(slider1right)));
			}
	});


});


function slidertimer(){0
	if(front==1)
	{
		front=0;
		
		//out
		$(".slider1-left").animate({left:"-1255px"},700);
		$(".slider1-right").animate({right:"1255px"},700);
		$(".slider-maincontent").animate({right:"1255px"},700);	
		
		//in
		$(".slider2-right").css("right","-100%");
		$(".slider2-maincontent").css("right","-100%");
		$(".slider2-left").css("left","150%");

		$(".slider2-left").animate({left:"2%"},700);
		$(".slider2-right").animate({right:"1%"},700);
		$(".slider2-maincontent").animate({right:"0px"},700);
		setTimeout(function(){front=2;},700);
	}
	else
	if(front==2){
		front=0;
		
		//out
		$(".slider2-left").animate({left:"-1255px"},700);
		$(".slider2-right").animate({right:"1255px"},700);
		$(".slider2-maincontent").animate({right:"1255px"},700);	

		//in
		$(".slider3").css("left","300%");

		$(".slider3").animate({left:"0%"},700);
		setTimeout(function(){front=3;},700);
	}
	else
		if(front==3){
			front=0;

		$(".slider3").animate({left:"-100%"},700);
			//in
		$(".slider1-right").css("right","-100%");
		$(".slider-maincontent").css("right","-100%");
		$(".slider1-left").css("left","150%");

		$(".slider1-left").animate({left:"2%"},700);
		$(".slider1-right").animate({right:"1%"},700);
		$(".slider-maincontent").animate({right:"0px"},700);
		setTimeout(function(){front=1;},700);
		}
}
function backtimer(){
	if(day==1)
	{
		$(".header-background").css("background","url('img/background.jpg')");
		$(".sun").css("background-color","orange");
		day=0;
	}	
	else{
		$(".header-background").css("background","url('img/sky.jpg')");
		$(".sun").css("background-color","rgb(247, 199, 11)");
		day=1;
	}
	
}
</script>
</head>
<body>
<div class="home-header-container">
<div class="header-background">	</div>
<div class="mountain"></div>

<div class="sun"></div>
<div class="slider">
	<div class='slider1'>
		<div class="slider1-left">
			<span>Web <br> Hosting</span>
		</div>
		<div class="slider1-right"></div>
		<div class="slider-maincontent">
			<div class="slider-content">
				<h1>Buy Web Hosting</h1>
				<ul>
					<li>Unlimited Domains, Email &amp; Space</li>
					<li>99.9% Uptime Guarantee</li>
					<li>Reliable &amp; Secure</li>
					<li>Powered by cPanel/Plesk</li>						
				</ul>
				<p class="plist">Starting @ Rs 59/Month</p>
				<a class="txt-button" href="">View Plans</a>
			</div>
		</div>
	</div>

	<div class='slider2'>
		<div class="slider2-left">
			<span>Domain <br> Hosting</span>
		</div>
		<div class="slider2-right"></div>
		<div class="slider2-maincontent">
			<div class="slider-content">
				<h1>Buy Domain Name</h1>
				<ul>
					<li>Privcy Protection</li>
					<li>Free Email Account</li>
					<li>Domain Theft Protection</li>						
				</ul>
				<p class="plist">Starting @ Rs 199/Month</p>
				<a class="txt-button" href="">View Plans</a>
			</div>
		</div>
	</div>
<div class="slider3">
	<div class="slider3heading" style="width:100%;text-align:center">
		<h2>
			<span class="lite-orange">FREE</span> Add-ons with every Domain Name!</h2>
	</div>
	<div class="s3left">
		<div class="s3mail"></div>
		<div class="slider-content">
				<h1>Free Email Account</h1>
			</div>
	</div>
	<div class="s3mid">
		<div class="s3lock"></div>
		<div class="slider-content">
				<h1>Privacy Protection</h1>
				
				
			</div>
	</div>
	<div class="s3right">
		<div class="s3panel"></div>
		<div class="slider-content">
				<h1>Easy Control Panel</h1>	
			</div>
	</div>
	<div class="slider3button">
		<a class="txt-button" href="">Get It Now</a>
	</div>
</div>


</div>
<div class=arrow-container>
	<div class="bottom-arrow"></div>	
</div>
<div class="left-arrow"></div>
<div class="right-arrow" onclick="slidertimer()"></div>
</div>
<h3>hello</h3>
</body>
</html>