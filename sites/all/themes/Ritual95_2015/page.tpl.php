<?php ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
    <?php echo $meta; ?>
    <?php print $head; ?>
    <meta name="yandex-verification" content="4cdf362b3516c9e8" />
    <title><?php print $head_title; ?></title>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,400itatdc,500itatdc,700itatdc,300,300itatdc&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php print base_path().path_to_theme(); ?>/js/fancybox2/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php print base_path().path_to_theme(); ?>/js/bxslider/jquery.bxslider.css" type="text/css" media="screen" />
	<style>
		@-webkit-keyframes scroll {
			0% {
				-webkit-transform: translate(0, 0);
				transform: translate(0, 0);
			}
			100% {
				-webkit-transform: translate(-100%, 0);
				transform: translate(-100%, 0)
			}
		}

		@-moz-keyframes scroll {
			0% {
				-moz-transform: translate(0, 0);
				transform: translate(0, 0);
			}
			100% {
				-moz-transform: translate(-100%, 0);
				transform: translate(-100%, 0)
			}
		}

		@keyframes scroll {
			0% {
				transform: translate(0, 0);
			}
			100% {
				transform: translate(-100%, 0)
			}
		}

		.announcement {
			width: 100%;
			color: #ff0000;
			font: 700 22px/32px Arial;
			white-space: nowrap;
			overflow: hidden;
			background-color: #a6b7bb;
			box-shadow: 0 1px 8px 0 #0000006b;
			text-shadow: 1px 1px #000;
		}
		.announcement span {
			display: inline-block;
			padding-left: 100%;
			-webkit-animation: scroll 15s infinite linear;
			-moz-animation: scroll 15s infinite linear;
			animation: scroll 15s infinite linear;
		}
	</style>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <script>jQuery.noConflict();</script>
		<!-- rusonyx -->
	</head>
<body>

<div class="wrapper">
    <header class="header">
        <div class="header_logo"><a href="/"><img src="<?php print base_path().path_to_theme(); ?>/img/header_logo2.png" alt=""></a></div>
        <div class="header_phones_new">
       	    <span>Бесплатный: 8-800-301-25-52</span>
	    <span>8-(496)-543-62-51</span>
            <span>8-(964)-543-13-48</span>
        </div>
        <div class="header_contacts" style="margin-top:0;">
            <?/*<div class="header_phones">
                <div class="header_phones_icon"></div>
                <span style="font-size: 20px;margin-bottom: 5px;margin-top: -10px;">Офис в Москве</span>
                <span>8-(964)-644-55-64</span>
                <span>8-(963)-650-44-88</span>
            </div>*/?>
            <div class="header_email" style="margin:0;">
                <div class="header_email_icon"></div>
                e-mail: <a href="mailto:ritual-95@yandex.ru" onclick="yaCounter6517690.reachGoal('klik-pochta'); return true;" >ritual-95@yandex.ru</a>
            </div>
            <a href="#callback" onclick="yaCounter6517690.reachGoal('zakazat-bespl-zvonok'); return true;" class="leftmenu_callback" id="leftmenuCallback"><img src="<?php print base_path().path_to_theme(); ?>/img/callback.png" alt=""></a>
        </div>
        <div class="header_center" style="padding-top: 18px;">
        	<?/*<div class="top_manager">
        		<span style="display: block;font-size: 20px;line-height: 1;margin-bottom: 5px;margin-top: -10px;">Главный офис</span>
        		8-(496)-543-62-51<br>
        		8-(496)-543-13-48
        	</div>*/?>
            <a href="#yamap" class="header_center_title fancybox" onclick="yaCounter6517690.reachGoal('kak-proehat'); return true;" >Как к нам проехать?</a>
            <div class="header_center_text">Наши специалисты бесплатно ответят на Ваши вопросы в сфере ритуальных услуг</div>
