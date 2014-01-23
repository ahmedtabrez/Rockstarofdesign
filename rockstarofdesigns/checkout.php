<!DOCTYPE HTML>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="keywords" content="domain, domain name registration, web hosting, website builder, email hosting, com,net, org domain names, website design," />
    <meta name="description" content="Domain names & web hosting company offers domain name registration, web hosting, web design and website builder tools cheap." />
 
    <title>Shopping Cart</title>    
    
     <link media="Screen" rel="stylesheet" type="text/css" href="css/style.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/style3.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/stylev4.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/superdupersite.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="css/bifm-sitebuilder.css" />
     <link media="handheld, only screen and (max-width: 580px), only screen and (max-device-width: 580px)" 
        href="css/mobile.css" type="text/css" rel="stylesheet" />

     <link href="http://fonts.googleapis.com/css?family=Rokkitt:400,700" rel="stylesheet" type="text/css">
    
     <script type="text/javascript" src="js/commonScripts.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript" src="js/jquery.js"> </script>
    

    <style type="text/css">

    ul#payment_options_online {
padding: 0;
margin: 0 0 0 15px;
overflow: hidden;
}
#paymentOption_online {
z-index: 999;
}
div.paymentOption {
clear: both;
margin: 20px 0 40px;
position: relative;
}
ul#payment_options_online li.paymentOption {
float: left;
width: 675px;
margin: 0;
border-bottom: 1px solid #f8f8f8;
padding: 10px 0;
}

ul#payment_options_online li.paymentOption label {
display: block;
float: left;
padding: 5px 0 5px 100px;
margin: 0;
width: 425px;
background: 0px 3px url('img/payment_option_logos.gif') no-repeat;
vertical-align: middle;
height: 18px;
cursor: pointer;
font-size: 14px;
font-weight: bold;
overflow: hidden;
}
ul#payment_options_online li.paymentOption label#label_debitcard {
background: url('img/logo-debitcard.gif') no-repeat scroll left center transparent;
}
#payment_options_online li.paymentOption label.paymentOptionNetbanking {
width: 185px;
}
ul#payment_options_online li.paymentOption label#label_paypal {
background-position: 0 -95px;
}
ul#payment_options_online li.paymentOption#payment_offline label {
background: 0px 0px url('img/pay-via-cheque.png') no-repeat;
}

ul#payment_options_online li.paymentOption#payment_debit label {
background: 0px 0px url('img/pay-via-acount.png') no-repeat;
}

    </style>

    <script type="text/javascript">
        objl10n = {"common_hello":"Hello!","common_logout":"Logout","common_notyou":"Not You","common_checkoutaftershopping":"Click here to checkout after you have finished shopping","common_shoppingcartempty":"Your shopping cart is empty.","common_processing":"Processing","common_noconnection":"No Connection","domains_add":"Add","domains_yousave":"You Save","domains_tryagain":"Please try again","domains_searcheddomainresult":"The domain you searched for is:","domains_erroroccured":"An error occurred. Please try again.","domains_youat":"you@","domains_less":"<< less","domains_more":"more >>","domains_hide":"Hide","domains_see":"See","domains_taken":"Taken","checkout_invoicegenerated":"Invoice already generated for this order. No further discounts can be applied.","checkout_unableprocess":"Unable to process your request. Please try again later.","checkout_selectonlinepayment":"Please select an Online Payment Option.","checkout_selectbank":"Please select a bank.","contacts_blankname":"Please specify your name","contacts_blankcity":"Please specify your city","contacts_blankaddress":"Please specify your address","contacts_blankzip":"Please specify your ZIP code","contacts_blanktelephone":"Please provide us your contact number","contacts_blankmobile":"Please provide us your mobile number","contacts_numerictelephone":"Telephone Code must have only numeric characters","contacts_telephonelength":"Telephone Number should be between 4-12 digits","contacts_validemailrequired":"You need a valid email address to log into the website","contacts_invalidemail":"Your email address must be in the format name@domain.com","contacts_blankcountry":"Please specify a country","contacts_blankstate":"Please specify a state","contacts_blankced":"Please enter CED identification details","contacts_blankidentification":"Please enter the Identification number","contacts_correcterrorssingular":"Please correct the following error","contacts_correcterrorsplural":"Please correct the following","contacts_specifycontactname":"Please specify the Name of the Contact Person","contacts_specifycompanydetails":"Please specify all the details of the Company and Name of the Contact Person","contacts_contactdetailsheader":"We will use the following contact details for this domain","contacts_contactsadd":"Add & Use this Contact","contacts_otherstate":"Other State","contacts_addanduse":"Add & Use this Contact","signup_blankpassword":"Please specify your password","signup_passwordminlength":"Your password must be at least 8 characters long","signup_passwordalphanum":"The password should contain alpha numeric characters","signup_passconfrequired":"Please confirm your password","signup_passconfnotsame":"Please enter the same password as above","signup_alphanum":"Letters or numbers only please"} ;
    </script>

    
<style type="text/css"></style></head>
<body class="">


<div id="page-header">
    <div id="header-wrapper">

<script type="text/javascript" src="js/jquery.innerfade.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>


<h1 id="branding">
    <span class="logo-cont">
    <span></span>
    <a href="index.php"><img src="img/logo.gif" alt=""></a>
    </span>
</h1>


<div id="shopping-cart" class="shop-cart">
    <strong class="user-name">Hello <span id="dashboard-username">abc</span>!&nbsp; </strong>
                    
            <a href="login.php?action=signout" id="signout_link" class="link-signout" onclick="return log_out();">Logout</a>
        
    <hr>
    <span class="cart-items"><strong><span id="dashboard-cartItemCount">1</span></strong> Item(s) in <a href="checkout.php" id="headerCartLink" title="Click here to checkout after you have finished shopping">Cart</a></span>
    <a href="checkout.php" class="button-checkout" id="headerCheckoutBtn" title="Click here to checkout after you have finished shopping">Check Out</a>
</div>

