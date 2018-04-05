/*== dropdown main menu ==*/
jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).fadeIn(1);
        },
        function() { $('.dropdown-menu', this).fadeOut(1);
    });
});

/*== product menu ==*/
$(document).ready(function() {
	function activeTab(obj) {
		$('.product ul li').removeClass('active');
		$(obj).addClass('active');
		var id = $(obj).find('a').attr('href');
		$('.product-item').hide();
		$(id).show();
	}
	$('.product-menu li').click(function() {
		activeTab(this);
		return false;
	});
	activeTab($('.product-menu li:first-child'));
});