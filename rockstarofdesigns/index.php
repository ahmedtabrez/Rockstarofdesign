
<!DOCTYPE HTML>
<html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="keywords" content="domain, domain name registration, web hosting, website builder, email hosting, com,net, org domain names, website design," />
	<meta name="description" content="Domain names & web hosting company offers domain name registration, web hosting, web design and website builder tools cheap." />
    
	 <title>Buy Domains,Mulitple Hosting and much more at lowest rate</title>   
	
	
	
    <link media="Screen" rel="stylesheet" type="text/css" href="css/style.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/superdupersite.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/homev3.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/stylev4.css" />
    <link media="handheld, only screen and (max-width: 580px), only screen and (max-device-width: 580px)" 
        href="css/mobile.css" type="text/css" rel="stylesheet" />
    

	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	

    <!--[if IE]>   
    <script type="text/javascript">
    $(function() {
    var zIndexNumber = 1000;
    $('#page-header div').each(function() {
        $(this).css('zIndex', zIndexNumber);
        zIndexNumber -= 100;
    });
    });
    </script>
    <![endif]-->

    


    
</head>
<body class="">


<?php
//include 'header-slider.php';
include 'header.php';
?>
<style type="text/css">
.txt-button {
margin-top: -4px;
}
</style>
<div id="page-container">
	<div id="page-wrapper">
		