<input type="hidden" id="signout1" value="Are you sure you want to signout?">
<input type="hidden" id="signout2" value="You have some item(s) in your shopping cart. All these items will be emptied and you will have to start all over again. Are you sure?">
<div class="clear"></div>
<div id="primary-nav">
    <div class="nav">
            <ul class="navigation">
                <li class="first">
                    <a href="" id="menu-homesection">
                        <span class="menu-left"></span>
                        <span class="menu-mid">Home</span>
                        <span class="menu-right"></span>
                    </a>
                </li>
                <li class="" id="domain-list">
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
                            <li><a href="domain-registration/bulk-domain-registration.php">Bulk Domain Registration<span class="nav-note">Bulk Registrations at Lower Rates</span></a></li>
                            
                            <li><a href="domain-registration/premium-domain.php">Premium Domains<span class="nav-note">Register catchy, popular Domain Names</span></a></li>
                            
                            <li><a href="domain-registration/index.php?idn">IDN Domain Registration<span class="nav-note">Book your internationalized domains here</span></a></li>
                            <li><a href="domain-registration/domain-registration-price.php">View Domain Pricing<span class="nav-note">Compare pricing across 50+ extensions</span></a></li>
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
                <a href="web-hosting/enterprise-email-hosting.php"><li>Enterprise Email</li></a>
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




    </div>
</div>

<div id="page-container">
    <div id="page-wrapper">
        
<div id="modal_div" class="modal-wrapper" style="display:none">
  <div class="modal_overlay" style="width: 1149px; height: 1445px;"></div>
  <div class="modal_content"><br>
    <br>
    <img src="img/logo.gif"><br>
    <br>
    <div class="pre"></div>
    <br>
    <div class="processing_note" style="font: 12px verdana, arial, sans-serif; color: #515151;">
      <strong>Processing your request......</strong>
      <br>
      <small>
      Please wait while we update your cart
      </small> <br>
      <br>
      <br>
    </div>
  </div>
</div>

<div id="processing_div" class="modal-wrapper" style="display:none">
    <div class="modal_overlay" style="width: 1149px; height: 1445px;"></div>
    <div class="modal_content">
        <br><br><br><br>
        <img src="img/logo.gif"><br><br>
        <div class="pre"></div>
        <br><br>
        <div class="processing_note" style="font: 12px verdana, arial, sans-serif; color: #515151;">
            <strong>Processing your request......</strong><br><small>Please wait while the browser redirects</small><br><br><br>
        </div>
    </div>
</div>

<div class="CartSection row-indent">
<h2 class="ui-heading">Your Shopping Cart</h2>
<div class="error" id="show_error" style="display: none;">Error(s):
   <div id="error_lists">
       <ul></ul>
       
   </div>
</div>


<div class="intro-text gray-box">

    
        <h2 class="ui-heading">Welcome back, <em>abc</em></h2>
        <p class="sub-txt">This order will be added to your existing account with us, select Your Payment Method</p>
    

    
    </div>
<div class="div-spacer"></div>
<div class="div-spacer"></div>
<!-- Welcome note -->



<form name="purchase" method="POST" action="checkout.php" class="form">
  <input type="hidden" name="action" value="complete_order">
  <input type="hidden" name="payment_type" value="offline">
  <input type="hidden" name="gateway_id" value="">
  <input type="hidden" name="country" value="India">
  <input type="hidden" name="ccavenue_option" value="">
  <input type="hidden" name="gateway_params" value="">
  <input type="hidden" name="selected_bank" value="">
  <input type="hidden" name="cancel_invoice" value="">
  <input type="hidden" name="show_signup" value="false">
  <table id="CartTable" cellpadding="0" cellspacing="0" border="0" width="100%" class="shop-cart-table">
    <thead>
      <tr class="even">
        <th>Product</th>
        <th class="CartDuration-th">Duration</th>
        <th >Price</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <tr id="empty_cart" style="display:none;" class="odd">
        <td colspan="4"><div>
            <h3>Your Shopping Cart is empty.</h3>
          </div></td>
      </tr>
    
    <tr class="CartItemRow even" id="abc.firm.in_domain" name="product_items[]">
      <td class="CartItem"><div class="promo_price" style="display: none">264</div>
        <div class="promo_period" style="display: none">1</div>
        <p class="ItemTitle">
        </p><div class="lfloat domain-name">
          <input type="hidden" name="product_name[]" value="abc.firm.in_domain">
          abc.firm.in
        </div>

        <div class="lfloat cart-userinfo-bar custom_contact_settings" style="" actiontype="register">

            <span>
                <a class="ic-set ic-info tooltip" style="display: none;"><span class="classic"><div class="tooltip_img"></div></span></a>
                <a class="ic-set ic-user tooltip setting_contact_class" name="thirdleveldotin"><span class="classic">Change Contact Information <div class="tooltip_img"></div></span></a>
                <span class="nsprivacyblock">
                    <span class="v-bar"></span>
                    <a class="ic-set ic-server tooltip setting_nameserver_class "><span class="classic">Change Nameservers<div class="tooltip_img"></div></span></a>
                    
                </span>
            </span>

        </div>
        <div class="clear"></div>
           <p></p>
        
        <!-- /ItemTitle -->
        
        <p class="ItemSubTitle"> </p><div class="includedFree hideIncludedFree">
        <h4><span class="freeHighlight">FREE!</span> with every domain</h4>
    <ul class="fdns-sb-content includedFree">
        
        <li class="email">2 Email Account(s) - <strong>you@abc.firm.in</strong></li>
        
        <li class="privacyProtection">Privacy Protection</li>
        <li class="dnsManagement hidden">DNS Management</li>
        <li class="mailForwarding hidden">Mail Forwarding</li>
        <li class="urlMasking hidden">URL Masking</li>
        <li class="domainTheft hidden">Domain Theft Protection</li>
        <li class="bulkTools hidden"> Bulk Tools</li>
        <li class="showmore"><a href="domain-registration/free-with-domain-registration.php" target="_blank">See All Free Services »</a></li>
        <li class="showless"><a href="#" target="_blank">« Less</a></li>
    </ul>
</div><!-- /includedFree -->
 <p></p>
        
        <!-- /ItemSubTitle --></td>
      <td class="CartDuration">
      <div class="price-dropdown-wrp">
          <div class="dropdown-value">
                        3 Years </div>
          <div class="price_dropdown" style="display: none;">
              <span class="up-arr"></span>
              <ul class="update_item_class" name="abc.firm.in_domain">
                  
                    <li cvalue="1_264.00_35.34">
                        1 Year at <span class="WebRupee">Rs.</span> 264.00/yr
                    </li>
                    <li cvalue="2_408.29_17.67">
                        2 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="3_408.29_11.78" selected="" class="sel">
                        3 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="4_408.29_8.84">
                        4 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="5_408.29_7.07">
                        5 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="6_408.29_5.89">
                        6 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="7_408.29_5.05">
                        7 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="8_408.29_4.42">
                        8 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="9_408.29_3.93">
                        9 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
                    <li cvalue="10_408.29_3.53">
                        10 Years at <span class="WebRupee">Rs.</span> 408.29/yr
                    </li>
              </ul>
         </div>
      </div>
        <span class="SavingsShow">You Save 11.78%</span><div class="invoiced" title="Invoice already generated for this order. No further discounts can be applied.">(Invoice Id: 40989711)</div>
        </td>
      <td class="CartSubTotal"><p class="ItemSubTotal"> <span class="WebRupee">Rs.</span> <span id="abc.firm.in_domain_subtotal">1,080.58</span> </p>
        
        <!-- /ItemSubTotal --></td>
      <td class="item-close"><a class="remove_item_class" name="abc.firm.in_domain" href="#" product_key="thirdleveldotin">[x] Remove</a></td>
    </tr>
      </tbody>
    
  </table>
