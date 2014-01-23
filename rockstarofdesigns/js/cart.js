	var actualheight;
	var current_div;
	function  init(divid)
	{
	//alert("trying to set Initial props for " +divid);
	try{
	if(document.getElementById(divid).offsetHeight)
	{
	actualheight=document.getElementById(divid).offsetHeight;
	//alert(actualheight);
	}
	else
	{

		actualheight=219;

	//alert("i am unable to find the height of "+ divid);
	}
		if (divid=='login-div')
		{
			actualheight=219;
		}
	//alert ("trying to set height of div to 0");
	document.getElementById(divid).style.height=0+'px';
	document.getElementById(divid).style.display="none";
	}
	catch(e)
	{
	//actualheight=300;
	//alert(e);
	}
	//alert(actualheight);

	}
	var i=0;

	function show(divid,top)
	{
	if(divid)
	{
	current_div=divid;
	}

	var divid=current_div;
	document.getElementById(divid).style.display="block";
	document.getElementById(divid).style.height=i+'px';
	i=i+15;
	if(i<actualheight)
	{
	setTimeout("show()",1);
	}
	else
	{
	document.getElementById(divid).style.height=actualheight+'px';
	}
	}

	var j=0;
	function hide(divid)
	{
	try{
	if(divid)
	{
	current_div=divid;
	}
	divid=current_div;
	//alert('Trying to hide '+ divid);
	if(document.getElementById(divid).offsetHeight)
	{
	j=document.getElementById(divid).offsetHeight;
	if(j>0)
	{
	j=j-15;
	}
	if(j<=0)
	{
	j=0;
	i=0;
	//alert("setting height to 0");
	document.getElementById(divid).style.height=0+'px';
	document.getElementById(divid).style.display="none";

	//document.getElementById(divid).style.top=-85+'px';
	//alert("successfully set height to 0");
	}
	else
	{
	document.getElementById(divid).style.height=j+'px';
	setTimeout("hide()",0);
	}
	}

	}catch(e)
	{
	//alert(e);
	}
	}

    function show_hide_privacy_protection_tab(){
        if(!privacy_protection_allowed || jQuery.inArray(product_key, noprivacytlds) !== -1){
            $('#tab3').hide();
        } else {
            $('#tab3').show();
        }
    }