<div id="homepage-content" class="row-gray">
    <div id="region-top" class="row-indent">
        <div class="wide-left-column">
            <div class="domain-sbox lfloat">
                <h2 class="ui-heading">Get a <em>Domain Name</em></h2>
                <div class="ui-subtitle">With <span class="greytext">FREE Email</span>, Privacy Protection and lots more</div>
                
                <div class="domain-search-box" style="height: 45px;">
                    <form action="domain-registration/domain-check.php" method="post" name="form_domain_avail" id="homepageDomainSearch">
                        <input type="hidden" value="check_availability" name="action">
                        <input type="hidden" value="true" name="showrelated">
                        <div class="domain-select-wrapper">
                            <input type="text" value="YourWebsite" name="txtDomainName" class="optionalField domains-input" id="field_domains-input" 
                                   maxlength="65" onkeydown="remove_error_msg();" >
                            <div class="domains-select">
                                <span class="tlds" id="tldDisplay">.com</span>
                                <span class="tlds-dd"></span>
                                <div class="ie-fix"></div>
                            </div>
                        </div>
                        <button type="submit" style="float: right;"class="domain-submit" id="go_btn" onclick="_gaq.push(['s2._trackEvent', 'Home-Domain-Search', 'Go']); return check_domain_name();">Go</button>
                        
                        <div id="error_msg" class="error" style="display:none; margin:7px 0;width: 90%">Please enter a domain name.</div>
                    <!-- tld list -->
                    <div id="show-tldlist" style="display:none;">
                        <span id="tld-close">Close</span>
                        <table class="wrp-table">
                            <tr>
                                <td class="heading">Most Popular Domain Extensions:</td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <table class="dataTable2">
                                            <tr>
                                                
                                                <td class="radio" onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input id="com" type="checkbox" name="tld[]" value="com">
                                                    <a class="link-promo" href="domain-registration/promos.php">com</a>
                                                </td>
                                                <td class="radio" onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input id="in" type="checkbox" name="tld[]" value="in">
                                                    <a class="link-promo" href="domain-registration/promos.php">in</a>
                                                </td>
                                                <td class="radio">
                                                    <input id="pro" type="checkbox" name="tld[]" value="pro">
                                                    <label for="pro">pro</label>
                                                </td>
                                                <td class="radio" onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input id="net" type="checkbox" name="tld[]" value="net">
                                                    <a class="link-promo" href="domain-registration/promos.php">net</a>
                                                </td>
                                                <td class="radio" onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input id="org" type="checkbox" name="tld[]" value="org">
                                                    <a class="link-promo" href="domain-registration/promos.php">org</a>
                                                </td>
                                            </tr>
                                            <tr class="radio">
                                                <td class="radio">
                                                    <input id="mobi" type="checkbox" name="tld[]" value="mobi">
                                                    <label for="mobi">mobi</label>
                                                </td>
                                                <td class="radio">
                                                    <input id="info" type="checkbox" name="tld[]" value="info">
                                                    <label for="info">info</label>
                                                </td>
                                                <td class="radio">
                                                    <input id="asia" type="checkbox" name="tld[]" value="asia">
                                                    <label for="asia">asia</label>
                                                </td>
                                                <td class="radio">
                                                    <input id="us" type="checkbox" name="tld[]" value="us">
                                                    <label for="us">us</label>
                                                </td>
                                                <td class="radio">
                                                    <input id="name" type="checkbox" name="tld[]" value="name">
                                                    <label for="name">name</label>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <!-- /Top domain list -->  

                                    <!-- optional domain list -->            
                                    <div id="show-option"> 

                                        
                                        <table>
                                            <tr>
                                                <td style="text-align:center;"></td>
                                            </tr>
                                        </table>
                                        <table class="dataTable2">
                                            <tr class="">
                                                <td colspan="5" class="heading"><div>Other Domain Extensions:</div> </td>
                                            </tr>
                                            <tr>
                                                
                                                <td  class="radio">
                                                    <input id="tel" type="checkbox" name="tld[]" value="tel" >
                                                    <label for="tel">tel</label>
                                                </td>
                                                <td class="radio"   onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input type="checkbox" name="tld[]" value="co.in">
                                                    <a class="link-promo" href="domain-registration/promos.php">co.in</a>
                                                </td>
                                                <td  class="radio">
                                                    <input id="tv" type="checkbox" name="tld[]" value="tv" >
                                                    <label for="tv">tv</label>
                                                </td>
                                                <td class="radio"   onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input type="checkbox" name="tld[]" value="me">
                                                    <a class="link-promo" href="domain-registration/promos.php">me</a>
                                                </td>
                                                <td class="radio"   onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input type="checkbox" name="tld[]" value="ws">
                                                    <a class="link-promo" href="domain-registration/promos.php">ws</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  class="radio">
                                                    <input id="bz" type="checkbox" name="tld[]" value="bz" >
                                                    <label for="bz">bz</label>
                                                </td>
                                                <td  class="radio">
                                                    <input id="cc" type="checkbox" name="tld[]" value="cc" >
                                                    <label for="cc">cc</label>
                                                </td>
                                                <td  class="radio">
                                                    <input id="me.uk" type="checkbox" name="tld[]" value="me.uk" >
                                                    <label for="me.uk">me.uk</label>
                                                </td>
                                                <td  class="radio">
                                                    <input id="org.uk" type="checkbox" name="tld[]" value="org.uk" >
                                                    <label for="org.uk">org.uk</label>
                                                </td>
                                                <td class="radio"   onmouseover="return escape('Hot Deal on this TLD!')">
                                                    <input type="checkbox" name="tld[]" value="net.in">
                                                    <a class="link-promo" href="domain-registration/promos.php">net.in</a>
                                                </td>
                                            </tr>
                                            <tr>
                                        </table>
                                        
                                    </div>
                                </td>
                            </tr>
                        </table>
						<div class="task-sel" id="select-tlds"><a class="blue">Select All &raquo;</a></div>
						<div class="task-link"><a class="blue" href="domain-registration/index.php">View more &raquo;</a></div>
                    </div>
                   
                    
                </form>                    
            </div>
        </div>
 
        <div class="blocks rfloat">
            <div class="domain-names view-plan" id="domainsPromoBlurb">
                <div class="text">
                    <span class="from">Lowest Pricing Guaranteed</span>
				</div>
                <span class="ic-tip"></span>
                <div class="clear"></div>
            </div>
            <div class="right-side">
                <div class="price-list">
                    <ul>
                        
                        <li class="first">
                            <div class="bold in">.COM</div>
                            <div class="strikeout oldprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 689.99</div>
                            <div class="gray bold currentprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 627.00</div>
                        </li>
                        <li class="first">
                            <div class="bold in">.IN</div>
                            <div class="strikeout oldprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 563.49</div>
                            <div class="gray bold currentprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 300.00</div>
                        </li>
                        <li class="first">
                            <div class="bold in">.PRO</div>
                            <div class="strikeout oldprice"></div>
                            <div class="gray bold currentprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 896.99</div>
                        </li>
                        <li class="last">
                            <div class="bold in">.NET</div>
                            <div class="strikeout oldprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 689.99</div>
                            <div class="gray bold currentprice"><span class='currencySymbol'><span class=WebRupee>Rs.</span></span> 517.00</div>
                        </li>

                    </ul>
                </div>
                <!-- /price-list -->
				<div class="d-link"><a href="domain-registration/domain-registration-price.php" class="blue">View Pricing &raquo;</a></div>                
                <div class="clear"></div>

            </div>

        </div>
    </div>
    <div class="clear"></div>
    
        <br />
        <div style=" text-align:center;"><a href="domain-registration/index.php"><img class="com-net-banner" src="img/com_net_banner.jpg" alt="COM NET Promo"></a></div>
    
    