</form>

<!-- Model -->
<div id="contact_list_modal" class="modal-wrapper" style="display: none;">
    <div class="modal_overlay" ></div>
    <div class="wide_modal modal_content" >
        <!-- uncomment to view the model <div id="contact_list"></div> -->
        <!-- Model woth tabs -->
        <div class="model-twocols">
            <h3 class="heading">Advanced Settings for : <span id="advanced_setting_domain"></span></h3>
                <a class="modal_close close_contact_list_modal" href="#">Close [x]</a>

                <!-- Tabs list -->
                <div class="tabs-nav lfloat" id="tab-nav">
                    <ul>
                        <li id="tab1" class="first active-tab"><span class="ic-set ic-user"></span>View/Change Contact Information</li>
                        <li id="tab2"><span class="ic-set ic-server"></span>Change NameServers</li>
                        <li id="tab3" class="last"><span class="ic-set ic-privacy"></span>Enable/Disable Privacy Protection</li>
                        <li class="vertical-grd"></li>
                    </ul>
                </div>
                <!-- /Tabs list -->
                <!-- Tab Content -->
                <div class="tab-content lfloat"> 
                
                    <!-- Content -->
                        <div id="tab1-cont" class="tab-filler">
                            <p id="contact_description"></p>
                            <div class="view-form with-line txt-align" id="domain_contact_details">
                           </div>
                           <br>
                           <div class="btn-wrp" id="contact_selection_buttons">
                                <a href="#" class="model-button use_this_information" style="margin-left: 50px;">Use this information</a>
                                <a href="#" class="ui-button" style="margin-left: 53px;">Change Contact</a>
                           </div> 
                           <div class="div-spacer"></div>

                        </div>

                    <!-- Content -->

                    <!-- Content -->
                        <div id="tab2-cont" class="tab-filler" style="display:none;">
                            <p id="nameserver_description"></p>
                            <br>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="data-form" id="nameserver_details">
                            </table>
                            <div class="div-spacer"></div>
                        </div>
                    <!-- Content -->

                    <!-- Content -->
                        <div id="tab3-cont" class="tab-filler" style="display:none;">
                            <p>Privacy Protection protects your personal information that is publicly available in whois from data miners, automated scripts and spammers.</p>
                            <div class="div-spacer"></div>
                            <div id="privacy_protect_details">
                            </div>
                        </div>
                    <!-- Content -->

                </div>
                <!-- Tab Content -->
        </div>
        <!-- / -->        

    </div>
</div>
<!-- /Model -->

<table id="CartTableFooter" width="100%">

 <tbody><tr>
  <td>
      <div id="couponCodeContainer">
        <script type="text/javascript">var currency = "<span class=WebRupee>Rs.</span>";</script>
        <strong class="txtblue">Redeem a Coupon?</strong>
        <form name="couponForm" method="post" action="discount.php" id="form_couponForm">
          <input type="text" name="coupon_code" id="input_coupon_code" value="">
          <button class="gray-button" id="applyCoupon" type="submit" name="apply" value="Apply" onclick="_gaq.push(['s2._trackPageview', 'Apply-Coupon']);"><span><span>Apply</span></span></button>
          <button class="gray-button" id="removeCoupon" type="submit" name="remove" value="Remove"><span><span>Remove</span></span></button>
          <span class="couponLoading"></span>
          <div class="couponError"></div>
          <div class="couponWarning"></div>
          <div class="offerBlurb" style="display:none">
            <div class="blurbTop"></div>
            <div class="blurbBody"></div>
            <div class="blurbBottom"></div>
          </div>
        </form>
      </div>
    <script type="text/javascript"> var generated_invoices = {'abc-firm-in_domain':'40989711'};</script>


    <!-- /couponCodeContainer --></td>
 <td class="CartTotal" align="right">

  <table cellpadding="0" cellspacing="0" border="0" class="sub-total-table">
    <tbody><tr class="ItemConvertedSubtotal">
      <td class="itemText" ><p>Subtotal:</p></td>
      <td class="itemAmount" ><p id="CartTotal"><span class="WebRupee">Rs.</span> <span id="total">1,080.58</span></p></td>
    </tr>
    <tr class="taxTotal">
      <td class="itemText"><p>Tax<a href="#" onmouseover="return escape('Taxes applicable as per country')">(?)</a>:</p></td>
      <td class="itemAmount"><p id="taxTotalCurrency"><span class="WebRupee">Rs.</span> <span id="taxTotalAmount">0.00</span></p></td>
    </tr>
    <tr class="ItemDiscountTotal" style="display:none">
      <td class="itemText"><p>Coupon Discount:</p></td>
      <td class="itemAmount"><p id="DiscountTotal" style="text-align:left;">- <span class="WebRupee">Rs.</span> <span id="disctotal"></span></p></td>
    </tr>     
  </tbody></table>
    <table>
    <tbody><tr class="ItemTotalAfterDiscount">
      <td class="itemText" colspan="2" style="border:0;">
        <div class="Cart-Total">
            <table >
                <tbody><tr>
                    <td  align="right" style="padding-right:5px;">Total Amount:</td>
                    <td  align="left"><div id="TotalAmount"><span class="WebRupee">Rs.</span> <span id="totalpayable">1,080.58</span></div></td>
                </tr>
            </tbody></table>
        </div>

      </td>
      </tr>
    </tbody></table>



    </td>
    </tr>
</tbody></table>

<div id="customer_details">
 
  

<div class="div-spacer"></div>
<div class="CartSection" id="CartSection_paymentOptions">
    <h3 class="ui-subheading">Select Your Payment Method</h3>

    <ul id="payment_options_online">

    
    <div class="paymentOption" id="paymentOption_online">
          
            <li id="payment_options_custom" class="paymentOption">
                <input type="radio" name="select_gateway_id" value="34493" id="input_netbanking" onclick=' $(".netbanking_options").show();
