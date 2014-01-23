
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
  <meta name="keywords" content="bulk domain registration, bulk domain names, multiple domain purchase, bulk domain buy, bulk domain registration, domain discounts, .com, .net, .org, .in" />
    <meta name="description" content="Bulk domain name registration for multiple extensions at discounted prices. View our bulk domain discount prices online and make huge savings today!" />
   
   <title>Bulk Domain Transfer</title>
    
    
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/superdupersite.css" />
    <link media="Screen" rel="stylesheet" type="text/css" href="../css/domain-v1.css"/>
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

<div class="row-white row-indent">
    <h2 class="ui-heading">
        Bulk Domain Transfer
    </h2>
    <br>
    <div class="note-wrp">
        <strong><span class="ic-note"></span>Important</strong>
        <ul>
            
                <li>
                    The following domain name extensions are not supported for transfer from here: COM.AU, .NET.AU, .DE, .ME, .CO, .CN, .TEL, .RU, .IN.NET, .CA, .COM.CO, .NET.CO, .NOM.CO, .COM.CN, .NET.CN, .ORG.CN, .COM.RU, .NET.RU, .ORG.RU, .EU, .ES, .CO.UK, .ME.UK, .ORG.UK, .NL, .CO.NZ, .NET.NZ, .ORG.NZ, .ASIA
                </li>
            
            <li>
                You will need funds in your customer advance account to transfer domain names using this tool. 
            </li>
            <li>
                Once the bulk transfer order is placed, the administrative contact of each domain name will receive an email, which asks for confirmation of such transfer. If you are transfering several hundred domains, then you will be receiving several hundred emails. You would need to click on a link inside each of these emails for the transfer request to be sent to the registry.
            </li>
            <li>
                The losing registrar in almost all cases will send you emails asking for confirmation per domain name - you can typically choose to ignore these emails.
            </li>
            <li>
                Domain Names must be atleast 60 days old before they can be transferred i.e you cannot transfer a domain name if it has been registered in the last 60 days.
            </li>
            <li>
                Transferring your domain name will add one year to its current expiry date.
            </li>
            <p>
                <strong style="font-size:13px;">IMPORTANT: </strong> If your domain expired with your old Registrar, and you renewed it with them, then do not Transfer it within 45 days of the previous expiry date since it will not add 1 more year to your domain name, and you will lose out on the Renewal fees paid to the older Registrar. 
            </p>
        </ul>
    </div>

    <div class="div-spacer"></div>
   <div id="show_error" class="showerror"></div>
    <form name="bulktransfer" action="domain-registration/index.php" method="post">
        <input type="hidden" name="action" value="bulk_transfer_detail">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="data-form">
            <tr>
                <td><label class="frm-label">Transfer upto thousand's of domain names</label></td>
            </tr>
            <tr>
                <td>
                 <div class="placeholder-wrapper" style="height:210px;">
                    <div class="placeholder" >
                       <div class="placeholder-txt2">
                        Enter each domain name on a separate line. Please ensure that you include the extension i.e. "domainname.ext".<br /><br/>
                        <strong>Example:</strong><br/>
                        domain1.com,test<br/>
                        domain2.com,test<br/>
                        domain3.net,test<br/>
                        domain4.com,test<br/>
                        domain5.biz,test<br/>
                        </div>
                    </div>
					<textarea id="ndomins-list" name="domainnames" cols="50" rows="5" class="bdr-tarea txt-input"></textarea>
                </div>
                </td>
            </tr>
            <tr>
                <td><input name="Checkout" type="button" class="uiButton" value="Next Step" onClick="checkandsubmit(this,document.bulktransfer);"></td>
            </tr>
        </table>
    </form>


</div>
<script type="text/javascript">
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