</div>

</div>
<script type="text/javascript">
    $(document).ready(function (){
        $(".domains-select").click(function(){
            $("#show-tldlist").slideToggle(300);
        });

        $("#tld-close").click(function(){
            $("#show-tldlist").slideToggle(300);
        });

        $('form[name="form_domain_avail"]').submit(function(){
            butt = $("#go_btn");
            var domain_name = $('#field_domains-input').val() + '.' + $(this).val();
            $('input[name="tld[]"]:checked').each(function(){
                _gaq.push(['s2._trackEvent', 'Domain-Search', domain_name, 'customer']);
            });
            $("#go_btn").attr('disabled', 'disabled');
           // $("#go_btn").attr('readonly', 'readonly');
			//$("#go_btn").addClass('go_btn_readonly');
            animButton();
        });
		
		
        $($("#show-tldlist input[type=checkbox]")[0]).attr('checked', true);
    });
    $(document).click(function(event)
    {
        $(event.target).parent().find('#show-tldlist').slideUp('slow');
		
		$("#hosting-products").click(function(){
			$('#show-tldlist').slideUp("slow");			
		});
		$("#misc-products").click(function(){
			$('#show-tldlist').slideUp("slow");			
		});
		

    });
    $("#show-tldlist").click(function(){
        if($("$(this)input:checked").length == 1) {
            $('#tldDisplay').html('.'+$("$(this)input:checked").val());
        } else if ($("$(this)input:checked").length > 1 && ($("$(this)input:checked").length < $("#show-tldlist input[type=checkbox]").length)) {
            $('#tldDisplay').html('<span class="tld-sel">Selected</span>');
        } else if($("$(this)input:checked").length == 0) {
            $('#tldDisplay').html('.com');
            $($("#show-tldlist input[type=checkbox]")[0]).attr('checked', true);
        }
    });
    var step = 1;
    function animButton()
    {

        step++;
        if (step == 7) step = 1;
        if (step == 1)
        {
            window.status = 'Processing. ';
            butt.html('. ');
        }
        if (step == 2)
        {
            window.status = 'Processing. ';
            butt.html('. ');
        }
        if (step == 3)
        {
            window.status = 'Processing.. ';
            butt.html('.. ');
        }
        if (step == 4)
        {
            window.status = 'Processing.. ';
            butt.html('.. ');
        }
        if (step == 5)
        {
            window.status = 'Processing... ';
            butt.html('... ');
        }
        if (step == 6)
        {
            window.status = 'Processing... ';
            butt.html('... ');
        }
        timeout_id = setTimeout("animButton()", 200);
    }

    function check_domain_name() // error msg for domian defult value
    {
        var domain_name = $("#field_domains-input").val();
        domain_name = trim(domain_name);
        if((domain_name.length == 0) || (domain_name.match(/[^a-zA-Z0-9-.]+/)))
        {
            $("#error_msg").show();
            return false;
        }

        return true;
    }
	
    function remove_error_msg(){
        $("#error_msg").hide();
    }
	
   // Tlds 'Select All' click function
    $('#select-tlds').click(function(e)
    {
        e.preventDefault();
        current_txt2 = $(this).text();
        $(this).text($(this).text() == 'Select All »' ? 'Unselect All »' : 'Select All »');
        if(current_txt2 == "Select All »")
        {
           $('.radio input[type=checkbox]').each(function(){
               $(this).attr('checked', true);
           })
           $('#tldDisplay').html('All');
        }
        else
        {
           $('.radio input[type=checkbox]').each(function(){
               $(this).attr('checked', false);
           })
        }
 
    });
    //End			
