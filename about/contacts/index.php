<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?>

	<p>
		<b>Телефон:</b> 8 (495) 000 00 00<br>
		<b>Адрес:</b> г. Самара, ул. 2-я Хуторская, д. 38
	</p>
	<div class="mb-2 embed-responsive embed-responsive-16by9">
		<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5cd45b89502908d8b21763155f3d8f323c9060c741f8165317d4b5e48f474891&amp;source=constructor" width="100%" height="490" frameborder="0"></iframe>		
	</div>
	<div class="mb-4">
		<small><a href="https://yandex.ru/maps/?um=constructor%3A5cd45b89502908d8b21763155f3d8f323c9060c741f8165317d4b5e48f474891&source=constructorLink" style="text-align:left">Просмотреть увеличенную карту</a></small>
	</div>
	<h2>Задать вопрос</h2>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.feedback",
		"bootstrap_v4",
		Array(
			"EMAIL_TO" => "sale@nyuta.bx",
			"EVENT_MESSAGE_ID" => array(),
			"OK_TEXT" => "Спасибо, ваше сообщение принято.",
			"REQUIRED_FIELDS" => array("NAME","EMAIL"),
			"USE_CAPTCHA" => "Y"
		)
	);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>