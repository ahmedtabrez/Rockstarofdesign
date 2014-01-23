function showTTHover(obj) {
	if (document.getElementById(obj).className != 'checked-active')
	{
		document.getElementById(obj).style.display = 'block';
		document.getElementById(obj).className = 'hover-active';
	}
}
function hideTTHover(obj) {
	if (document.getElementById(obj).className != 'checked-active')
	{
		document.getElementById(obj).style.display = 'none';
		document.getElementById(obj).className = 'hover-inactive';
	}
}

function showTTCheckBox(obj1,obj2) {
	if (obj1.checked)
		{
			document.getElementById(obj2).style.display = 'block';
			document.getElementById(obj2).className = 'checked-active';
		}
	if (!(obj1.checked))
	{
			document.getElementById(obj2).style.display = 'none';
			document.getElementById(obj2).className = 'checked-inactive';
	}
}