' >
                <label id="label_custom" class="paymentOptionNetbanking" for="input_netbanking">Netbanking</label>
                <select name="netBankingCards" class="netbanking_options" style="display: none;">
                    <option value="" selected="selected">------- Select Bank -------</option>
                    <option value="AND_N">Andhra Bank</option>
                    <option value="UTI_N">AXIS Bank</option>
                    <option value="BBK_N">Bank of Bahrain &amp; Kuwait</option>
                    <option value="BOBCO_N">Bank of Baroda Corporate Accounts</option>
                    <option value="BOB_N">Bank of Baroda Retail Accounts</option>
                    <option value="BOI_N">Bank of India</option>
                    <option value="BOM_N">Bank of Maharashtra</option>
                    <option value="CBIBAN_N">Citibank Bank Account Online</option>
                    <option value="CITIUB_N">City Union Bank</option>
                    <option value="COP_N"> Corporation Bank </option>
                    <option value="DBS_N">DBS Bank Ltd</option>
                    <option value="DCB_N">DCB Bank ( Development Credit Bank )</option>
                    <option value="DEUNB_N">Deutsche Bank</option>
                    <option value="DLB_N">Dhanlaxmi Bank</option>
                    <option value="FDEB_N">Federal Bank</option>
                    <option value="HDEB_N">HDFC Bank</option>
                    <option value="ICPRF_N">ICICI Bank</option>
                    <option value="IDBI_N">IDBI Bank</option>
                    <option value="IOB_N">Indian Overseas Bank</option>
                    <option value="NIIB_N">IndusInd Bank</option>
                    <option value="ING_N">ING Vysya Bank</option>
                    <option value="JKB_N">Jammu &amp; Kashmir Bank</option>
                    <option value="KTKB_N">Karnataka Bank</option>
                    <option value="KVB_N">Karur Vysya Bank</option>
                    <option value="NKMB_N">Kotak Mahindra Bank</option>
                    <option value="LVB_N">Lakshmi Vilas Bank NetBanking</option>
                    <option value="OBPRF_N">Oriental Bank of Commerce</option>
                    <option value="PNBCO_N">Punjab National Bank Corporate Accounts</option>
                    <option value="NPNB_N">Punjab National Bank Retail Accounts</option>
                    <option value="SIB_N">South Indian Bank</option>
                    <option value="SCB_N">Standard Chartered Bank</option>
                    <option value="SBH_N">State Bank of Hyderabad</option>
                    <option value="SBI_N">State Bank of India</option>
                    <option value="SBM_N">State Bank of Mysore</option>
                    <option value="SBT_N">State Bank of Travancore</option>
                    <option value="SYNBK_N">Syndicate Bank</option>
                    <option value="TNMB_N">Tamilnad Mercantile Bank</option>
                    <option value="UNI_N">Union Bank of India</option>
                    <option value="UBI_N">United Bank of India</option>
                    <option value="VJYA_N">Vijaya Bank</option>
                    <option value="YES_N">YES Bank</option>
                </select>
            </li>
            <li id="payment_options_custom" class="paymentOption">
                <input type="radio" name="select_gateway_id" value="34493" id="input_debitcard">
                <label id="label_debitcard" class="paymentOptionNetbanking" for="input_debitcard">Debit Cards</label>
                <select name="NonMotoCardType" class="debitcard_options" style="display: none;">
                    <option value="" selected="">------- Select Bank -------</option>
                    <option value="CANVIS_N"> Canara Bank Debit Card (ATM PIN)</option>
                    <option value="CBIDEB_N"> Citibank Debit Card (IPIN)</option>
                    <option value="IOBDB_N"> Indian Overseas Bank Debit Card (ATM PIN)</option>
                    <option value="PNBVIS_N"> Punjab National Bank Debit Card (ATM PIN)</option>
                    <option value="SBDB_N"> State Bank of India Debit Card</option>
                    <option value="UNIDB_N"> Union Bank of India Debit Card (ATM PIN)</option>
                    <option value="OTHER"> Other Debit Cards</option>
                </select>
            </li>
            <li id="payment_options_pay.pw" class="paymentOption">
                <input type="radio" name="select_gateway_id" value="58195" id="input_58195">
                <label id="label_pay.pw" for="input_58195">VISA / MasterCard Credit Cards</label>
            </li>
            <li id="payment_options_paypal" class="paymentOption ">
                <input type="radio" name="select_gateway_id" value="31995" id="input_31995">
                <label id="label_paypal" for="input_31995">Paypal </label>
            </li>

        <!--<div class="clear"></div>-->

        <div id="netbanking_helptext_overlay" style="display:none;">
            <div class="modal_overlay" style="width: 1263px; height: 1602px;"></div>
            <div class="modal_content extra_wide_modal">
                <h1 class="hosting-modal-title"><strong>Net Banking / Debit Cards:</strong> List of Supported Banks</h1>
                <a class="modal_close" onclick="closeNetBankingModalDiv(); return false;" href="#">Close [x]</a>

                <div class="hosting-modal-body">

                    <h3>1. NetBanking</h3>
                    <ul class="vertical-list">
                        <li>Axis Bank</li>
                        <li>Bank of Bahrain &amp; Kuwait</li>
                        <li>Bank of Baroda</li>
                        <li>Bank of India</li>
                        <li>Bank of Maharashtra</li>
                        <li>Canara Bank</li>
                        <li>Corporation Bank</li>
                        <li>Citibank</li>
                        <li>City Union Bank</li>
                        <li>Deutsche Bank</li>
                        <li>HDFC Bank</li>
                    </ul>
                    <ul class="vertical-list">
                        <li>ICICI Bank Ltd</li>
                        <li>IDBI Bank</li>
                        <li>IndusInd Bank</li>
                        <li>ING Vysya Bank</li>
                        <li>Jammu &amp; Kashmir Bank</li>
                        <li>Karnataka Bank Ltd</li>
                        <li>Karur Vysya Bank Limited</li>
                        <li>Kotak Mahindra Group</li>
                        <li>Laxmi Vilas Bank</li>
                        <li>Oriental Bank of Commerce</li>
                        <li>Punjab National Bank (PNB)</li>
                    </ul>
                    <ul class="vertical-list">
                        <li>Royal Bank of Scotland</li>
                        <li>South Indian Bank</li>
                        <li>State Bank of India</li>
                        <li>State Bank of Travancore</li>
                        <li>Syndicate Bank</li>
                        <li>Tamilnad Mercantile Bank Ltd</li>
                        <li>The Bank of Rajasthan</li>
                        <li>The Federal Bank Ltd</li>
                        <li>Union Bank Of India</li>
                        <li>Vijaya Bank</li>
                        <li>YES Bank</li>
                    </ul>
                    <div class="clear"></div>
                    <h3>2. Debit Cards :</h3>
                    <ul class="vertical-list">
                        <li>Axis bank</li>
                        <li>Barclays</li>
                        <li>Canara bank</li>
                        <li>Citi bank</li>
                        <li>Corporation bank</li>
                        <li>Cosmos bank</li>
                    </ul>
                    <ul class="vertical-list">
                        <li>Deutsche bank</li>
                        <li>HDFC bank</li>
                        <li>ICICI bank</li>
                        <li>Indian Overseas bank</li>
                        <li>ING Vysya bank</li>
                        <li>Karur Vysya bank</li>
                    </ul>
                    <ul class="vertical-list">
                        <li>Kotak Mahindra</li>
                        <li>Punjab National bank</li>
                        <li>State bank of India</li>
                        <li>Standard Chartered bank</li>
                        <li>Union bank of India</li>
                        <li>YES bank</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  

    

    
        <li id="payment_offline" class="paymentOption">
            <input type="radio" name="select_gateway_id" value="pay_offline" id="input_offline">
            <label for="input_offline">Pay via Cheque/Demand Draft/Direct Deposit</label>
        </li>
    

        <li id="payment_debit" class="paymentOption">
            <input type="radio" name="select_gateway_id" value="debitpayment" id="pay_debit">
            <label class="paymentOptionNetbanking" for="pay_debit">Pay via Account balance</label>
        <!--<input type="radio" id="pay_debit">Pay from your Advance Account balance-->
        <p>The current balance in your Debit Account is

            
                <span style="color:#cc0000;"><span class="WebRupee">Rs.</span> 0</span>.
                </p><p>Click on <strong> <a href="/index.php?action=show_add_funds&amp;curentpage=&amp;goto=bigrock.in/checkout.php">Add Funds</a></strong> to Add money to your debit account</p>
            

        </li>
        <li id="total-amount" class="paymentOption">
            Total Amount: <span id="totalpayable2" style="margin-right:15px;">Rs. 229.00 </span><button type="button" id="pay_now" class="ui-button"><span ><span>Pay Now</span></span></button>
        </li>

    </ul>