<!--             <a href="#consult" class="header_consult" id="headerConsult">
                <img src="<?php print base_path().path_to_theme(); ?>/img/header_consult.png" alt=""></a>
            </a> -->
        </div>
        <div class="clear"></div>
        <div class="header_menu">
            <?php print phptemplate_get_menu('primary-links',1,'table'); ?>
        </div>
    </header><!-- .header-->

    <div class="middle">
		<div class="announcement"><span>Внимание!!! Текущие цены на гранит и полимергранит не актуальны. Пожалуйста обращайтесь к менеджерам за подробностями.</span></div>

        <div class="container">

        	<aside class="left-sidebar">
        		<?php print $sidebar; ?>
        	    <div class="sidebar_title">Наш каталог</div>
        	    <div class="leftmenu">
        	    	<span class="gold" href="javascript:void(0)">Памятники</span>
        	        <?php print phptemplate_get_menu('menu-menu-granit'); ?>
        	        <?php print phptemplate_get_menu('menu-menu-extra',1,'ul',true); ?>
        	    </div>
        	    <br><br>
        	    <?php //print $left?>
        	</aside><!-- .left-sidebar -->

        	<?if(drupal_is_front_page()):?>
        		<main class="content">
					<?php print $index_top;?>
					<h1>Изготовление памятников из гранита и гранитопласта любой сложности!</h1>
					<div class="mainslider_wrapper">
						<div class="mainslider" id="mainSlider">
							<a href="javascript:void:(0);">
								<img src="<?php print base_path().path_to_theme(); ?>/img/mainslide_blank.jpg" alt="" width="740">
								<span>СОБСТВЕННОЕ ПРОИЗВОДСТВО</span>
							</a>
							<a href="javascript:void:(0);">
								<img src="<?php print base_path().path_to_theme(); ?>/img/mainslide_blank.jpg" alt="" width="740">
								<span>Ветеранам ВоВ, ветеранам труда и пенсионерам предоставляется<br> СКИДКА<br><small>(скидка предоставляется на гранитные памятники, в скидку не входит установка памятника)</small><h5 style="color:red;text-align:center">размер скидки можно уточнить у менеджера</h5></span>
							</a>
							<a href="javascript:void:(0);">
								<img src="<?php print base_path().path_to_theme(); ?>/img/mainslide_blank.jpg" alt="" width="740">
								<span>При повторном заказе гранитного памятника постоянная СКИДКА<br> <small>(не включает стоимость установки памятника)</small><h5 style="color:red;text-align:center">размер скидки можно уточнить у менеджера</h5></span>
							</a>
