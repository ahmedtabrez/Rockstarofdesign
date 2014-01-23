<!DOCTYPE HTML>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="keywords" content="domain, domain name registration, web hosting, website builder, email hosting, com,net, org domain names, website design," />
    <meta name="description" content="Domain names & web hosting company offers domain name registration, web hosting, web design and website builder tools cheap." />
    <title>Login</title>
	    
	
	
    <link media="Screen"  rel="stylesheet" type="text/css" href="css/style.css" />
    <link  media="Screen" rel="stylesheet" type="text/css" href="css/superdupersite.css" />
    <link  media="Screen" rel="stylesheet" type="text/css" href="css/homev3.css" />
<link media="Screen" rel="stylesheet" type="text/css" href="css/stylev4.css" />

    <link media="handheld, only screen and (max-width: 580px), only screen and (max-device-width: 580px)" 
        href="css/mobile.css" type="text/css" rel="stylesheet" />
    

    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/cart.js"></script>
    
</head>
<body class="">
<?php
include 'header_index.php';
?>

<div id="page-container">
    <div id="page-wrapper">
        

<script type="text/javascript" src="js/state_lists.js"></script>
<script type="text/javascript" src="js/passwordMeter.js"></script>
<script type="text/javascript">
function set_action()
{
    document.login.action.value="forgotpassword";
    login.submit();
}
function check_status()
{
    if(check_password(document.sign))
        return true;
    else
        return false;
}
function check_password(form)
{
    var regExp = new RegExp("^(?=^.{8,15}$)(?=.*\\d)(?=.*[a-zA-Z])(?!.*\\s).*$");
    if (form.passwd.value == "" || !regExp.test(form.passwd.value))
    {
        alert('The password should contain alpha numeric characters.');
        form.passwd.value = "";
        form.confirmpasswd.value = "";
        form.passwd.focus();
        return false;
    }
    if (form.confirmpasswd.value == "")
    {
        alert('The password and confirm password do not match.');
        form.confirmpasswd.value = "";
        form.confirmpasswd.focus();
        return false;
    }
    if (form.confirmpasswd.value != form.passwd.value)
    {
        alert('The password and confirm password do not match.');
        form.confirmpasswd.value = "";
        form.confirmpasswd.focus();
        return false;
    }
    return true;
}
</script>

<div id="container" class="row-indent">
    
        
        


    <div class="gray-shdow row-indent" style="overflow: hidden; display: block;" id="state-one">
    
        <div class="lfloat" style="width:400px;">
            <div class="loginform" id="login_right">
  
  <h2 class="ui-sub-heading">Sign in to place your order!</h2>
  <form name="login" method="post" action="login.php" id="cust-login-form">
    <input type="hidden" name="action" value="secure_login">
    <input type="hidden" name="redirecturl" value="">
    <input type="hidden" name="resellerid" value="410876">
    <div>
      <label id="label_email" for="input_email">Email <span class="asterix">*</span></label>
      <input class="frm-field" name="txtUserName" type="text" value="" size="35">
    </div>
    <div style="margin-bottom:1px;">
      <label id="label_password" for="input_password">Password <span class="asterix">*</span></label>
      <input class="frm-field" name="txtPassword" type="password" value="" id="input_password" size="35">
    </div>
    <div id="rememberme" style="margin-bottom:0px; padding-bottom:0;">
      <input class="frm-field" id="existing_remember" name="rememberme" type="checkbox">
      <label id="label_rememberme" for="existing_remember">Remember Me</label><div id="forgotpassword" style="padding:0;"> <a href="/login.php?action=showforgotpass">Forgot Password ?</a> </div>
    </div>
    <div style="margin-top:0px;">
      <button name="submit" type="submit" class="uiButton" value="Login now">Sign In</button>
    </div>
  </form>
</div>
<!-- /loginform -->
<style type="text/css">
.loginform div.error{
    margin: 5px 0 15px;
    }