</div><!-- /CartSection -->


    <div class="CartSection pay-sepr" id="CartSection_paymentOptions">
       
        
        <div class="paymentOption rfloat opt-2" id="paymentOption_offline">


            <h3 class="ui-subheading">Offline Payment Options</h3>
            <p class="txt-info">Add your order now and pay later using cheque/cash.</p>

            <p><button id="pay_offline_button" class="uiButton btn-space" type="button"><span><span>Pay Offline</span></span></button></p>

        </div>
        
         <div class="paymentOption lfloat opt-2" id="paymentOption_offline">


            <div id="customer_details">






<div id="zeroValueCart" class="CartSection" style="display: none;">
    <h2 class="HeadingActive">Please Confirm Your Order</h2>
    
        <p>Congratulations! Your coupon gets you a 100% discount on your cart. Just click below to confirm your order.</p>
    

    <p><button id="pay_zero_value_button" class="ui-button" type="button"><span><span>Confirm Order</span></span></button></p>
</div>


<div class="paymentOption" id="visa_only_payment_online" style="display: none;">
    <h3>VISA Only Payment Gateway</h3>
    <p>This is offer is applicable only to VISA card holders</p>

    <div class="clear"></div>

    <p><button id="visa_gateway_button" class="ui-button"><span><span>Pay Now</span></span></button></p>

</div>
</div>

        </div>

    <div class="div-spacer"></div>
    </div>

    
<div class="div-spacer"></div>

<div id="zeroValueCart" class="CartSection" style="display: none;">
    <h2 class="HeadingActive">Please Confirm Your Order</h2>
    
        <p>Just click below to confirm your order.</p>
    

    <p><button id="pay_offline_button" class="ui-button" type="button"><span><span>Confirm Order</span></span></button></p>
</div>
<div class="paymentOption" id="visa_only_payment_online" style="display: none;">
    <h3>VISA Only Payment Gateway</h3>
    <p>This is offer is applicable only to VISA card holders</p>

    <div class="clear"></div>

    <p><button id="visa_gateway_button" class="ui-button"><span><span>Pay Now</span></span></button></p>

</div>

<script>
    var visa_only_payment_id = "";
    $("#visa_gateway_button").click(function(){

        $("input[name='gateway_id']").val(visa_only_payment_id);
        $("input[name='payment_type']").val("gateway");
        $("form[name='purchase']").submit();
    });


</script>

<script>
//    $("#pay_debit_button").click(function(){
//
//    });// pay_debit_button submit

    $("#input_debitcard").click(function(){
        $("input[name='ccavenue_option']").val("debitcard");
        $(".debitcard_options").show();
        $(".netbanking_options").hide();
        $("input[name='selected_bank']").val('');
    });

    $("#input_netbanking").click(function(){
        $("input[name='ccavenue_option']").val("netbanking");
        $(".debitcard_options").hide();
        $(".netbanking_options").show();
        $("input[name='selected_bank']").val('');
    });

    $(".debitcard_options").change(function(){
        if($("#input_debitcard").is(':checked')) {
            $("input[name='selected_bank']").val($(".debitcard_options").val());
        }
    });

    $(".netbanking_options").change(function(){
        if($("#input_netbanking").is(':checked')) {
            $("input[name='selected_bank']").val($(".netbanking_options").val());
        }
    });

    $('a.netbanking_helptext').click(function (e) {
        showModal('netbanking_helptext_overlay');
        e.preventDefault();
    });

    $('.modal_overlay').click(function(){
        closeNetBankingModalDiv();
    });

    function closeNetBankingModalDiv(){
        $('#netbanking_helptext_overlay').css('display','none');
    }

    $('#payment_options_online li').bind('mouseover mouseout', function(){
        $(this).toggleClass('active');
    });

    $("input[name='select_gateway_id']").change(function(){
        $("input[name='gateway_id']").val($(this).val());
        $('li', $(this).parents('ul:eq(0)')).removeClass('selected');
        $(this).parents('li:eq(0)').toggleClass('selected');
    });// select_gateway_id submit

//    $("#pay_offline_button").click(function(){
//        $("input[name='payment_type']").val("offline");
//
//    });// pay_offline_button submit

    $("#offline_pay_country").change(function(){
        $("input[name='payment_type']").val("offline");
        $("input[name='country']").val($(this).val());
    });// pay_offline_button submit
    $("#offline_pay_country option[value='India']").attr("selected", true);
    $("input[name='country']").val('India');

    $('.custom_contact_settings').show();