<!-- 							<a href="javascript:void:(0);">
								<img src="<?php print base_path().path_to_theme(); ?>/img/mainslide_blank.jpg" alt="" width="740">
								<span>Графика в ПОДАРОК на гранит на<br> сумму до 1000 рублей,<br> на полимергранит - на сумму<br> до 500 рублей </span>
							</a> -->
							<a href="javascript:void:(0);">
								<img src="<?php print base_path().path_to_theme(); ?>/img/mainslide_blank.jpg" alt="" width="740">
								<span>При заказе на сумму более 60 000 рублей СКИДКА<br> <small>(скидка предоставляется на гранитные памятники, в скидку не входит установка памятника)</small><h5 style="color:red;text-align:center">размер скидки можно уточнить у менеджера</h5> </span>
							</a>
						</div>
					</div>
					<br>

					<div class="h1">Почему нас выбирают?</div><br>
					
					<!--<div class="col3 why">
						<img src="<?php print base_path().path_to_theme(); ?>/img/why1.jpg" alt="">
						<br><br>
						ПРИЯТНЫЕ ЦЕНЫ И <br>
						КВАЛИФИЦИРОВАННЫЙ<br>
						ПЕРСОНАЛ
					</div>
					<div class="col3 why">
						<img src="<?php print base_path().path_to_theme(); ?>/img/why2.jpg" alt="">
						<br><br>
						СОБСТВЕННОЕ<br>
						ПРОИЗВОДСТВО И<br>
						ТЕХНОЛОГИИ
					</div>
					<div class="col3 why">
						<img src="<?php print base_path().path_to_theme(); ?>/img/why3.jpg" alt="">
						<br><br>
						ИЗГОТОВЛЕНИЕ<br>
						ТОЧНО В УКАЗАННЫЕ<br>
						СРОКИ
					</div>-->

					<p>Собственное производство. Более 15 лет успешной работы. Наша фирма предлагает надгробия, памятники, кресты, цветочницы,
					вазы, скамейки, столы, кованые ограды (более 50 наименований образцов с портретами, надписями и другими декоративными 
					элементами). Срок исполнения заказа от 7 до 14 дней.</p>

					<p>По желанию заказчика наша фирма оказывает услуги по доставке и установке памятников. Наши изделия изготовлены из не
					имеющего аналогов материала «гранитопласт», являющегося уникальной военно-технической разработкой. Основой материала
					является гранитная крошка в сочетании с финским высокопрочным полимером в соотношении 5 к 2.</p>

					<div class="clear"></div>
				</main>
				<!--<div class="special">
					<div class="special_left">
						<div class="middle_logo"><img src="<?php print base_path().path_to_theme(); ?>/img/middle_logo.png" alt=""></div>
						<div class="special_left_text">
							В стоимость памятника входит <br>
							гравировка стандартного <br>
							портрета и Ф.И.О.
							<br><br><br>
							Установка: 5500 руб. <br>
							(по Московской области)
						</div>
					</div>
					<div class="special_center">
						<div class="special_title">Специальное предложение <span>действительно до 31 сентября</span></div>
						<div class="special_photo"><img src="<?php print base_path().path_to_theme(); ?>/img/middle_special.png" alt=""></div>
						<div class="special_text">
							<div class="special_text_title">Гранитный памятник - 14 000 руб.</div>
							стела - 60х40х5<br>
							тумба - 50х15х15<br>
							цветник - 80х10х5<br><br>
							Вы можете заказать <br>
							изделие прямо сейчас<br><br>
							<a href="#order" class="middle_order" id="elementOrder"><img src="<?php print base_path().path_to_theme(); ?>/img/middle_order.png" alt=""></a>
							или позвонить нам <span>8-(496)-543-62-51</span><br>
						</div>
						<div style="display:none;">
							<div class="form form_order" id="order">
								<div class="form_title">ОФОРМИТЬ ЗАКАЗ</div>
								<div class="form_desc">Заполните форму. С Вами свяжется наш специалист в ближайшее время и уточнит детали заказа.</div>
								<div class="clear"></div>
								<div class="form_left">
									<div class="form_element_title">14 000 руб.</div>
									<div class="form_element_photo"><img src="<?php print base_path().path_to_theme(); ?>/img/middle_special.png" alt=""></div>
									<div class="form_element_desc">
										<ul>
											<li>- стела 60х40х5</li>
											<li>- тумба 50х15х15</li>
											<li>- цветник 80х10х5</li>
										</ul>
									</div>
								</div>
								<div class="form_right">
									<div class="form_label"><label for="order_name">Представьтесь пожалуйста</label></div>
									<div class="form_input"><input id="order_name" name="order_name" type="text" value="" placeholder="Например, Светлана"></div>
									<div class="form_label"><label for="order_phone" class="required">Телефон* <span>(обязательно)</span></label></div>
									<div class="form_input"><input id="order_phone" class="required" name="order_phone" type="text" value="" placeholder="8-XXX-XXX-XX-XX"></div>
									<div class="form_label"><label for="order_email">E-mail</label></div>
									<div class="form_input"><input id="order_email" name="order_email" type="text" value="" placeholder="xxxxx@xxx.xx"></div>
									<div class="form_desc">На Вашу почту будет выслано финальное подтверждение и счёт для оплаты. Заказ считается негарантированным до подтверждения заявки менеджером фирмы. Если в ближайшее время подтверждение не будет получено, свяжитесь с нами напрямую</div>
									<div class="form_submit"><a id="formSubmit" href="javascript:void(0);"><img src="<?php print base_path().path_to_theme(); ?>/img/form_submit.png" alt=""></a></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>-->
				<main class="content2">
					<?php print $index_bottom;?>

					<br>

					<div class="h1">МОДЕЛИ, КОТОРЫЕ ЧАЩЕ ВСЕГО ВЫБИРАЮТ</div>

					<div class="section">
						<?php print randomize_on_main();?>
						<div class="clear"></div>
					</div>
					
					<br>
					<h2>Преимущества материала:</h2>
					<ul>
					<li>- по твердости близок к природному камню;</li>
					<li>- не деформируется при температуре от минус 50 до +50 С;</li>
					<li>- полная защита от влаги (даже находясь в воде не меняет цвет и форму, независимо от времени воздействия);</li>
					<li>- изделия из «гранитопласта» легче и дешевле гранитных аналогов в 3-4 раза;</li>
					<li>- долговечность изделия и его технические характеристики, в т.ч. прочность и внешний вид, зависят от правильной установки и эксплуатации, но не уступают по долговечности изделиям из натурального гранита.</li>
					</ul>

					<p><span class="b">ОСОБОЕ ВНИМАНИЕ: ОСТЕРЕГАЙТЕСЬ ПОДДЕЛОК!</span><br>
					Существуют дешевые памятники из похожего материала, изготовленные кустарным способом без соблюдения технологии. <br>
					Срок существования таких подделок не более 2-х лет.</p>
				</main>
        	<?else:?>
	            <main class="content">
	            	<?/* //тип материала
	            		if (arg(0) == 'node' && is_numeric(arg(1))) {
		            		$node_type = $node->type;
		            		$node_title = $node->title;
		            		echo "<pre>";
		            		print_r($node);
		            		print_r($taxonomy);
		            		print_r(taxonomy_node_get_terms($node));
		            		echo "</pre>";
	            		}
	            	*/
	            		// print_r(menu_get_active_breadcrumb());
	            		// print_r(phptemplate_breadcrumb());
	            		// print_r(drupal_get_breadcrumb());
	            		// print_r(theme_breadcrumb());
	            		// print_r(theme_breadcrumb($breadcrumb));
	            		
	            		// echo "<pre>";
	            		// print_r($node->taxonomy);
	            		// print_r(taxonomy_node_get_terms($node));
	            		// print_r(taxonomy_get_term($node->taxonomy[2]->tid));
	            		// print_r(drupal_get_path_alias('2'));
	            		// echo "</pre>";
	            	?>
	            	<div class="bcrumbs">
		            	<?if($node->type!='product'):?>
							<a href="/">Главная</a> / <?php print drupal_get_title(); ?>
		            	<?else:?>
		            		<a href="/">Главная</a>
		            		<?
		            			foreach ($node->taxonomy as $taxonomy) {
		            				echo '/ <a href="/'.drupal_get_path_alias('group/'.$taxonomy->tid).'">'.$taxonomy->name.'</a>';
		            			}
		            		?>
		            		/ <?php print drupal_get_title(); ?>
							<?php// print $breadcrumb; ?>
		            	<?endif;?>
	            	</div>