</script>
<script>
	$(document).ready(function(){
		$('#field_domains-input').textboxValueToggle('YourWebsite');
		$(".home-blurb-wrp .home-blurb:first-child").addClass("first");
		$(".home-blurb-wrp .home-blurb:nth-child(2)").addClass("second");
		$(".home-blurb-wrp .home-blurb:nth-child(3)").addClass("third");
		$(".home-blurb-wrp .home-blurb:nth-child(4)").addClass("fourth");						
		
    });
	$.fn.textboxValueToggle = function(defaultText) {
		$(this).focus(function() {
				if($(this).val()=== defaultText){
					$(this).val('').removeClass('optionalField');
				}
			}).blur(function() {
				if($(this).val()==='' ){
					$(this).addClass('optionalField').val(defaultText);
				}
			});
	}    
</script>
<!-- Domian Box -->
<!-- Four Product Boxs -->
<div class="home-blurb-wrp">
	<!-- Hosting Blurbs -->

	<div class="home-blurb web-hosting">
    	<h2>Buy <em>Web Hosting</em></h2>
        <h3><em>Email Hosting</em> Included</h3>
		<ul>
			<li>99.9% Uptime Guarantee</li>
			<li>Reliable & Secure</li>
			<li class="last">Powered by cPanel/Plesk</li>						
		</ul>
        <p class="plist">Starting @</p>
        <p class="prices"><span class="currency"><span class=WebRupee>Rs.</span></span> 80.00 <span class="duration">/mo</span></p>
		<a class="txt-button" style="margin-top: -4px;" href="web-hosting/index.php">View Plans</a>
        <div class="img-holder"><img src="img/th-web-hositng.png" alt=""></div>
	</div>


    
	<div class="home-blurb reseller-hosting">
    	<h2>Buy <em>Reseller Hosting</em></h2>
		<h3><em>FREE WHMCS</em> Included</h3>
		<ul>
			<li>99.9% Uptime Guarantee</li>
			<li>Use WHM/cPanel for Management</li>
			<li class="last">Softaculous Included</li>						
		</ul>
        <p class="plist">Starting @</p>
        <p class="prices"><span class="currency"><span class=WebRupee>Rs.</span></span> 1,182.00 <span class="duration">/mo</span></p>
		<a class="txt-button" style="margin-top: -4px;" href="reseller-hosting.php">View Plans</a>	
		<div class="img-holder"><img src="img/th-rs-hosting.png" alt=""></div>    
	</div>    
<!-- /Hosting Blurbs -->
 
	<!-- Products Blurb -->

	<div class="home-blurb site-builder">
		<h2>Build your Website</h2>
		<h3>No Technical Skills Required</h3>
		<ul>
			<li>Quick & Easy to Use</li>
			<li>Choose from hundreds of designs</li>
			<li class="last">Build Professional Websites</li>			
		</ul>
        <p class="plist">Starting @</p>
		<p class="prices"><span class="currency"><span class=WebRupee>Rs.</span></span> 238.80 <span class="duration">/mo</span></p>
		<a class="txt-button" style="margin-top: -4px;" href="website-design/index.php">View Plans</a>
		<div class="img-holder"><img src="img/th-build-web.png" alt=""></div>    	
    </div>
    


    <div class="home-blurb ssl-certs">
   		<h2>Buy SSL Certificate</h2>
		<h3>Secure your Website</h3>
		<ul>
			<li>Upto 256-bit Encryption</li>
            <li>Free Reissues Included</li>
            <li class="last">Maximum Browser Compatibility</li>
		</ul>        
        <p class="plist">Starting @</p>        
		<p class="prices"><span class="currency"><span class=WebRupee>Rs.</span></span> 3,094.30 <span class="duration">/yr</span></p>
		<a class="txt-button" style="margin-top: -4px;" href="digital-ssl-certificate/index.php">View Plans</a>
        <div class="img-holder"><img src="img/th-ssl.png" alt=""></div>
    </div>    
    

	<div class="blurb-devider"></div>
	<div class="over-white-box"></div>                
</div>




	</div>
</div>

<?php
include 'footer-index.php';
?>
</body>
</html>