</script>

<script type="text/javascript">
    $('.custom_settings').show();
</script>
  
</div>

<div id="domainSelectOverlay" style="display: none;">
  <div class="modal_overlay" style="width: 1149px; height: 1445px;"></div>
  <div id="couponDomainSelect" class="modal_content">
      <h2 class="HeadingInactive">Select a Domain Name:</h2>
    <p>Please select a domain to associate your free products to:</p>
    <select id="domainSelect">
    </select>
    <button type="button" class="ui-button" id="domainSelectSubmit" value="Confirm"><span><span>Confirm</span></span></button>
  </div>
</div>
</div>
<script type="text/javascript" src="js/domains_cart.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">

/*Array.prototype.find = function (s) {
    for(var i=0;i<this.length;i++) {
        if(this[i] == s)
            return true;
    }
    return false;
};*/

function fetch_contact_list(){
    $('#contact_selection_buttons').hide();
    $('#contact_description').html('');
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    $.ajax({
        url:'contacts.php',
        type: 'POST',
        data: {'action':'ajax_list','product_key':product_key,'page_no':1},
        success: function(data){
            $('#domain_contact_details').html(data);
            $('#domain_contact_details .table-data td a').removeAttr('href').removeAttr('onclick');
            $('#content-wrapper').css('width','auto');
            $('.class_new_contact').removeAttr('onclick').removeAttr('href');
        }
    });
}

function is_any_action_pending(){
    if ( $('#action_required_table tr').length < 2){
        $('#action_required_table').remove();
        $('div.intro-text').removeAttr('style');
        $('#action_pending_notice').remove();
        $('#show_error').hide();
        return false;
    }
    return true;
}

function remove_action(action_product_key){
    $('.'+action_product_key+'_action').remove();
    is_any_action_pending();
}

function remove_action_domain(action_product_key, domain){
    domain = domain.replace('_domain','');
    $('.'+action_product_key+'_action:contains("'+domain+'")').remove();
    is_any_action_pending();
}

function openContactSettingsModal(){
    $('#advanced_setting_domain').html(active_domain.replace('_domain',''));
    $('#contact_selection_buttons').hide();
    if(jQuery.inArray(product_key, noprivacytlds)){
      $('#tab3').hide();
    } else {
        $('#tab3').show();
    }
    $("#body-wrapper").append($("#contact_list_modal"));
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    $('#contact_description').html('We will use the following contact details for this domain');
    toggle_lightbox2(true, 'contact_list_modal');
    getSelectedContact();
}

function getSelectedContact(){
    $.ajax({
        url: 'contacts.php',
        type: 'POST',
        dataType: 'json',
        data: {'action' : 'get_domain_contact_details', 'active_domain': active_domain, 'product_key': product_key},
        success: function(response){
            if(typeof(response.nextaction) != 'undefined'){
                eval(response.nextaction);
            } else {
                $('#domain_contact_details').html(response.data);
                contact_id = response.contact_id;
                $('#domain_contact_details input[name=domain_name]').val(active_domain);
                $('#domain_contact_details input[name=contact_id]').val(contact_id);
            }
        }
    });
}

function getNameservers(){
    $.ajax({
        url:'checkout.php',
        type: 'POST',
        dataType: 'HTML',
        data: {'action':'get_nameservers','domain_name':active_domain},
        success: function(data){
            $('#nameserver_details').html(data);
        }
    });
    $('#nameserver_details').attr('name', active_domain);
}

function toggle_lightbox2(show, id)
{
    if(jQuery.inArray(product_key, noprivacytlds)){
        $('#tab3').hide();
    } else {
        $('#tab3').show();
    }
    lightbox_counter2 += show?1:-1;
    lightbox_counter2 = (lightbox_counter2<0)?0:lightbox_counter2;
    if(lightbox_counter2 > 0){
        showModal(id);
    }else{
        closeModal(id);
    }
}

function close_contact_list_modal(){
    $('#domain_contact_details').off('click').html("");
    $('.info_div').remove();
    $('#contact_list_modal').hide();
    $("select").show();
}

function additional_details_saved(){
    remove_action(product_key);
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    getSelectedContact();
}

function show_newcheckout_form_errors(response){
    $('#submit_extra_details_button').text('Save Details');
    $("#contact_show_error").show();
    $("#contact_error_lists").html(response.data);
}

function fetch_new_contact_form(){
    $('#contact_description').html('');
    current_html = $('#contact_search_result').html();
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    element_id = 'contact_list';
    $.ajax({
        'url': 'contacts.php',
        'type': 'POST',
        'data': {'action':'add_new_contact','domain_name':active_domain,'product_key':product_key},
        success:function(data){
            $('#domain_contact_details').html(data);
            $('#domain_contact_details input[name="domain_name"]').val(active_domain);
            $('#btnAdd').remove();
            $('#domain_contact_details input[type=text]').val('');
            $('.input-help').html('');
        }
    });
}

var noprivacytlds = [  "thirdleveldotau", "thirdleveldotau", "dotde", "domus", "dotcn", "dottel", "dotru", "dotin", "dotca", "thirdleveldotcn", "thirdleveldotcn", "thirdleveldotcn", "thirdleveldotru", "thirdleveldotru", "thirdleveldotru", "dotpro", "thirdleveldotin", "thirdleveldotin", "thirdleveldotin", "thirdleveldotin", "thirdleveldotin", "thirdleveldotin", "doteu", "dotes", "codotde", "thirdleveldotuk", "thirdleveldotuk", "thirdleveldotuk", "thirdleveldotnz", "thirdleveldotnz", "thirdleveldotnz", "dotasia", ];

var privacy_protection_allowed = true;