<?
// echo "<pre>";
// print_r($node);
// echo "</pre>";
?>
	            	<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'<li><a href="/node/'.$node->nid.'/delete">Удалить</a></li></ul>'; endif; ?>
	            	<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>

					<?
						$secondary_links = phptemplate_get_menu('secondary-links', 2,'ul');
						$additional_menu = phptemplate_get_menu('menu-additional-menu', 2,'ul');
					?>
					<?if($secondary_links!='' || $additional_menu!=''):?>
		            	<div class="clear-block sub-menu">
		            	    <?php print $secondary_links; ?>
		            	    <?php print $additional_menu; ?>
		            	</div>
	            	<?endif;?>


	                <?php/* print $breadcrumb; ?>
	                            <?php if ($breadcrumb && $breadcrumb != '<div class="breadcrumb"></div>'): print '<div id="breadcrumb">'.t('You are here: ').$breadcrumb.'</div>';
	            else: print '<div id="breadcrumb">'.t('You are here: ').'<a href="/">Home</a></div>'; 
	            endif; */?>   
	                


	                <?php if ($show_messages && $messages): print $messages; endif; ?>


	                <?php print $content_top; ?>
	                <?php print $content; ?>
	                <?php print $content_bottom; ?>

	                <?php if ($node->path=='about' || $node->path=='контакты'): ?>
	                	<div class="form simple">
							<p style="font-size:140%;line-height:1.3">Вы можете связаться с нами прямо по телефону <span class="bold">8-800-301-25-52</span> <br>или заполнив краткую форму:</p>
							<div class="form_label"><label for="callback_name2">Представьтесь пожалуйста</label></div>
							<div class="form_input"><input id="callback_name2" name="form_name" type="text" value="" placeholder="Например, Светлана"></div>
							<div class="form_label"><label for="callback_phone2" class="required">Телефон* <span>(обязательно)</span></label></div>
							<div class="form_input"><input id="callback_phone2" class="required" name="form_phone" type="text" value="" placeholder="8-XXX-XXX-XX-XX"></div>
							<div class="form_submit"><a id="callbackSubmit2" href="javascript:void(0);"><img src="/sites/all/themes/Ritual95_2015/img/form_submit.png" alt=""></a></div>
						</div><br>
	                <?endif;?>

	                <div class="clear"></div>
	            </main><!-- .content -->
            <?endif;?>

        </div><!-- .container-->

    </div><!-- .middle-->

