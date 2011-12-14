function reloading(){
	window.location.reload();
}

function redirect(addr){
	window.location = addr;
}

function auth_err(){
	$('#pass').val('');
	$('#auth_err').css('display','none');
	$('#auth_err p').replaceWith('<img src="/resources/loader.gif">');
}

$('document').ready(function(){
	/*----------------------- Drop-down menu ---------------------------*/
	$('#menu ul li').hover(
		function() {
			$(this).addClass("active");
            $(this).find('ul').stop(true, true);
            $(this).find('ul').slideDown();
        },
        function() {
        	$(this).removeClass("active");
            $(this).find('ul').slideUp('fast');
        }
    );
	/*----------------------- Login action -----------------------------*/
	$('#auth').submit(function(){
		$('#auth_err').css('display','block');
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/auth/login",
			data: str,
			success: function(res){
				if(res == true){
					setTimeout('reloading()',500);
				}
				else{
					$('#auth_err img').replaceWith('<p style="color: rgb(202,81,10);">'+res+'</p>');
					setTimeout('auth_err()',600);
				}
			}
		});
		return false;
	});
});