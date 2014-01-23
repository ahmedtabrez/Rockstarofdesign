
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="keywords" content="domain, domain name registration, web hosting, website builder, email hosting, com,net, org domain names, website design," />
    <meta name="description" content="Domain names & web hosting company offers domain name registration, web hosting, web design and website builder tools cheap." />
   	<title>Bulk Domain Registration</title>
    
	
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/superdupersite.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/stylev4.css">

     <link media="handheld, only screen and (max-width: 580px), only screen and (max-device-width: 580px)" 
        href="../css/mobile.css" type="text/css" rel="stylesheet" />
    
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	
	

</head>


<body class="">

<?php
include 'header.php';
?>
<div id="page-container">
	<div id="page-wrapper">
		

<div class="row-indent">
	<form name="bulkregisration" action="domain.php" method="post">
		<input type="hidden" name="action" value="bulk_registration_detail">
		<input type="hidden" name="current_action" value="show_bulk_registration">
		<h2><em>Bulk Domain Registration</em></h2>

		<div id="show_error" class="showerror">
			
		</div>

		<table width="" border="0" cellspacing="0" cellpadding="0" class="data-form">
			<tr>
				<td colspan="2" class="frm-label" valign="top">Register upto thousand's of domain names</td>    
			</tr>
			<tr>
				<td colspan="2">
                <div class="placeholder-wrapper" style="height:210px;">
                    <div class="placeholder bulk-text-box">
                   <div class="placeholder-txt2">
                    Enter each domain name on a separate line. Please ensure that you include the extension i.e. "domainname.ext".<br /><br/>
                    <strong>Example:</strong><br/>
                    domain1.com<br/>
                    domain2.com<br/>
                    domain3.net<br/>
                    domain4.com<br/>
                    domain5.biz<br/>
                    </div>
                    </div>
					<textarea id="ndomins-list" class="bdr-tarea txt-input"  name="domainnames" cols="50" rows="5" ></textarea>
                    </div>
				</td>
			</tr>
			<tr>
				<td width="110px" class="frm-label"><label for="name On Card">Register For</label></td>
				<td>
					<select name="noofyears" class="frm-select lfloat" >
						<option value="1" selected>1 yr</option>
						<option value="2">2 yrs</option>
						<option value="3">3 yrs</option>
						<option value="4">4 yrs</option>
						<option value="5">5 yrs</option>
						<option value="6">6 yrs</option>
						<option value="7">7 yrs</option>
						<option value="8">8 yrs</option>
						<option value="9">9 yrs</option>
						<option value="10">10 yrs</option>
					</select>

				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" value="Next Step" class="uiButton" onClick="checkandsubmit(this,document.bulkregisration);">
				</td>
			</tr> 
		</table>
	</form>

	<div class="div-spacer"></div>
	<div class="note-wrp" style="margin:0">

		<strong><span class="ic-note"></span>Note:</strong>
		<ul>
			<li>The following domain name extensions are not supported for registration from here: .COM.AU, .NET.AU, .DE, .ME, .CO, .CN, .TEL, .RU, .IN.NET, .CA, .COM.CO, .NET.CO, .NOM.CO, .COM.CN, .NET.CN, .ORG.CN, .COM.RU, .NET.RU, .ORG.RU, .EU, .ES, .CO.UK, .ME.UK, .ORG.UK, .NL, .CO.NZ, .NET.NZ, .ORG.NZ, .ASIA</li>
			<li>You will need funds in your customer advance account to register domain names using this tool. Your current customer advance account balance is <strong><span class=WebRupee>Rs.</span> 0.00</strong>.
				<a href="">You can add funds to your customer advance account by clicking here</a>.</li>
				<li>Unlike the standard registration process, this method bypasses the check availability step and directly registers the domain names that you specify, if available.</li>
				<li>This tool is highly optimized to register domain names in bulk. It will instantly submit all domain names to the respective registry using high-speed, multi-threaded connections thereby maximizing the chances of getting the domain names that you want. However, it may take several hours before these domain names start appearing in your control panel.</li>
				<li>You will receive an email report which shows the status (successfully registered/domain unavailable) of all the domain names submitted by you at 2012se.comps78@gmail.com.</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
			if($("#show_error").html().indexOf("error") != -1){
				$("#ndomins-list").removeClass("bulk-dreg");
				$("#ndomins-list").focus();
			}
		});
		$("#ndomins-list").focus(function (){ // text area remove bg
			$(this).removeClass("bulk-dreg")
			$(this).css("background", "#fff")		
		});

        //placeholder
        $(".txt-input").focus(function () {
            $(".placeholder-wrapper").addClass("ho");
        });

        $(".txt-input").focusout(function () {
            if (!$(this).val()) {
                $(".placeholder-wrapper").removeClass("ho");
            }
        });

        $(".placeholder").click(function () {
            $(".txt-input").focus();
        });

        $(".placeholder").keypress(function () {
            $(".txt-input").focus();
        });

        ///placeholder


        </script>

	</div>
</div>
<?php
include '../footer.php';
?>
</body>
</html>