</div><!-- .wrapper -->

<footer class="footer">
    <div class="footer_wrapper">
        <div class="footer_menu">
            <?php print phptemplate_get_menu('primary-links',1,'table'); ?>
        </div>
        <div class="footer_logo"><a href="/"><img src="<?php print base_path().path_to_theme(); ?>/img/footer_logo.png" alt=""></a></div>
        <a href="#consult" onclick="yaCounter6517690.reachGoal('kons-proved-pohoron'); return true;" class="footer_consult" id="footerConsult">
            <img src="<?php print base_path().path_to_theme(); ?>/img/footer_consult.png" alt="">
        </a>
        <div class="footer_center">
            Московская область, Сергиево-Посадский район,<br>
            г. Хотьково, Абрамцевское шоссе, Строение 5.
        </div>
        <div class="clear"></div>
        <div class="footer_line"></div>
        <div class="footer_links">
            <a href="/polimer">ПОЛИМЕРГРАНИТ</a>
            <a href="/granite">ГРАНИТ</a>
            <a href="/colorgranite">ЦВЕТНОЙ ГРАНИТ</a>
        </div>
        <div class="footer_links">
            <a href="/complexes">КОМПЛЕКСЫ</a>
            <a href="/mramor">МРАМОР</a>
            <a href="/group/7">ОГРАДЫ</a>
        </div>
        <div class="footer_links">
            <a href="/decoration">ОФОРМЛЕНИЕ</a>
            <a href="/node/566">РИТУАЛЬНЫЕ УСЛУГИ</a>
            <a href="/цветники-область-2014-г">ЦВЕТНИКИ</a>
        </div>
        <div class="footer_contacts">
            <div><a href="#yamap" class="fancybox" onclick="yaCounter6517690.reachGoal('kak-proehat'); return true;" >Как к нам проехать?</a> &nbsp; &nbsp; &nbsp; <span>e-mail:</span> <a href="mailto:ritual-95@yandex.ru" onclick="yaCounter6517690.reachGoal('klik-pochta'); return true;" >ritual-95@yandex.ru</a></div>
            <div style="display:none;position:fixed;top:-10000px;">
            	<div id="yamap">
            		<!-- <img src="/sites/default/files/map.jpg" alt=""> -->
            		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A74c146c324b5f8bb1fa16b9581da24005892a857de213c354f60be6b20911ffe&width=600&height=450"></script>
            	</div>
            </div>
            <div><span class="big">8-(496)-543-62-51</span> &nbsp; &nbsp; &nbsp; <span class="big">8-(496)-543-13-48</span></div>
        </div>
        <div class="clear"></div>
    </div>
