<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="keywords" content="domain, domain name registration, web hosting, website builder, email hosting, com,net, org domain names, website design," />
    <meta name="description" content="Domain names & web hosting company offers domain name registration, web hosting, web design and website builder tools cheap." />
     
<title>Website Builder</title>  

 <link media="Screen" rel="stylesheet" type="text/css" href="../css/style.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/superdupersite.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/hosting.css">
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/stylev4.css" />
    <link media="handheld, only screen and (max-width: 580px), only screen and (max-device-width: 580px)" 
        href="../css/mobile.css" type="text/css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    


</head>
<body>
<?php
include 'header.php'
?>


<div id="page-container">
	<div id="page-wrapper">
		


<div id="single-hosting-plan">

	

<div class="row-gray row-indent">
<h2 class="ui-heading">Easy to use <em>Website Builder</em></h2>	

<div id="plans-masthead">
	<img style="top:-15px;" class="banner-img banner-img-web-design" src="../img/thumb-builder.png">
	<ol>
		<li>Choose from 175 themes &amp; 85,000 images</li>
		<li>Easy Editing with a Drag &amp; Drop Interface</li>
		<li>Go Live Instantly -  Publish your website in minutes</li>
	</ol>
	<a class="txt-button" href="" target="_blank">View Demo</a>
</div>
</div>

	
	<div class="row-white row-indent">
<h2 class="ui-subheading" id='plan-select-h2-web-design'>Select Your <em>Plan</em></h2>


<div id="plans-container">
	<a name="plans"></a>
	<div class="plans-columns site-builder">
      
    <ul class="plan-list plan-featured">
        <form name="sitebuilderplan" action="" id="sitebuilderplan_50_page_plan" method="POST">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="type" id="type_id" value="sblite">
            <input type="hidden" name="location" value="us">
            <input type="hidden" name="planid" id="planid_id" value="50_page_plan">
            <input type="hidden" name="domain_name" id="domain_name_id" value="">
            <input type="hidden" name="orderid" value="">
            <input type="hidden" name="upgrade" value="">
            <input type="hidden" name="upgradeprice" value="">
            <input type="hidden" name="old_plan_name" value="">

            <li class="p-name"><span class="pl-title">50 Page Plan<b></b></span></li>
            <li class="p-pricing"><small class="p-currency"><span class="WebRupee">Rs.</span></small> 238.80 <small class="p-duration">/MO</small></li>
            <li class="p-feat"><strong>50 Pages</strong></li>
            <li class="p-feat">Web Space - 5 GB</li>
            <li class="p-feat">Data Transfer - Unlimited</li>
            <li class="p-feat">Email Accounts - Unlimited</li>
            <li class="p-dropdown">
                <select name="duration" id="50_page_plan_duration">
                    
                        <option value="12">
                            1  Year at Rs. 238.80/month
                        </option>
                </select>
            </li>
            <li class="p-button"><a class="txt-button" onclick="_gaq.push(['s2._trackPageview', 'Buy-50-Page']); populate_hostingplan_with_domain_form('50_page_plan', 'sblite');return false;">Buy Now</a></li>
        </form>
        <span class="p-cutout"></span>
    </ul>
	</div>
</div>

</div>

