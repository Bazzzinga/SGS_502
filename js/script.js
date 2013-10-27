$(document).click(function() {
	for(i=1; i<=2; i++)	{
		$("#submenu_"+i).hide();
	}
});

function submenu(num)
{
	var cond = ($("#submenu_"+num).attr("display") == 'block');
	if(cond) {
		$("#submenu_"+num).delay(10).fadeOut(200);
	}
	else {
		$("#submenu_"+num).delay(10).fadeIn(200);
	}
}