<?
//$mail_to = 'zakaz@ritual95.ru';
$mail_to = 'vladimirvolkov001@yandex.ru';

//consut
if($_POST['action']=='consult'){
	foreach ($_POST as $key => $val) {
		$$key = trim(htmlspecialchars($val));
	}
	if($phone=='' || strlen($phone)<3){
		echo 'error';
		die();
	}

	$subject="Сообщение с сайта ritual95.ru - Консультация по проведению похорон";
	$header[]="MIME-Version: 1.0";
	$header[]="Content-type: text/html; charset=\"utf-8\"";
	// $header[]="From: ".$name." <".$email.">";
	$header[]="Reply-To: ".$name." <".$email.">";
	$header[]="Subject: ".$subject;
	$header[]="X-Mailer: PHP/".phpversion();
	$msg='Имя: '.$name.'<br>';
	$msg.='Телефон: '.$phone.'<br>';
	// $msg.='EMail: '.$email.'<br>';
	$msg.='Текст: '.$text.'<br>';
	$res=mail($mail_to, $subject, $msg, implode("\r\n", $header));
	if(!$res)
		echo '<div class="form_title">Ошибка</div>
	    <div class="form_desc">В данный момент мы не сможем ответить вам по почте, пожалуйста, позвоните нам!</div>';
	else{
		echo '<div class="form_title">Спасибо</div>
        <div class="form_desc">Ваша заявка успешно отправлена.</div>';
	}
}

//callback
if($_POST['action']=='callback'){
	$mail_to = 'ritual-95@yandex.ru';
	foreach ($_POST as $key => $val) {
		$$key = trim(htmlspecialchars($val));
	}
	if($phone=='' || strlen($phone)<3){
		echo 'error';
		die();
	}

	$subject="Сообщение с сайта ritual95.ru - Заказ бесплатного звонка";
	$header[]="MIME-Version: 1.0";
	$header[]="Content-type: text/html; charset=\"utf-8\"";
	// $header[]="From: ".$name." <".$email.">";
	$header[]="Reply-To: ".$name." <".$email.">";
	$header[]="Subject: ".$subject;
	$header[]="X-Mailer: PHP/".phpversion();
	$msg='Имя: '.$name.'<br>';
	$msg.='Телефон: '.$phone.'<br>';
	$res=mail($mail_to, $subject, $msg, implode("\r\n", $header));
	if(!$res)
		echo '<div class="form_title">Ошибка</div>
	    <div class="form_desc">В данный момент мы не сможем ответить вам по почте, пожалуйста, позвоните нам!</div>';
	else{
		echo '<div class="form_title">Спасибо</div>
        <div class="form_desc">Заявка успешно отправлена. В течение 15 минут наш специалист свяжется с Вами.</div>';
	}
}

//special
if($_POST['action']=='special'){
	foreach ($_POST as $key => $val) {
		$$key = trim(htmlspecialchars($val));
	}
	if($phone=='' || strlen($phone)<3){
		echo 'error';
		die();
	}
	$text = str_replace('src="', 'src="http://'.$_SERVER['HTTP_HOST'], $text);

	$subject="Сообщение с сайта ritual95.ru - Заказ памятника по спецпредложению";
	$header[]="MIME-Version: 1.0";
	$header[]="Content-type: text/html; charset=\"utf-8\"";
	// $header[]="From: ".$name." <".$email.">";
	$header[]="Reply-To: ".$name." <".$email.">";
	$header[]="Subject: ".$subject;
	$header[]="X-Mailer: PHP/".phpversion();
	$msg='Имя: '.$name.'<br>';
	$msg.='Телефон: '.$phone.'<br>';
	$msg.='E-mail: '.$email.'<br>';
	$msg.='Заказ: '.$text.'<br>';
	$res=mail($mail_to, $subject, $msg, implode("\r\n", $header));
	if(!$res)
		echo '<div class="form_title">Ошибка</div>
	    <div class="form_desc">В данный момент мы не сможем ответить вам по почте, пожалуйста, позвоните нам!</div>';
	else{
		echo '<div class="form_title">Спасибо</div>
        <div class="form_desc">Ваша заявка успешно отправлена.</div>';
	}
}