<div id="modal_div" class="modal-wrapper" style="display:none">
    <div class="modal_overlay" style="width: 1014px; height: 2372px;">
    </div>
    <div id="select_domain" class="wide_modal modal_content" >
        <div class="hosting-modal" id="step1-select-domain">
	<h1 class="hosting-modal-title">Select a Domain Name</h1>
	<a href="#" onclick="closeModal(); return false;" class="modal_close">Close [x]</a>
	<div id="hosting_modal_body_id" class="hosting-modal-body">

		<!-- Use Exisiting domain -->
		<div class="form-field-wrapper">
			<form onsubmit="return continue_to_add_order();">
				<label class="frm-label" for="existing-domain">I have an existing domain name</label>
				              	
                <input type="text" id="existing_domain_name" class="wide-textbox textbox frm-field" name="domain_name" value="www.">
				<button id="exiting_domain_submit" class="uiButton" name="submit" type="submit"><span><span>Continue</span></span></button>
				

				<div id="error" style="display: none"></div>
			</form>
		</div>
		<div style="margin-right:15px;" class="or-seperator"><p>OR</p></div>
		<!-- /Use Exisiting domain -->

		<!-- Register New domain -->
		<div>
			<form name="hostingplan_with_domain" id="hostingplan_with_domain" action="../domain-registration/index.php" method="POST" onsubmit="return check_domainname_submit();">
				<input type="hidden" name="action" value="check_availability">
				<input type="hidden" name="sitebuilder_add" value="true">
				<input type="hidden" name="type" value="sblite">
				<input type="hidden" name="location" value="us">
				<input type="hidden" id="planid_id" name="planid" value="50_page_plan">
				<input type="hidden" name="duration" value="12">
                <input type="hidden" name="no-of-accounts" value="">
                <input type="hidden" name="email_account_range" value="">
				<div class="form-field-wrapper">
					<label class="frm-label" for="new-domain">I want to register a new domain name</label>
					<input type="text" id="new-domain-name" class="textbox frm-field" name="txtDomainName">
					
					<select class="selectlist frm-select" name="tld[]">
						
						<option value="com">.com</option>
						<option value="in">.in</option>
						<option value="pro">.pro</option>
						<option value="net">.net</option>
						<option value="org">.org</option>
						<option value="mobi">.mobi</option>
						<option value="info">.info</option>
						<option value="asia">.asia</option>
						<option value="us">.us</option>
						<option value="name">.name</option>
						<option value="tel">.tel</option>
						<option value="co.in">.co.in</option>
						<option value="tv">.tv</option>
						<option value="me">.me</option>
						<option value="ws">.ws</option>
						<option value="bz">.bz</option>
						<option value="cc">.cc</option>
						<option value="me.uk">.me.uk</option>
						<option value="org.uk">.org.uk</option>
						<option value="net.in">.net.in</option>
						<option value="biz">.biz</option>
						<option value="org.in">.org.in</option>
						<option value="ind.in">.ind.in</option>
						<option value="firm.in">.firm.in</option>
						<option value="gen.in">.gen.in</option>
						<option value="mn">.mn</option>
						<option value="us.com">.us.com</option>
						<option value="eu.com">.eu.com</option>
						<option value="uk.com">.uk.com</option>
						<option value="uk.net">.uk.net</option>
						<option value="gb.com">.gb.com</option>
						<option value="gb.net">.gb.net</option>
						<option value="co.uk">.co.uk</option>
						<option value="de.com">.de.com</option>
						<option value="cn.com">.cn.com</option>
						<option value="qc.com">.qc.com</option>
						<option value="kr.com">.kr.com</option>
						<option value="ae.org">.ae.org</option>
						<option value="br.com">.br.com</option>
						<option value="hu.com">.hu.com</option>
						<option value="jpn.com">.jpn.com</option>
						<option value="no.com">.no.com</option>
						<option value="ru.com">.ru.com</option>
						<option value="sa.com">.sa.com</option>
						<option value="se.com">.se.com</option>
						<option value="se.net">.se.net</option>
						<option value="uy.com">.uy.com</option>
						<option value="za.com">.za.com</option>
						<option value="co">.co</option>
						<option value="gr.com">.gr.com</option>
						<option value="co.nz">.co.nz</option>
						<option value="net.nz">.net.nz</option>
						<option value="org.nz">.org.nz</option>
						<option value="com.co">.com.co</option>
						<option value="net.co">.net.co</option>
						<option value="nom.co">.nom.co</option>
						<option value="ca">.ca</option>
						<option value="de">.de</option>
						<option value="es">.es</option>
						<option value="com.au">.com.au</option>
						<option value="net.au">.net.au</option>
						<option value="xxx">.xxx</option>
						<option value="ru">.ru</option>
						<option value="com.ru">.com.ru</option>
						<option value="net.ru">.net.ru</option>
						<option value="org.ru">.org.ru</option>
						<option value="eu">.eu</option>
						<option value="nl">.nl</option>
						<option value="cn">.cn</option>
						<option value="com.cn">.com.cn</option>
						<option value="net.cn">.net.cn</option>
						<option value="org.cn">.org.cn</option>
						<option value="pw">.pw</option>
						<option value="com.de">.com.de</option>
						<option value="in.net">.in.net</option>
						<option value="co.de">.co.de</option>
						<option value="la">.la</option>
					</select>
					<button id="new_submit" class="uiButton" type="submit" name="submit"><span><span>Search</span></span></button>
                    <div id="domain_error" class="error" style="display: none"></div>
				</div>
				</form>
        </div>
        
				</div>

				</div>



				<script type="text/javascript">

					function continue_to_add_order()
					{
						$("#exiting_domain_submit").attr("disabled","disabled");
						$("#exiting_domain_submit").text("Please Wait...");

						
							}
						});
						return false;
					}

					
					
				</script>
    </div>

    