.loginform{ width:325px}
</style>

        </div>        
        <div class="lfloat" style="width:400px;">
            <h3 class="ui-sub-heading">Don't have a account?</h3>
            <div><button type="submit" name="submit" class="uiButton" id="new_submit">Create an Account in 10 seconds</button></div>
        </div>
    <div class="clear"></div>
    </div>
    
 



   <div class="gray-shdow row-indent" style="overflow: hidden; display: none;" id="state-two">
    <div class="loginform" id="signup">
    <div id="show_error" class="showerror"></div>
    <h2 class="ui-heading" style="padding:0;">Create an Account</h2>
    
    <form name="sign" id="sign" action="login.php" method="post" >


    
    <table>
      <tr>
        <td>
        <div>
          <label class="frm-label" id="label_name" for="input_fullname">Name<span class="asterix">*</span></label>
          <input type="text" name="name" id="input_fullname" class="frm-field required" value="" size="35">
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div>
          <label class="frm-label" id="label_companyname" for="input_companyname">Company Name (Optional)</label>
          <input type="text" name="companyname" id="input_companyname" class="frm-field" value="" size="35">
        </div>
      </td>
      </tr>
      <tr>
        <td>
        <div>
          <label id="label_newemail" for="input_newemail">Email<span class="asterix">*</span></label>
          <input type="text" name="email" id="username" class="frm-field required" value="" size="35">
        </div> 
      </td>
      </tr>
      <tr>  
      <td>     
        <div>
          <label id="label_newemail" for="input_newemail">Password<span class="asterix">*</span></label>
          <input type="password" id="passwd" name="passwd" class="frm-field required" size="35" value="">
          <p class="info-small">8 character minimum. No special characters.</p>
        </div>  
      </td>
      </tr>
      <tr>                  
        <td>
        <div>
          <label id="label_newemail" for="input_newemail">Confirm Password<span class="asterix">*</span></label>
          <input type="password" name="conf_passwd" id="conf_passwd" class="frm-field required" size="35" onkeyup="runPassword(this.value, 'mypassword');">
        </div>
      </td>
      </tr>
      
    
    </table>
    
    <table>
      <tr>
        <td>
        <div>
          <label class="frm-label" id="label_address" for="textarea_address">Address<span class="asterix">*</span></label>
          <input type="text" name="address1" id="input_address1" class="frm-field required" maxlength="64" value="">
        </div> 
      </td>
      </tr>
      <tr>  
      <td>     
        <div>
        <table>
            <tbody><tr>
                <td width="210" valign="top">
          <label class="frm-label" id="label_country" for="select_country">Country<span class="asterix">*</span></label>
          <select id="country" name="country" onchange="change_country(this.value)" class="frm-field custome-input required">
            <option value="null">
            Select a Country
            </option>
            
            
            <option value="AM">American</option>
            <option value="AU">Australia</option>
            <option value="BM">Bermuda</option>
            <option value="CA">Canada</option>
            <option value="EG">Egypt</option>
            <option value="FR">France</option>
            <option value="IN">India</option>
            <option value="MY">Malaysia</option>
          </select>
            </td>
            <td valign="top">
            <label class="frm-label" id="label_state" for="select_state">State<span class="asterix">*</span></label>
            <select name="state" class="frm-field custome-input required" onchange="showHideOtherState(this);" id="stateSelect">
                
            <option value="-1">
                Select State</option>
                <option value="135">Australian Capital Territory</option><option value="136">New South Wales</option><option value="137">Northern Territory</option><option value="138">Queensland</option><option value="139">South Australia</option><option value="140">Tasmania</option><option value="141">Victoria</option><option value="142">Western Australia</option><option value="Other">Other</option></select>
            <input type="hidden" name="not_applicable" value="false">
            <b id="loadMess" style="position: relative; visibility: hidden;">
                
            </b> <span id="other_state_text"></span>
                </td>
            </tr>
          </tbody></table>
        </div>
      </td>
      </tr>
      <tr>
        <td>
        <div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                <td width="193">
                <div>
                    <label class="frm-label" id="label_city" for="select_city">City<span class="asterix">*</span></label>
                    <input style="width:140px;" type="text" id="select_city" class="frm-field required" maxlength="15" name="city" value="" size="35">
                </div>
                </td>
                <td>
                   <div>
                      <label class="frm-label" id="label_zip" for="input_zip">Zip<span class="asterix">*</span></label>
                      <input style="width:100px;" type="text" name="zip" id="input_zip" class="frm-field required" maxlength="15" value="" size="35">
                    </div>                 
                </td>
                </tr>
           </tbody></table>

        </div>
      </td>
      </tr>
      <tr>
        <td>
 
      <div>
          <label class="frm-label" id="label_phone" for="input_phone">Phone<span class="asterix">*</span></label>
          <input type="text" id="input_phone_cc" class="frm-field required" maxlength="3" size="3" name="telnocc" value="">
          -
          <input type="text" id="input_phone" class="frm-field required" maxlength="12" name="telno" value="" size="35">
          <p class="info-small">Country Code + Phone Number</p>
        </div>
      </td>
      </tr>
      <tr>
        <td>
        <div>
            <label class="frm-label" id="label_mobile" for="input_mobile">Mobile</label>
            <input type="text" id="input_mobile_cc" class="frm-field required" maxlength="3" size="3" name="mobilenocc" value="">
            -
            <input type="text" id="input_mobile" class="frm-field required" maxlength="12" name="mobileno" value="" size="35">
            <p class="info-small">Country Code + Mobile Number</p>
        </div>
      </td>
      </tr>
    </table>
    <p>By clicking 'Create Account' you agree to the <a target="_blank" href="">Terms &amp; Conditions</a>.</p>
    <br>    
   <button id="sub_button" class="uiButton" type="submit" name="submit">Create Account</button>  &nbsp;<span id="pto" class="more-link"><a> Back</a></span>
   
   </form>
  
    <!--mobile menu end-->
      
