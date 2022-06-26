$(function(){

	// Кнопка наверх
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			if ($('#topButton').is(':hidden')) {
				$('#topButton').css({
					opacity : 1
				}).fadeIn('slow');
			}
		} else {
			$('#topButton').stop(true, false).fadeOut('fast');
		}
	});
	$('#topButton').click(function() {
		$('html, body').stop().animate({
			scrollTop : 0
		}, 300);
	});
	//

	// search
	$('.block-search').find('[type=text]').attr('placeholder','Например, ограды');
	//

	// fancybox
	$("#headerConsult,#footerConsult,#leftmenuCallback,#elementOrder,.element_detail_order").fancybox({
		padding: 0,
		margin: 0,
		wrapCSS: 'form_wrapper'
	});
	$(".fancybox").fancybox();
	//

	// header footer form
	$('#consultSubmit').click(function(){
		var button = $(this);
		button.addClass('opacity');
		var form_object = $(this).closest('.form');
		$(this).closest('.form').find('.required').removeClass('red');
		var data = {
			action : 'consult',
			name : form_object.find('[name=form_name]').val(),
			phone : form_object.find('[name=form_phone]').val(),
			text : form_object.find('[name=form_text]').val()
		};
		$.post('/sites/all/themes/Ritual95_2015/ajax.php',data,function(res){
			if(res=='error'){
				form_object.find('.required').addClass('red');
				button.removeClass('opacity');
			}else
				form_object.html(res);
		});
	});
	$('#callbackSubmit,#callbackSubmit2').click(function(){
		var button = $(this);
		button.addClass('opacity');
		var form_object = $(this).closest('.form');
		$(this).closest('.form').find('.required').removeClass('red');
		var data = {
			action : 'callback',
			name : form_object.find('[name=form_name]').val(),
			phone : form_object.find('[name=form_phone]').val()
		};
		$.post('/sites/all/themes/Ritual95_2015/ajax.php',data,function(res){
			if(res=='error'){
				form_object.find('.required').addClass('red');
				button.removeClass('opacity');
			}else
				form_object.html(res);
		});
	});
	//

	// special form
	$('#formSubmit').click(function(){
		var button = $(this);
		button.addClass('opacity');
		var form_object = $(this).closest('.form');
		$(this).closest('.form').find('.required').removeClass('red');
		var title = form_object.find('.form_element_title').html();
		var photo = form_object.find('.form_element_photo img').attr('src');
		var desc = form_object.find('.form_element_desc').html();
		var data = {
			action : 'special',
			name : form_object.find('[name=order_name]').val(),
			phone : form_object.find('[name=order_phone]').val(),
			email : form_object.find('[name=order_email]').val(),
			text : title+' '+'http://ritual95.ru'+photo
		};
		$.post('/sites/all/themes/Ritual95_2015/ajax.php',data,function(res){
			if(res=='error'){
				form_object.find('.required').addClass('red');
				button.removeClass('opacity');
			}else
				form_object.html(res);
		});
	});
	//

	// mainslider
	$('#mainSlider').bxSlider({
		auto: true,
		mode: 'fade'
	});
	//

	// fastbuy
	$('#elementFastbuy').click(function(){
		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			$(this).find('img').show();
			$(this).next('.form_fastbuy_wrapper').show();
		}else{
			$(this).removeClass('active');
			$(this).find('img').hide();
			$(this).next('.form_fastbuy_wrapper').hide();
		}
	});
	$('.form').on('click','.form_close',function(){
		var obj = $(this).closest('.form_fastbuy_wrapper').prev('#elementFastbuy');
		obj.removeClass('active');
		obj.find('img').hide();
		obj.next('.form_fastbuy_wrapper').hide();
	});
	$('#elementFastbuyButton').click(function(){
		$('#elementFastbuy').trigger('click');
	});
	//

	// element fastbuy form
	$('#fastbuySubmit').click(function(){
		var button = $(this);
		button.addClass('opacity');
		var form_object = $(this).closest('.form');
		var form_order = $('.form_order');
		$(this).closest('.form').find('.required').removeClass('red');
		var title = form_order.find('.form_element_title').html();
		var photo = form_order.find('.form_element_photo img').attr('src');
		var desc = form_order.find('.form_element_desc').html();
		var url = form_order.find('.form_element_url').html();
		var data = {
			action : 'fastbuy',
			phone : form_object.find('[name=order_phone]').val(),
			text : title+"<br> "+url+"<br> "+"http://ritual95.ru"+photo,
			taxonomy_id : form_object.find('[name=taxonomy_id]').val()
		};
		$.post('/sites/all/themes/Ritual95_2015/ajax.php',data,function(res){
			if(res=='error'){
				form_object.find('.required').addClass('red');
				button.removeClass('opacity');
			}else
				form_object.html(res);
		});
	});
	//

	// element_order form
	$('.order-button').click(function(){
		var desc = $(this).closest('tr').find('.left').html();
		var price = $(this).closest('tr').find('.right').find('.price').html();
		$('.form_element_desc').html(desc);
		$('.form_element_price').html(price+' руб.');
	});
	$('#orderSubmit').click(function(){
		var button = $(this);
		button.addClass('opacity');
		var form_object = $(this).closest('.form');
		$(this).closest('.form').find('.required').removeClass('red');
		var title = form_object.find('.form_element_title').html();
		var photo = form_object.find('.form_element_photo img').attr('src');
		var url = form_object.find('.form_element_url').html();
		var desc = form_object.find('.form_element_desc').html();
		var price = form_object.find('.form_element_price').html();
		var data = {
			action : 'order',
			name : form_object.find('[name=order_name]').val(),
			phone : form_object.find('[name=order_phone]').val(),
			email : form_object.find('[name=order_email]').val(),
			taxonomy_id : form_object.find('[name=taxonomy_id]').val(),

			title: title,
			url: url,
			title: title,
			desc : desc,
			price : price
		};
		$.post('/sites/all/themes/Ritual95_2015/ajax.php',data,function(res){
			if(res=='error'){
				form_object.find('.required').addClass('red');
				button.removeClass('opacity');
			}else
				form_object.html(res);
		});
	});
	//

	// full order form placeholder
	$('#zakaz-form').find('input[name=name]').attr('placeholder','Например, Светлана');
	$('#zakaz-form').find('input[name=hphone]').attr('placeholder','8-XXX-XXX-XX-XX');
	$('#zakaz-form').find('input[name=mphone]').attr('placeholder','8-XXX-XXX-XX-XX');
	$('#zakaz-form').find('input[name=email]').attr('placeholder','xxxxx@xxx.xx');
	$('#zakaz-form').find('input[name=addres]').attr('placeholder','');
	//

});