</div>
<script type="text/javascript">
	$('.modal_overlay').click(function(){
	    closeModal();
	});
</script>

	
	<div class="div-spacer"></div>
<div class="div-spacer"></div>

<div class="switch-nav">
    <div class="tab-wrp tab1" id="tabs">
        <div class="first" id="felist"><a class="fea-active">Features</a></div>
        <div class="last" id="faqlist"><a>FAQs</a></div>
    </div>
</div>
<!-- Features/Faq -->
<div class="features-wrp row-indent" id="fea-list">

    <!-- Features -->
    <div class="features lfloat">

        <!-- list -->
        <div class="list-cont ic-diy-1 first">
            <h3>Easy to Use Visual Editor</h3>
            <ul class="features">
                <li>Real Time Editor - See the changes as you make them!</li>
                <li>Intuitive Drag &amp; Drop Interface</li>
                <li>No Coding skills required!</li>
            </ul>
        </div>
        <!-- / -->
        <!-- list -->
        <div class="list-cont ic-diy-2">
            <h3>30+ Dynamic Components</h3>
            <ul class="features">
                <li>Dynamic components including Image Galleries, Blogs and Web Forms</li>
                <li>Ecommerce components like PayPal &amp; Ebay included</li>
                <li>Social widgets for instant Social Integration</li>
            </ul>
        </div>
        <!-- / -->

        <!-- list -->
        <div class="list-cont ic-diy-3">
            <h3>180 Themes and Counting</h3>
            <ul class="features">
                <li>A Design for every need - Personal, Blog and Professional Themes available</li>
                <li>Access to 85,000 stock images</li>
                <li>Completely Customizable</li>
            </ul>
        </div>
        <!-- / -->

        <!-- list -->
        <div class="list-cont ic-diy-4">
            <h3>Completely Hosted Solution</h3>
            <ul class="features">
                <li>Powerful Web and Email Hosting included</li>
                <li>Completely safe and secure with a 99.9% Uptime Guarantee</li>
                <li>Host your Website on your own Domain Name</li>

            </ul>
        </div>
        <!-- / -->

        <!-- list -->
        <div class="list-cont ic-diy-5">
            <h3>Unique Features</h3>
            <ul class="features">
                <li>Built-In website statistics</li>
                <li>Blog portability</li>
                <li>Search engine optimization</li>
            </ul>
        </div>
        <!-- / -->
        
    </div>
    <!-- / -->
    <!-- sidebar -->
    <div class="faq lfloat">

        <h4>Online Website Editor &amp;<br> Content Management Features</h4>
        <ul class="fea-list">
          <li>Visual Editor</li>
          <li>Over 175 themes and counting</li>
          <li>1, 2 and 3 column layouts</li>
          <li>100% customizable page layouts</li>
          <li>Style importing and exporting</li>
          <li>Favicon customization</li>
          <li>Standard HTML and CSS Templates</li>
          <li>Real time Editor</li>
          <li>Drag and Drop components</li>
          <li>Easy Image Uploading and Editing</li>
          <li>Built in lightbox feature</li>
          <li>Access to stock photo library (85000 images)</li>
        </ul>

        <div class="divider">&nbsp;</div>

        <h4>Website Marketing Features</h4>
        <ul class="fea-list">
            <li>Social Network Integration</li>
            <li>Blog Portability</li>
            <li>Monitor Your Website Usage</li>
            <li>Top Referrers Analysis Page</li>
            <li>Customized Forms Builder</li>
            <li>Optimize your website for search engines</li>
        </ul>

        <div class="divider">&nbsp;</div>

        <h4>Website Components</h4>
        <ul class="fea-list">
            <li>Image Gallery</li>
            <li>Blog</li>
            <li>Form</li>
            <li>Google Maps</li>
            <li>PayPal</li>
            <li>eBay</li>
        </ul>

    </div>
    <!-- / -->