</div>

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script language="javascript">
$(document).ready(function() {
  $.validator.addMethod("alphanumeric", function(value, element) {
      return /[a-z]+/i.test(value) && /[0-9]+/.test(value);
  }
  , "Letters or numbers only please");

    // validate signup form on keyup and submit
    $("#sign").validate({
    rules: {
        name: "required",
        address1: "required",
        city: "required",
        zip: "required",
        telno:
        {
            required : true,
            number : true,
            minlength : 6
        },
        mobileno:
        {
            required : false,
            number : true,
            minlength : 6,
            maxlength: 12
        },
        passwd:
        {
            required : true,
            minlength : 8,
            alphanumeric : true
        },
        conf_passwd:
        {
            required : true,
            minlength : 8,
            equalTo: "#passwd",
            alphanumeric : true
        },

        email: {
            required: true,
            email: true
        }
    },
    messages: {
        name: "Please specify your name",
        address1: "Please specify your address",
        city: "Please specify your city",
        zip: "Please specify your zip/postcode",
        telno: {
            required: "Please provide us your contact number"
        },
        mobileno: {
            required: "Please provide us your mobile number"
        },
        email: {
            required: "You need a valid email address to log into the website",
            email: "Your email address must be in the format name@domain.com"
        },
        passwd: {
            required: "Please specify your password",
            minlength: "Your password must be at least 8 characters long",
            maxlength: "Your password can contain a maximum of 15 characters",
            alphanumeric: "The password should contain alpha numeric characters"
        },
        conf_passwd: {
            required: "Please confirm your password",
            minlength: "Your password must be at least 8 characters long",
            equalTo: "Please enter the same password as above",
            alphanumeric: "The password should contain alpha numeric characters"
        }
    },
    success: function(label) {
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
    }

    });

});



</script>
    <div class="clear"></div>
     </div>
    
  <div style="clear:both">&nbsp;</div>
  
  
</div>
<!-- /container -->
<script>
$(document).ready(function(){
    if($("#show_error").html().indexOf("error") != -1){
         $("#state-one").hide();
          $("#state-two").show();
            
    }
});

    $(document).ready(function (){
        $('#new_submit').click(function (){
            $("#state-one").hide();
            $("#state-two").show();
            
        })
        
        $('#pto').click(function (){
            $("#state-one").show();
            $("#state-two").hide();
        })

        
    });
    
var country = 'AU';
if(country == '')
{
    document.getElementById('country').value="AU";
    change_country("AU");
}
else
{
    document.getElementById('country').value="AU";
    change_country("AU");
    document.getElementById('stateSelect').value="";
    if('')
        document.sign.langpref.value="";
}
</script>


<!--mobile -->



    </div>
</div>

<?php
include 'footer-index.php';
?>
</body>
</html>