$(document).ready(function (){

    $('.CartItemRow').each(function(){
        $('ul li[selected]', $(this)).addClass('sel');
        var domainPrice = $('ul li[selected]', $(this)).attr('cvalue');
        var selectedDuration = $('ul li[selected]', $(this)).text().split('at')[0];
        $('.dropdown-value', $(this)).text(selectedDuration);
        domainPrice = domainPrice.split('_');
        var savings = parseFloat(domainPrice[2]);
        if(savings!==0){
            $('.SavingsShow', this).html("You Save " + round_decimals(savings, 2) + "%");
        }
        var tld = $('.setting_contact_class', $(this)).attr('name');
        if(tld == 'thirdleveldotuk'){
            $('.ic-info', $(this)).show();
            $('.ic-info .classic', $(this)).html('Changing contact details is a billable action for .CO.UK domains. Please confirm the contact details before proceeding.');
        }
        if(tld == 'dotcn'){
            $('.ic-info', $(this)).show();
            $('.ic-info .classic', $(this)).html('For .CN domains, modification of the registrant contact is a manual process and requires verification of documents');
        }
        if($('.custom_contact_settings', $(this)).attr('actiontype') == 'transfer'){
            $('.nsprivacyblock',$(this)).remove();
        }
        if($('.privacy_lock_wrapper', $(this)).attr('privacyallowed') == 'disabled'){
            $('.privacy_lock_wrapper', $(this)).remove();
        }
    });

    $('#CartTable tr:odd').addClass('odd');
    $('#CartTable tr:even').addClass('even');
    $('input:checkbox').each(function(){
        if($(this).attr('status') === 'true') {
            $(this).attr('checked', 'checked');
        }
    });
    $('.setting_domain_class').click(function(){
        var active_domain = $(this).parents('tr').attr('id');
        var product_key = $(this).attr('name');
        $('#advanced_setting_domain').html(active_domain.replace('_domain',''));
        if(jQuery.inArray(product_key, noprivacytlds)){
            $('#tab3').hide();
        } else {
            $('#tab3').show();
        }
        $("#body-wrapper").append($("#contact_list_modal"));
        $('#domain_contact_details').html("<div class='ajaxSpinner'></div>").attr('name', product_key);
        toggle_lightbox2(true, 'contact_list_modal');
        $.ajax({
            type:'POST',
            url:'checkout.php',
            dataType: 'json',
            data:{'action': 'show_domain_settings','product_key':product_key, 'domain_name':active_domain },
            success: function(response){
                $('#domain_contact_details').html(response.data);
                $('#domain_contact_details #domain_name').val(active_domain);
            }
        });
    });

    $('.setting_contact_class').click(function(){
        active_domain = $(this).parents('tr').attr('id');
        product_key = $(this).attr('name');
        $('#advanced_setting_domain').html(active_domain.replace('_domain',''));
        toggle_lightbox2(true, 'contact_list_modal');
        $('#tab1').trigger('click');
        show_hide_privacy_protection_tab();
    });

    $('.list_contact_button').live('click',fetch_contact_list);

    $('#domain_contact_details .table-data td a').live('click', function(){
            current_html = $('#contact_search_result').html();
            $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
            contact_id = $(this).attr('name').replace('contact_', '');
            $.ajax({
                url: 'contacts.php',
                type: 'POST',
                dataType: 'json',
                data: {'action' : 'get_contact_details', 'domain_name': active_domain, 'product_key': product_key, 'contact_id': contact_id},
                success: function(response){
                    $('#domain_contact_details').html(response.data);
                    $('#contact_description').html('<h3 class="ui-heading2">Contact Information</h3>');
                    contact_id = response.contact_id;
                    $('#domain_contact_details input[name=domain_name]').val(active_domain);
                    $('#domain_contact_details input[name=contact_id]').val(contact_id);
                    $('.list_contact_button').replaceWith('&nbsp;&nbsp;&nbsp;<a class="back_to_contact_list">Back</a>');
                }
            });
    });

    $('.close_contact_list_modal').live('click',  close_contact_list_modal);

    $('.setting_nameserver_class').click(function(){
        active_domain = $(this).parents('tr').attr('id');
        product_key = $(this).parents('.custom_contact_settings').find('.setting_contact_class').attr('name');
        $('#advanced_setting_domain').html(active_domain.replace('_domain',''));
        toggle_lightbox2(true, 'contact_list_modal');
        $('#tab2').trigger('click');
        show_hide_privacy_protection_tab();
    });

    $('.setting_privacy_protect_class').click(function(){
        active_domain = $(this).parents('tr').attr('id');
        product_key = $(this).parents('.custom_contact_settings').find('.setting_contact_class').attr('name');
        $('#advanced_setting_domain').html(active_domain.replace('_domain',''));
        toggle_lightbox2(true, 'contact_list_modal');
        $('#tab3').trigger('click');
        show_hide_privacy_protection_tab();
    });

    function appendToBodyWrapper(id){
        $("#body-wrapper").append($('#' + id));


    }

    $('.price-dropdown-wrp').hover(function(){
        $(this).find('.price_dropdown').css("display","block");
        },function(){
        $(this).find('.price_dropdown').css("display","none");
    });

    $('.price-dropdown-wrp li').click(function(){
        $('.price_dropdown').css("display","none");
        $(this).siblings().removeClass('sel');
        $(this).siblings().removeAttr('selected');
        $(this).addClass('sel');
        $(this).attr('selected','selected');
        var selectedDuration = $(this).text().split('at')[0];
        $(this).closest('.price-dropdown-wrp').find('.dropdown-value').text(selectedDuration);
    });

    if(is_any_action_pending()){
        $('div.intro-text').css({'background':'#FFFEE1','border':'1px solid #F5C056'});
    }

    $('#tab1').click(function(){
        $('li.active-tab').removeClass('active-tab');
        $('.tab-filler').css('display', 'none');
        $('#tab1-cont').css('display', 'block');
        $(this).addClass('active-tab');
        $('#contact_selection_buttons').hide();
        $('#contact_description').html('We will use the following contact details for this domain');
        $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
        getSelectedContact();
    });

    $('#tab2').click(function(){
        $('li.active-tab').removeClass('active-tab');
        $('.tab-filler').css('display', 'none');
        $('#tab2-cont').css('display', 'block');
        $(this).addClass('active-tab');
        $('#nameserver_description').text('We have pre-filled default nameservers for you. You can change the values of the nameserver by editing them below');
        $('#nameserver_details').html("<div class='ajaxSpinner'></div>");
        getNameservers();
    });
    $('#tab3').click(function(){
        $('li.active-tab').removeClass('active-tab');
        $('.tab-filler').css('display', 'none');
        $('#tab3-cont').css('display', 'block');
        $(this).addClass('active-tab');
        $('#privacy_protect_details').html("<div class='ajaxSpinner'></div>");
        $.ajax({
            url : 'checkout.php',
            type: 'post',
            dataType: 'JSON',
            data: {'action': 'get_privacy_protection_status', 'domain_name': active_domain},
            success: function(data){
                $('#privacy_protect_details').html('<div style="float: left;line-height: 25px;"><label class="lfloat frm-label" style="padding-right: 40px;font-size: 16px;"> Privacy Protection </label></div> <div id="itoggle" style="margin-left: 152px;"><input id="ichkbox" name="pps_modal" type="checkbox" class="iT_checkbox"><label for="pps_modal" class="itoggle" id="ssl-on-off"><span></span></label></div>');
                if(data.status == 'true'){
                    privacy_protection_status = true;
                    $('#ichkbox').attr('checked',true);
                    $('#ssl-on-off').addClass('iTon');
                } else {
                    privacy_protection_status = false;
                    $('#ichkbox').attr('checked',false);
                    $('#ssl-on-off').addClass('iToff');
                }

                $('#ssl-on-off').click(function(){ // on/off button
                    if($('#ichkbox').is(':checked'))
                    {
                        $('#ichkbox').attr('checked',false);
                        $('#ssl-on-off').addClass('iToff');
                        $('#ssl-on-off').removeClass('iTon');
                        privacy_protection_status = false;
                    }
                    else
                    {
                        $('#ichkbox').attr('checked',true);
                        $('#ssl-on-off').removeClass('iToff');
                        $('#ssl-on-off').addClass('iTon');
                        privacy_protection_status = true;
                    }
                    $.ajax({
                        url:'checkout.php',
                        type: 'post',
                        dataType: 'JSON',
                        data: {'action':'update_privacy_protection','domain_name': active_domain, 'privacy_protection_status': privacy_protection_status},
                        success: function(data){
//                            if(data.status == 'success'){
//                                $('#privacy_protect_details').html("<h3 style='color: green;'>Success!</h3>");
//                            }
                        }
                    });
                });

            }
        });
    });
    $(".apply_landrush").click(function(){
        //active_domain = $(this).parents('tr').attr('id');
        $.ajax({
            url:'checkout.php',
            type: 'post',
            dataType: 'JSON',
            data: {'action':'update_extra_info','domain_name': $(this).parents('tr').attr('id'), 'extra_info_status': $(this).is(':checked')},
            success: function(msg){
                if(msg.status == 'success')
                    location.href = 'checkout.php';
//                $("#total").html(msg.total);
//                $("#taxTotalAmount").html(msg.tax_amount);
//                $("#totalpayable").html(msg.total_with_tax);
////                obj_link.parent().parent().find(".addon_price").html(msg.addon_price);
//                set_total();
//                applyCouponCode();
//                if(msg.payment_option_html != 'not_logged_in'){
//                    $('#customer_details').html(msg.payment_option_html);
//                }


            }
            });
    });

    $(".txt-align tr td:first-child").css("text-align", "right");

    $(".domain_action").click(function(){
        active_domain = $(this).attr('id').replace('Domain - ','').replace('_action','_domain');
        product_key = $(this).attr('name');
        contact_id = $(this).parent().attr('name').replace('_action', '');
        $('#advanced_setting_domain').html(active_domain.replace('_domain',''));
        toggle_lightbox2(true, 'contact_list_modal');
        if($(this).attr('name') == 'dotde'){
            $('#contact_selection_buttons').hide();
            fetch_new_contact_form();
//            toggle_lightbox2(true, 'contact_list_modal');

//            $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
//            $.ajax({
//                'url': 'contacts.php',
//                'type': 'POST',
//                'data': {'action':'add_new_contact','domain_name':active_domain,'product_key':product_key},
//                success:function(data){
//                    $('#domain_contact_details').html(data);
//                    $('#domain_contact_details input[name="domain_name"]').val(active_domain);
//                    $('#btnAdd').remove();
//                    $('#domain_contact_details input[type=text]').val('');
//                    $('.input-help').html('');
//                }
//            });
        } else {
            $('#tab1').trigger('click');
        }
    });

    $('.class_new_contact').live('click', fetch_new_contact_form);

    lightbox_counter2 = 0;
});