</div>


<!-- Faqs -->
<div class="faqs-wrp row-indent" id="que-ans" style="display:none;">

    <div class="que">Q. Do I have to purchase a Hosting package to buy a Website Builder package?</div>
    <div class="ans">
		No, you don't have to worry about that. Our Website Builder packages come with a free Web and Email Hosting package.
    </div>
    <div class="que">Q. Is there a demo version of your Website Builder?</div>
    <div class="ans">
    	Yes, we do have a <a href="">demo</a> that you can try out before buying a Website Builder package.
    </div>
    <div class="que">Q. Is there a money back guarantee on your Website Builder packages?</div>
    <div class="ans">
        Yes, we offer a Risk Free, 30 Day Money Back Guarantee with all our Website Builder packages.
    </div>

    <div class="que">Q. What components are included with your Website Builder?</div>
    <div class="ans">
        Our Website builder includes popular components like Blog, Image Gallery, PayPal, eBay and Google Maps.
    </div>

    <div class="que">Q. Can I design/upload my own Theme?</div>
    <div class="ans">
       You can choose from over 180 stunning themes designed by expert designers. Our themes can be used for personal, professional as well as ecommerce Websites. You can also <a href="http://websitebuilderkb.com/w/Making_your_own_Theme" target="_blank">create your own theme.</a>
    </div>

    <div class="que">Q. Can I upgrade to a higher plan?</div>
    <div class="ans">
        Yes, you can upgrade to a higher plan at any time.
    </div>

    <div class="que">Q. Will there be any advertisements on my site?</div>
    <div class="ans">
        Absolutely Not! All our Website Builder packages are completely Ad-Free.
    </div>

    <div class="que">Q. Does the Website Builder include any SEO feature?</div>
    <div class="ans">
        Our Website Builder packages come integrated with a Search Engine Optimization feature to help you rank higher on search engines.
    </div>

    <div class="que">Q. I own a website with another host - can I move my site on to website builder?</div>
    <div class="ans">
        No, I'm afraid you will not be able to migrate an existing Website directly on to a Website Builder package.
        However, you can move website files over by downloading them from your other host then uploading them to your website builder account. The website content can then be filled to achieve a similar result.
    </div>


</div>
<!-- /Faqs -->

<div class="clear"></div>
<!-- Features/Faq -->

<script type="text/javascript">
    $('#felist').click(function () {
		$('#tabs').addClass("tab1")
		$('#tabs').removeClass("tab2")				
        $("#felist a").addClass("fea-active");
        $('#faqlist a').removeClass("faq-active");
        $('#fea-list').show();
        $('#que-ans').hide();
    });
    $('#faqlist').click(function () {
		$('#tabs').addClass("tab2")		
		$('#tabs').removeClass("tab1")						
        $("#felist a").removeClass("fea-active");
        $('#faqlist a').addClass("faq-active");
        $('#fea-list').hide();
        $('#que-ans').show();
    });
</script>


	

</div>


<script>
	function populate_hostingplan_with_domain_form(obj)
	{
		plan_id = escapeStr(obj);
		var form_name = 'sitebuilderplan_'+plan_id;
		var location = $('#'+form_name+' input[name="location"]').val();
		var type = $('#'+form_name+' input[name="type"]').val();
		var planid = $('#'+form_name+' input[name="planid"]').val();
		var duration = $('#'+form_name+' select[name="duration"]').val();
		$("#hostingplan_with_domain input[name='location']").val(location);
		$("#hostingplan_with_domain input[name='type']").val(type);
		$("#hostingplan_with_domain input[name='planid']").val(planid);
		$("#hostingplan_with_domain input[name='duration']").val(duration);
        _gaq.push(['s2._trackPageview', '/modal/diy/select_domain']);
		showModal();
	}
</script>







	</div>
</div>


<?php
include '../footer.php';
?>
</body>
</html>