</footer><!-- .footer -->

<a class="topbutton" id="topButton" style="display:none;">
    <img src="<?php print base_path().path_to_theme(); ?>/img/topbutton.png" alt="">
</a>

<div style="display:none;">
    <div class="form" id="consult">
        <div class="form_title">Консультация по проведению похорон</div>
        <div class="form_desc">Заполните форму. С Вами свяжется наш специалист в ближайшее время и ответит на все вопросы.</div>
        <div class="form_label"><label for="consult_name">Представьтесь пожалуйста</label></div>
        <div class="form_input"><input id="consult_name" name="form_name" type="text" value="" placeholder="Например, Светлана"></div>
        <div class="form_label"><label for="consult_phone" class="required">Телефон* <span>(обязательно)</span></label></div>
        <div class="form_input"><input id="consult_phone" class="required" name="form_phone" type="text" value="" placeholder="8-XXX-XXX-XX-XX"></div>
        <div class="form_label"><label for="consult_text">Вопрос</label></div>
        <div class="form_input"><textarea name="form_text" id="consult_text" placeholder="Здесь Вы можете кратко описать интересующие Вас моменты."></textarea></div>
        <div class="form_submit"><a id="consultSubmit" href="javascript:void(0);" onclick="yaCounter6517690.reachGoal('otpravit-kons-proved'); return true;" ><img src="<?php print base_path().path_to_theme(); ?>/img/form_submit.png" alt=""></a></div>
    </div>
</div>

<div style="display:none;">
    <div class="form" id="callback">
        <div class="form_title">Заказать бесплатный звонок</div>
        <div class="form_desc">Заполните форму. С Вами свяжется наш специалист.</div>
        <div class="form_label"><label for="callback_name">Представьтесь пожалуйста</label></div>
        <div class="form_input"><input id="callback_name" name="form_name" type="text" value="" placeholder="Например, Светлана"></div>
        <div class="form_label"><label for="callback_phone" class="required">Телефон* <span>(обязательно)</span></label></div>
        <div class="form_input"><input id="callback_phone" class="required" name="form_phone" type="text" value="" placeholder="8-XXX-XXX-XX-XX"></div>
        <div class="form_submit"><a id="callbackSubmit" href="#" onclick="yaCounter6517690.reachGoal('otpravit-besp-zvon'); return true;"><img src="<?php print base_path().path_to_theme(); ?>/img/form_submit.png" alt=""></a></div>
    </div>
</div>

<?php print $closure ?>

<div class="widgets">
<!-- Yandex.Metrika informer -->
<a class="metrika" href="https://metrika.yandex.ru/stat/?id=6517690&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/6517690/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="6517690" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(6517690, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/6517690" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- antivirus-alarm.ru -->
<a href="http://antivirus-alarm.ru/proverka/?url=ritual95.ru"><img src="http://antivirus-alarm.ru/images/checked_v1.gif" width="88" height="31" title="Результаты антивирусного сканирования" /></a>
<!-- antivirus-alarm.ru -->
</div>

</body>

<script src="https://yastatic.net/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php print base_path().path_to_theme(); ?>/js/fancybox2/jquery.fancybox.pack.js"></script>
<script src="<?php print base_path().path_to_theme(); ?>/js/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php print base_path().path_to_theme(); ?>/js/main.js"></script>

</html>