$('.use_this_contact').live('click', function(){
    $('#contact_selection_buttons').hide();
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    $.ajax({
        'url': 'contacts.php',
        'type': 'POST',
        'dataType': 'json',
        'data': {'action':'associate_contact','domain_name':active_domain,'contact_id':contact_id},
        success: function(response){
            if(response.status === 'show_additional_details') {
                $('#domain_contact_details').html(response.data);
                $('#domain_contact_details input[name=domain_name]').val(active_domain);
                $('#domain_contact_details input[name=contact_id]').val(contact_id);
            }
            else {
                $('#contact_description').html("Contact settings have been updated successfully. We will use the following contact details");
                remove_action_domain(product_key, active_domain);
                getSelectedContact();
            }
        }
    });
});

$('.use_this_information').live('click', function(){
//    if(product_key == 'thirdleveldotuk'){
//        $.ajax({
//            url:'contacts.php',
//            type: 'POST',
//            dataType: 'JSON',
//            data: {'action': 'update_session', 'product_key': product_key},
//            success: function(response){
//                if(response.status == 'success'){
//                    remove_action(product_key);
//                }
//            }
//        });
//        close_contact_list_modal();
//        return;
//    }

    $('#contact_description').html('');
    $('#contact_selection_buttons').hide();
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    $.ajax({
        'url': 'contacts.php',
        'type': 'POST',
        'dataType': 'json',
        'data': {'action':'associate_contact','domain_name':active_domain,'contact_id':contact_id},
        success: function(response){
            if(response.status === 'show_additional_details') {
                $('#domain_contact_details').html(response.data);
                $('#domain_contact_details input[name=domain_name]').val(active_domain);
                $('#domain_contact_details input[name=contact_id]').val(contact_id);
            }
            else {
                remove_action_domain(product_key, active_domain);
                close_contact_list_modal();
            }
        }
    });
});

$('.back_to_contact_list').live('click', function(){
    $('#contact_description').html('');
    $('#domain_contact_details').html("<div class='ajaxSpinner'></div>");
    $.ajax({
        url: 'contacts.php',
        type: 'POST',
        dataType: 'json',
        data: {'action': 'fetch_contact_container'},
        success: function(response){
            $('#domain_contact_details').html(response.data);
            $('#contact_search_result').html(current_html);
        }
    });
});

$('#search_contact_txt').live('keypress', function(event){
    if(event.which == 13){
        $('.search-uibutton').css('background', "url('img/336.gif') 0 0 no-repeat");
        search_contact($("#search_contact_txt").val(),$("#contact_type").val(), 1);
    }
});

$("#pay_debit_button").live('click',function(){
    if(is_any_action_pending()){
        $('#action_pending_notice').show();
        $('#show_error').show();
        $(document).scrollTo($("#show_error"));
        return false;
    }
    $("input[name='payment_type']").val("debit");
    $("form[name='purchase']").submit();
});// pay_debit_button submit
</script>



    </div>
</div>
<?php
include 'footer.php';
?>
</body></html>