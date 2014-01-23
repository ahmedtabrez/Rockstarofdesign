<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link media="Screen" href="css/superdupersite.css" type="text/css" rel="stylesheet" />
<link media="Screen" href="css/stylev4.css" type="text/css" rel="stylesheet" />
<link media="Screen" href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="style.css">
<link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" 
		href="css/mobile.css" type="text/css" rel="stylesheet" />


<script type="text/javascript" src="js/jquery.innerfade.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!--
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
-->
<link rel="stylesheet" type="text/css" href="css/stylev4.css">

<script>
var front=1;
var day=0;
setInterval(function(){slidertimer()},3000);
setInterval(function(){backtimer()},10000);
$(window).resize(function() {
    var bodyheight = $(window).height();
    $(".home-header-container").height(bodyheight);
    //alert(bodyheight);
});
$(document).ready(function(){

	 var bodyheight = $(window).height();
    $(".home-header-container").height(bodyheight);
var headerleft= $(".header-background").css("left");
		headerleft=headerleft.replace("px","");
var mountainleft= $(".mountain").css("left");
		mountainleft=mountainleft.replace("px","");
var slider1right= $(".slider1-right").css("right");
		slider1right=slider1right.replace("px","");

	backtimer();
	$(document).mousemove(function(event){
		var tempslider1right=$(".slider1-right").css("right");
		 
		 $('.bottom-arrow').localScroll({duration:800});

		//$(".slider1").hide();
		//$(".slider2").hide();
		
		//$("h3").text(event.pageX+"  ");
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
	$(".bottom-arrow").click(function(){
		//$(".home-header-container").hide(1000);
		 $('html,body').animate({scrollTop:$(".pagelink").offset().top}, 1000);
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
				<a class="txt-button-home" href="web-hosting/index.php">View Plans</a>
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
				<a class="txt-button-home" href="domain-registration/index.php">View Plans</a>
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
		<a class="txt-button-home" href="domain-registration/free-with-domain-registration.php">Get It Now</a>
	</div>
</div>


</div>
<div class=arrow-container>
	<div class="bottom-arrow"></div>
</div>
<div class="left-arrow"></div>
<div class="right-arrow" onclick="slidertimer()"></div>
</div>
<a name="page" class="pagelink"></a>
<div id="page-header">
	<div id="header-wrapper">

<div class="brand-shop" id="brand-shop">
<h1 id="branding">
    <span class="logo-cont">
    <span></span>
    <a href="index.php"><img src="img/logo.gif" alt=""></a>
    </span>
</h1>

<div id="shopping-cart" class="shop-cart">

	<strong class="user-name">Hello <span id="dashboard-username"></span>!&nbsp; </strong>
	    
			<span class="dash-login"><a href="../login.php">Login / Sign Up</a></span>
		
	<hr>
    <span class="cart-items"><strong><span id="dashboard-cartItemCount">0</span></strong> Item(s) in <a href="/checkout.php" id="headerCartLink">Cart</a></span>
	<a href="/checkout.php" class="button-checkout" id="headerCheckoutBtn">Check Out</a>
</div>

<input type="hidden" id="signout1" value="Are you sure you want to signout?">
<input type="hidden" id="signout2" value="You have some item(s) in your shopping cart. All these items will be emptied and you will have to start all over again. Are you sure?">
<div class="clear"></div>
</div>


<!--primary nav-->
<div id="primary-nav">
	<div class="nav">
			<ul class="navigation">
				<li class="first">
					<a href="index.php" id="menu-homesection">
						<span class="menu-left"></span>
						<span class="menu-mid">Home</span>
						<span class="menu-right"></span>
					</a>
				</li>
				<li class='active' id="domain-list">
					<a href="domain-registration/index.php" id="menu-domainsection">
						<span class="menu-left"></span>
						<span class="menu-mid">Domains</span>
						<span class="menu-right"></span>
					</a>
					<div class="sub domains-block" id="subn-1">
                    	<div class="nav-heading">
                        	<div class="title d-ic-1"><span class="menu-ic dreg"></span>Registration</div>
                            <div class="title d-ic-2"><span class="menu-ic tran"></span>Transfer</div>
                            <div class="title d-ic-3"><span class="menu-ic addo"></span>Addons</div>
							<div class="clear"></div>
                        </div>
						<ul>
						     <li class=""><a href="domain-registration/index.php">Register a Domain<span class="nav-note">Book your domain here</span></a></li>
                            <li class=""><a href="domain-registration/bulk-domain-registration.php">Bulk Domain Registration<span class="nav-note">Bulk Registrations at Lower Rates</span></a></li>
                            
                            <li class=""><a href="domain-registration/premium-domain.php">Premium Domains<span class="nav-note">Register catchy, popular Domain Names</span></a></li>
                            
                            <li class=""><a href="domain-registration/index.php?idn">IDN Domain Registration<span class="nav-note">Book your internationalized domains here</span></a></li>
                            <li class=""><a href="domain-registration/domain-registration-price.php">View Domain Pricing<span class="nav-note">Compare pricing across 50+ extensions</span></a></li>
                          </ul>
                          <ul>  
                            <li><a href="domain-registration/transfer.php">Transfer your Domain<span class="nav-note">Move in your existing Domains</span></a></li>
							<li><a href="domain-registration/bulk-domain-transfer.php">Bulk Domain Transfer<span class="nav-note">Save by moving domains in bulk</span></a></li>                           
                            </ul>
                            <ul>
                            <li><a href="domain-registration/free-with-domain-registration.php">Free with Every Domain<span class="nav-note">Free Email, Privacy Protection and more</span></a></li>
                            <li><a href="domain-registration/domain-name-suggestion-tool.php">Name Suggestion Tool <span class="nav-note">Get help in picking a domain</span></a></li>  
							<li><a href="domain-registration/domain-whois-lookup.php">Whois Lookup<span class="nav-note">Perform a Whois Lookup</span></a></li>
						</ul>
						<div class="btm-bg"></div>
					</div>
				</li>
                
				<li class="box-2" id="hosting-list">
					<a href="web-hosting/index.php" id="menu-hostingsection">
						<span class="menu-left"></span>
						<span class="menu-mid">Web Hosting</span>
						<span class="menu-right"></span>
					</a>
					<div class="sub" id="subn-2">
						<ul>
                            
                                <li class="nav-ic-1"><a href="web-hosting/index.php"><span class="menu-ic lnx"></span>Linux Hosting <span class="nav-note">cPanel, PHP, Apache and more</span></a></li>
                            
                            
                                <li class="nav-ic-2"><a href="web-hosting/windows-hosting.php"><span class="menu-ic win"></span>Windows Hosting <span class="nav-note">Plesk, ASP, IIS and more</span></a></li>
                            
                            
                                <li class="nav-ic-5"><a href="reseller-hosting.php"><span class="menu-ic rh"></span>Linux Reseller Hosting<span class="nav-note">Start your Hosting Business here</span></a></li>
                            
                            
                                <li class="nav-ic-2"><a href="windows-reseller-hosting.php"><span class="menu-ic rhw"></span>Windows Reseller Hosting<span class="nav-note">Start your Windows Hosting Business here</span></a></li>
                            
						</ul>
						<div class="btm-bg"></div>
					</div>
				</li>
                
                
	                <li class="">
		                <a href="vps-hosting.php" id="menu-vpssection">
	                        <span class="menu-left"></span>
	                        <span class="menu-mid">VPS</span>
	                        <span class="menu-right"></span>
	                    </a>
		            </li>
                
                
				<li class="box-2" id="email-hosting-list">
					<a href="web-hosting/email-hosting.php" id="menu-emailsection">
						<span class="menu-left"></span>
						<span class="menu-mid">Email</span>
						<span class="menu-right"></span>
					</a>
                    <div class="sub">
                        <ul>
                            
                                <li class="nav-ic-2">
                                    <a href="web-hosting/email-hosting.php"><span class="menu-ic bu-email"></span>Business Email<span class="nav-note">Simple and Powerful Webmail</span></a>
                                </li>
                            
                            
                                <li class="nav-ic-1">
                                    <a href="web-hosting/enterprise-email-hosting.php"><span class="menu-ic ee-email"></span>Enterprise Email <span class="nav-note">Advanced Corporate-Class Email</span></a>
                                </li>
                                                        
                        </ul>
                        <div class="btm-bg"></div>
                    </div>
                </li>
                
                
				<li class="">
					<a href="digital-ssl-certificate/index.php" id="menu-digicertsection">
						<span class="menu-left"></span>
						<span class="menu-mid">SSL</span>
						<span class="menu-right"></span>
					</a>
				</li>
                
                
				<li class="">
					<a href="website-design/index.php" id="menu-sitebuilder">
						<span class="menu-left"></span>
						<span class="menu-mid">Website Builder</span>
						<span class="menu-right"></span>
					</a>
				</li>
                
				<li class="">
					<a href="support/contact-us.php">
						<span class="menu-left"></span>
						<span class="menu-mid">Support</span>
						<span class="menu-right"></span>
					</a>
				</li>
			</ul>
		</div>
	<span class="l-corner"></span>
	<span class="r-corner"></span>	
</div>


<script type="text/javascript">

$(".navigation li").hover(
  function () {
    $(this).addClass("nav-hover");	
  },
  function () {
    $(this).removeClass("nav-hover");
  }
);

</script>
<div class="mobile-header-nav">
<div class="mobile-nav" id="mobile-nav" onclick="mobile_nav_onclick()" >
	<span class="menu-toggle">Menu</span>
	<span class="three-toggle" id="three-toggle">≡ </span>
</div>

<div class="mobile-nav-clicked" id="mobile-nav-clicked">
	<div onclick="mobile_nav_onclicked()" >
	<span class="menu-toggle"  >Menu</span>
	<span class="three-toggle" id="three-toggle">≡ </span>
</div>
	<br>
	<ul class='mobile-nav-list'>
		<a href="index.php"><li>Home</li></a>
		<li onclick="expand_domain();">Domains<span class="menu-arrow"> > </span></li>
			<ul class="sub_menu" id="domain_menu">
				<a href="domain-registration/index.php"><li>Register a Domain</li></a>
				<a href="domain-registration/bulk-domain-registration.php"><li>Bulk Domain Registration</li></a>
				<a href="domain-registration/premium-domain.php"><li>Premium Domains</li></a>
				<a href="domain-registration/index.php?idn"><li>IDN Domain Registration</li></a>
				<a href="domain-registration/domain-registration-price.php"><li>View Domain Pricing</li></a>
				<a href="domain-registration/transfer.php"><li>Transfer your DomainTransfer your Domaim</li></a>
				<a href="domain-registration/bulk-domain-transfer.php"><li>Bulk Domain Transfer</li></a>
				<a href="domain-registration/free-with-domain-registration.php"><li>Free with Every Domain</li></a>
				<a href="domain-registration/domain-name-suggestion-tool.php"><li>Name Suggestion Tool</li></a>
				<a href="domain-registration/domain-whois-lookup.php"><li>Whois Lookup</li></a>
			</ul>
		<li onclick="expand_web_hosting();">Web Hosting<span class="menu-arrow"> > </span></li>
			<ul class="sub_menu" id="web_hosting_menu">
				<a href="web-hosting/index.php"><li>Linux Hosting</li></a>
				<a href="web-hosting/windows-hosting.php"><li>Windows Hosting</li></a>
				<a href="reseller-hosting.php"><li>Linux Reseller Hosting</li></a>
				<a href="windows-reseller-hosting.php"><li>Windows Reseller Hosting</li></a>
			</ul>
		<a href="vps-hosting.php"><li>VPS</li></a>
		<li onclick="expand_email_hosting();">Email<span class="menu-arrow"> > </span></li>
			<ul class="sub_menu" id="web_email_menu">
				<a href="web-hosting/email-hosting.php"><li>Business Email</li></a>
				<li><a href="web-hosting/enterprise-email-hosting.php">Enterprise Email</li></a>
			</ul>
		<a href="digital-ssl-certificate/index.php"><li>SSL</li></a>
		<a href="website-design/index.php"><li>Website Builder</li></a>
		<a href="support/contact-us.php"><li>Support</li></a>
	</ul>

</div>
</div>
<script type="text/javascript">

function mobile_nav_onclick(){
	document.getElementById('mobile-nav-clicked').style.display='block';
	document.getElementById('mobile-nav-clicked').style.height='auto';
	document.getElementById('mobile-nav').style.display='none';	

}

function mobile_nav_onclicked(){
	document.getElementById('mobile-nav').style.display='block';	
	document.getElementById('mobile-nav-clicked').style.display='none';
	document.getElementById('domain_menu').style.display='none';
document.getElementById('web_hosting_menu').style.display='none';
document.getElementById('web_email_menu').style.display='none';
}
function expand_domain(){
	document.getElementById('domain_menu').style.display='block';
	document.getElementById('mobile-nav-clicked').style.height='auto';
}
function expand_web_hosting(){
	document.getElementById('web_hosting_menu').style.display='block';
	document.getElementById('mobile-nav-clicked').style.height='auto';
}
function expand_email_hosting(){
	document.getElementById('web_email_menu').style.display='block';
	document.getElementById('mobile-nav-clicked').style.height='auto';
}

</script>


	</div>
</div>