//fastbuy
if($_POST['action']=='fastbuy'){
	$mail_to = 'ritual-95@yandex.ru';
	foreach ($_POST as $key => $val) {
		$$key = trim(htmlspecialchars($val));
	}
	if($phone=='' || strlen($phone)<3){
		echo 'error';
		die();
	}
	$text = str_replace('src="', 'src="http://'.$_SERVER['HTTP_HOST'], $text);

	// 2 Полимергранит
	// 1 Гранит
	// 6 Цветной гранит
	// 3 Мрамор
	if(in_array($taxonomy_id, array(2,1,6,3)))
		$mail_to = 'ritual-95@yandex.ru';
		// $mail_to = 'zakaz@ritual95.ru';

	$subject="Сообщение с сайта ritual95.ru - Заказ памятника Купить в один клик";
	$msg.='Телефон: '.$phone.'<br>';
	$msg.='Заказ: '.htmlspecialchars_decode($text).'<br>';

	require_once('class.phpmailer.php');
	$mail_body=$msg;
	//Отправка
	$mail             = new PHPMailer();
	$mail->SetFrom('zakaz@ritual95.ru', '');
	$mail->Subject    = $subject;
	$mail->MsgHTML($mail_body);
	$mail->CharSet           = 'utf-8';
	$mail->AddAddress($mail_to, "");

	if(!$mail->Send())
		echo '<div class="form_close"></div><div class="form_title">Ошибка</div>
	    <div class="form_desc">В данный момент мы не сможем ответить вам по почте, пожалуйста, позвоните нам!</div>';
	else{
		echo '<div class="form_close"></div><div class="form_title">Спасибо</div>
        <div class="form_desc">Ваша заявка успешно отправлена.</div>';
	}
}

//order
if($_POST['action']=='order'){
	foreach ($_POST as $key => $val) {
		$$key = trim(htmlspecialchars($val));
	}
	if($phone=='' || strlen($phone)<3){
		echo 'error';
		die();
	}
	$text = str_replace('src="', 'src="http://'.$_SERVER['HTTP_HOST'], $text);

	// 2 Полимергранит
	// 1 Гранит
	// 6 Цветной гранит
	// 3 Мрамор
	if(in_array($taxonomy_id, array(2,1,6,3)))
		$mail_to = 'zakaz@ritual95.ru';

	$subject="Сообщение с сайта ritual95.ru - Заказ памятника";
	$msg='';
	$msg.='<style type="text/css">
	    table {}
	    table thead th { text-align: center; font-size: 20px }
	    table tbody th { text-align: right }
	</style>
	<table width="100%">
	    <thead>
	    <tr><th colspan="2">Заказ</th></tr>
	    </thead>
	    <tbody>
	    <tr>
	        <th width="20%">Наименование:</th>
	        <td>'.$title.'</td>
	    </tr>
	    <tr>
	        <th>Описание:</th>
	        <td>
	            <p>'.htmlspecialchars_decode($desc).'</p>
	        </td>
	    </tr>
	    <tr>
	        <th>Цена:</th>
	        <td>'.$price.'</td>
	    </tr>
	    <tr><td colspan="2"><hr /></td></tr>
	    <tr>
	        <th>Имя заказчика:</th>
	        <td>'.$name.'</td>
	    </tr>
	    <tr>
	        <th>Контактный телефон:</th>
	        <td>'.$phone.'</td>
	    </tr>
	    <tr>
	        <th>E-mail:</th>
	        <td>'.$email.'</td>
	    </tr>
	    </tbody>
	</table>';

	require_once('class.phpmailer.php');
	$mail_body=$msg;
	//Отправка
	$mail             = new PHPMailer();
	$mail->SetFrom('zakaz@ritual95.ru', '');
	$mail->Subject    = $subject;
	$mail->MsgHTML($mail_body);
	$mail->CharSet           = 'utf-8';
	$mail->AddAddress($mail_to, "");

	if(!$mail->Send())
		echo '<div class="form_title">Ошибка</div>
	    <div class="form_desc">В данный момент мы не сможем ответить вам по почте, пожалуйста, позвоните нам!</div>';
	else{
		echo '<div class="form_title">Спасибо</div>
        <div class="form_desc">Ваша заявка успешно отправлена.</div>';
	}
}

?>