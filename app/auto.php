<?php
	require_once('integration_vtiger/ModelIntegration.php');
	$leadsource 				= 'Landing-авто';
	$calltracking 			= TRUE;
	$module_integration = new ModelIntegration($leadsource, $calltracking);
	$hidden_inpunt 			= $module_integration->generate_hidden_inputs();
?>


<!DOCTYPE html>
<html lang="ru">
	<head>

		<meta charset="utf-8">
		<title>Golden Media Group</title>
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta property="og:image" content="path/to/image.jpg">
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="libs/jquery-ui-1.9.2.custom/css/jquery-ui-1.9.2.custom.min.css">
		<link rel="stylesheet" href="css/main.min.css">
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#000">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#000">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	</head>
	<body class="page-auto">
			<!-- Yandex.Metrika counter -->
				<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43965724 = new Ya.Metrika({ id:43965724, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43965724" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
				 <!-- /Yandex.Metrika counter -->



	<!-- <div id="page-preloader"><span class="spinner"></span></div> -->
		<header>
			<div class="wrap-paralax">
			<div class="topper-wrap">
				<div class="top-head">
					<div class="container">
						<div class="row">
							<div class="resp-mnu">
								<i class="fa fa-bars" aria-hidden="true"></i>
								<!-- <a class="phone-num" href="tel:88001238080">8 (800) 123-80-80</a> -->
							</div>
							<nav>
								<ul>
									<li><a href="#why-we" class="to-id">Почему мы?</a></li>
									<li><a href="#bus" class="to-id">Портфолио и отзывы</a></li>
									<li><a href="#calculator" class="to-id">Калькулятор</a></li>
									<li><a href="#about" class="to-id">О нас</a></li>
									<li><a href="#contacts" class="to-id">Контакты</a></li>
								</ul>
							</nav>
							<div class="col-xs-6 col-sm-2 col-md-4 col-lg-4 logo-col">
								<div class="xs-wrap"><img class="logo" src="./img/logo.png">
															<p class="slogan hidden-sm"><span>Реклама на транспорте</span> <br> в 94 городах России</p></div>
							</div>
							<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 email-col">
							<div class="xs-wrap">
								<div class="mail">
									<img src="img/mail-icon.png" class="hidden-sm">
									<div class="wrap">
										<a class="email underline" href="#" data-clipboard-text="sales@cmg-nsk.ru">sales@cmg-nsk.ru</a><br>
										<p>Напишите нам в любое время!</p>
										<div class="cb-message">e-mail скопирован</div>
									</div>
								</div>
							</div>
							</div>
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 message-col">
								<div class="message">
									<img class="bell-img" src="img/bell.png">
									<span class="number">+2</span>
									<ul class="message-box">
										<li class="message-item">
											<img src="img/clients-icon.png">
											<h5>Четыре по цене трех</h5>
											<div id="timer-1" class="timer">
												<div class="hour"></div>
											</div>
											<p class="message-text">При размещении рекламы<br> на транспорте на три месяца, <br>четвертый — бесплатно!</p>
											</link>
										<li class="message-item">
											<img src="img/clients-icon.png">
											<h5>В салоне — 20% !</h5>
											<div id="timer-2" class="timer">
											</div>
											<p class="message-text">Внутрисалонная реклама — 20%<br> при заказе рекламы <br>на транспорте на любую сумму!</p>
										</li>
										<a class="button to-id popup-with-form " href="#test-form">Заказать звонок</a>
							</ul>
								</div>
								<div class="phone">
									<img src="img/phone-icon.png" class="hidden-sm">
									<div class="wrap">
										<a class="phone-num underline popup-with-form include-phone" href="#test-form">8 (800) 123-80-80</a><br>
										<p>Мы всегда рады Вашему звонку!</p>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 call">
								<div class="xs-wrap">
								<a class="btn popup-with-form" href="#test-form">Закажите звонок</a>
								<p>Перезвоним за 1 минуту!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row description">
					<h1>Брендирование корпоративного транспорта</h1>
						<h2>Заставьте Ваши автомобили<span class="text-orange"> работать на максимум!</span>
						</h2>
					<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

						<p class="descr">
							Идеально подойдет, если Ваша цель стать <span class="text-orange">top of the mind — БЫТЬ ПЕРВЫМ</span>
							в списке компаний, о которых вспомнит Ваш клиент перед покупкой или рекомендацией!
						</p>
						<div class="cols col-xs-12 col-sm-6 col-md-6 col-lg-5">
							<h2 class="with-bg">Корпоративный транспорт</h2>
							<ul>
								<li><a href="#auto" class="to-id">Легковой / Фургоны</a></li>
								<li><a href="#van" class="to-id">Грузовой / Спецтехника</a></li>
								<li><a href="#bus" class="to-id">Тенты / Фуры</a></li>
							</ul>
							<p class="text-orange"> от 1,2 до 100 м²</p>
						</div>
						<div class="cols col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-2">
							<h2 class="with-bg">Сервис</h2>
							<p>Любая сложность проекта <br>
								Мониторинг качества. Фотоотчеты <br>
								Реальные скидки до 40%. Гарантия<br>
								<span class="text-orange">Работаем на результат!</span>
							</p>
						</div>
					</div>
				</div>
				<a class="mouse-scroll to-id" href="#steps"><img src="img/mouse-scroll.png"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
			</div>
			<div class="parallax-bg auto">
				<!-- <img class="bg-img" src="img/header-bg.jpg"> -->
			</div>
			</div>
		</header>
		<section class="steps" id="steps">
			<div class="container">
				<h2>МЕЖДУ ВАМИ И ВАШЕЙ РЕКЛАМОЙ <span class="text-orange">ВСЕГО 2 ШАГА</span></h2>
				<h3  id="steps-h">мы работаем с любым бизнесом</h3>
				<div class="steps-wrap">
					<div class="row">
						<div class="step">
							<div class="wrap-img"><img src="img/order-icon.png"></div>
							<h4><a href="#test-form" class="popup-with-form">Оформление заявки</a></h4>
						</div>
						<div class="step arrow"><div class="wrap-img"><img src="img/arrow.png"></div></div>
						<div class="step">
							<div class="wrap-img"><img src="img/clients-icon.png"></div>
							<h4>Клиенты из offline</h4>
						</div>
					</div>
					<div class="row">
						<h4>
							<a href="#" class="toogle-stats" id="first-stat">Остальное сделаем МЫ</a>
							<a href="#" class="toogle-stats" id="second-stat">Запуск через 7 календарных дней после Вашего «ДА!»</a>
						</h4>
						<div class="stats-wrap stats-wrap-1">
							<div class="stats-block">
								<p class="number">5730<sup>+</sup><span class="details">Реализованных проектов</span></p>
							</div>
							<div class="stats-block">
								<p class="number">30000<sup>+</sup><span class="details">Наружных поверхностей</span></p>
							</div>
							<div class="stats-block">
								<p class="number">100000<sup>+</sup><span class="details">Внутрисалонных поверхностей</span></p>
							</div>
						</div>
						<div class="stats-wrap stats-wrap-2">
							<div class="stat-circles">
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="1" data-width="1" data-fontsize="16" data-percent="14" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent">
									</div>
										<h5>Согласование<br>деталей</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="2" data-width="1" data-fontsize="16" data-percent="28" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Заключение<br>договора</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="3" data-width="1" data-fontsize="16" data-percent="42" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Предоплата<br>оплата</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="4" data-width="1" data-fontsize="16" data-percent="56" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Согласование<br>макета</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="5" data-width="1" data-fontsize="16" data-percent="70" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Изготовление</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="6" data-width="1" data-fontsize="16" data-percent="84" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Монтаж</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="7" data-width="1" data-fontsize="16" data-percent="100" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Завершение<BR>проекта<br>фотоотчет</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="why-we" id="why-we">
			<div class="container">
				<div class="col-sm-12 col-sm-12 col-md-8 col-lg-8">
					<h2 class="underline light"><strong>Почему <span class="text-orange">МЫ</span></strong></h2>
					<div class="reasons-wrap">
						<div class="reason-block">
							<span class="circle-num">01</span>
							<p>Гарантируем единые стандарты<br> и высокое качество услуг на всей территории страны для проектов любого масштаба.
							</p>
						</div>
						<div class="reason-block">
							<span class="circle-num">02</span>
							<p>Мы единственное рекламное
								агентство из Новосибирска в
								Топ-20 в рубрике «Реклама на
								транспорте» по России РРАР-2016.
							</p>
						</div>
					</div>
					<div class="reasons-wrap">
						<div class="reason-block">
							<span class="circle-num">03</span>
							<p>
							Опытные монтажные бригады
								работают круглосуточно, чтобы
								Ваша реклама была смонтирована
								и демонтирована четко в срок.
							</p>
						</div>
						<div class="reason-block">
							<span class="circle-num">04</span>
							<p>Геотаргетирование по округам, районам, улицам. Запуск рекламы уже через 7 календарных дней после Вашего «ДА!»
							</p>
						</div>
					</div>
				</div>
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<div class="request-call">
						<h3 class="text-orange">Закажите звонок</h3>
						<p>Персональный менеджер
							подберет специальное
							предложение для Вас!
						</p>
						<form class="two-fields">
							<input type="text" placeholder="Имя"  name="firstname">
							<input type="text" class="phone" placeholder="Телефон"  name="mobile">
							<button type="submit" class="pulse">Отправить</button>
							<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером!<br><br>
Мы делаем все, что касается оформления рекламно-информационного изображения на любых поверхностях.</p>
<?php echo $hidden_inpunt; ?>
						</form>
						<p>Нам удается угадывать
							Ваши пожелания
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="join-us" id="join-us">
			<div class="container">
				<h2 class="underline"><strong>Присоединяйтесь</strong><br>
					к хорошей компании <span class="text-orange">наших клиентов</span>
				</h2>
				<div class="row partners">
					<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
						<div class="partner-block"><img src="img/partner-1.jpg" alt=""></div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
						<div class="partner-block"><img src="img/partner-2.jpg" alt=""></div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
						<div class="partner-block"><img src="img/partner-3.jpg" alt=""></div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
						<div class="partner-block"><img src="img/partner-4.png" alt=""></div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
						<div class="partner-block"><img src="img/partner-5.jpg" alt=""></div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
						<div class="partner-block"><img src="img/partner-6.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</section>
		<section class="bus work-part">
			<div class="container">
				<h2 class="underline"><strong>Примеры</strong><br>Нашей работы</h2>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 pdnl-null">
					<div class="wrap-outer-s">
						<div class="works-slide">
							<div class="subslides">
								<div class="slide-wrap gallery">
								<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 6 500 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-auto/auto/denso/denso-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/denso/denso-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/denso/denso-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/denso/denso-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/denso/denso-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/denso/denso-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/nsk/nsk-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/nsk/nsk-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/nsk/nsk-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/nsk/nsk-2.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/my-town/my-town-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/my-town/my-town-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/my-town/my-town-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/my-town/my-town-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/my-town/my-town-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/my-town/my-town-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/oem/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/oem/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/oem/2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/oem/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/oem/3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/oem/3.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/auto/oem/4.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/auto/oem/4.jpg"></a></div>
							</div>
						</div>
					</div>
					<div class="wrap-inner-s">
						<div class="works-slide inner">
							<div class="subslides">
								<div class="slide-wrap gallery">
									<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 14 500 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-auto/van/grifon/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/grifon/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/grifon/2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/grifon/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/grifon/3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/grifon/3.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/grifon/4.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/grifon/4.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/komatsu/komatsu-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/komatsu/komatsu-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/komatsu/komatsu-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/komatsu/komatsu-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/komatsu/komatsu-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/komatsu/komatsu-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/eldorado/eldorado-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/eldorado/eldorado-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/eldorado/eldorado-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/eldorado/eldorado-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/van/eldorado/eldorado-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/van/eldorado/eldorado-3.jpg"></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4"  id="auto">
					<div class="tabs">
						<div class="tabs-nav">
							<a href="#" data-target="tab-content-1" class="tab active">Легковой </a>
							<a href="#" data-target="tab-content-2" class="tab">Фургоны</a>
						</div>
						<div class="tab-content tab-content-1 active">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/auto/denso-logo.jpg"></div>
									<div>
										<span>Denso</span>
										<div class="other-inf">
											РК «DENSO — в твоем городе!», 2012
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/auto/nsk-logo.png"></div>
									<div>
										<span>NSK-авто</span>
										<div class="other-inf">
											РК «Брендирование автомобилей для тест-драйва», 2014
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/auto/my-town-logo.png"></div>
									<div>
										<span>Мой город</span>
										<div class="other-inf">
											РК «Брендирование корпоративного парка такси «Мой город», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/auto/oem-logo.jpg"></div>
									<div>
										<span>OEM SOLUTIONS</span>
										<div class="other-inf">
											РК «Новый дизайн OEM SOLUTIONS», 2016
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="tab-content tab-content-2">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/van/grifon-logo.png"></div>
									<div>
										<span>GRIFON</span>
										<div class="other-inf">
											РК «3D-брендирование грузовых корпоративных машин GRIFON с эффектом присутствия», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/van/komatsu-logo.jpg"></div>
									<div>
										<span>KOMATSU</span>
										<div class="other-inf">
											РК «KOMATSU — качество, которому можно доверять», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/van/eldorado-logo.png"></div>
									<div>
										<span>Эльдорадо</span>
										<div class="other-inf">
											РК «Доставка, установка и ремонт техники с «Эльдорадо Сервис», 2016
										</div>
									</div>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bus-taxi work-part" id="van">
			<div class="container">
				<div class="col-xs-12 col-sm-push-5 col-sm-7 col-md-7 col-lg-7 pdnl-null">
					<div class="wrap-outer-s">
						<div class="works-slide">
							<div class="subslides">
								<div class="slide-wrap gallery">
									<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 14 500 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-auto/truck/ab/ab-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/ab/ab-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/ab/ab-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/ab/ab-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/ab/ab-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/ab/ab-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/novosi/novosi-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/novosi/novosi-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/novosi/novosi-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/novosi/novosi-2.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/bread-prom/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/bread-prom/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/bread-prom/2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/bread-prom/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/truck/bread-prom/3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/truck/bread-prom/3.jpg"></a></div>
							</div>
						</div>
					</div>
					<div class="wrap-inner-s">
						<div class="works-slide inner">
							<div class="subslides">
								<div class="slide-wrap gallery">
									<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 2 000 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-auto/special/bank-open/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/bank-open/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/bank-open/2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/bank-open/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/bank-open/3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/bank-open/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/komatsu/komatsu-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/komatsu/komatsu-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/komatsu/komatsu-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/komatsu/komatsu-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/komatsu/komatsu-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/komatsu/komatsu-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/masters-city/masters-city-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/masters-city/masters-city-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/masters-city/masters-city-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/masters-city/masters-city-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/special/masters-city/masters-city-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/special/masters-city/masters-city-3.jpg"></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-pull-7 col-sm-5 col-md-5 col-lg-5 ">
					<div class="tabs">
						<div class="tabs-nav">
							<a href="#" data-target="tab-content-1" class="tab active">Грузовой</a>
							<a href="#" data-target="tab-content-2" class="tab">Спецтехника</a>
						</div>
						<div class="tab-content tab-content-1 active">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/truck/ab-logo.png"></div>
									<div>
										<span>ABInBev</span>
										<div class="other-inf">
											РК «BUD — чистый мягкий вкус. «Сибирская корона» — нам есть чем гордиться! Безалкогольные», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/truck/novosi-logo.jpg"></div>
									<div>
										<span>Новосибхлеб</span>
										<div class="other-inf">
											РК «НОВОСИБХЛЕБ для ДЕТЕЙ!» и «Хлеб — оружие нашей Победы!», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/truck/bread-prom-logo.jpg"></div>
									<div>
										<span>Хлебпром</span>
										<div class="other-inf">
											РК «MIREL — торты № 1 в России» и «Усладов» — для праздника не нужен повод!», 2016
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="tab-content tab-content-2">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/special/bank-open-logo.png"></div>
									<div>
										<span>Открытие</span>
										<div class="other-inf">
											РК «Брендирование инкассационных машин банка «Открытие», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf ">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/special/komatsu-logo.jpg"></div>
									<div>
										<span>KOMATSU</span>
										<div class="other-inf">
											РК «Краны KOMATSU — брендирование спецтехники», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/special/masters-city-logo.png"></div>
									<div>
										<span>Город мастеров</span>
										<div class="other-inf">
											РК «Оконные и дверные системы от компании «Город мастеров», 2016
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bus-taxi work-part" id="bus">
			<div class="container">
				<div class="col-sm-7 pdnl-null">
					<div class="wrap-outer-s">
						<div class="works-slide">
							<div class="subslides">
								<div class="slide-wrap gallery">
										<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 15 000 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-auto/tilt/fresh/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/fresh/1.jpg"></a>
								</div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/tilt/lakra/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/lakra/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/tilt/lakra/2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/lakra/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/tilt/lakra/3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/lakra/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/tilt/el-planet/el-planet-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/el-planet/el-planet-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/tilt/el-planet/el-planet-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/el-planet/el-planet-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/tilt/el-planet/el-planet-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/tilt/el-planet/el-planet-3.jpg"></a></div>
							</div>
						</div>
					</div>
					<div class="wrap-inner-s">
						<div class="works-slide inner">
							<div class="subslides">
								<div class="slide-wrap gallery">
										<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 25 000 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-auto/fyru/beloved/beloved-1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/beloved/beloved-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/fyru/beloved/beloved-2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/beloved/beloved-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/fyru/beloved/beloved-3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/beloved/beloved-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/fyru/milk/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/milk/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/fyru/milk/2.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/milk/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/fyru/milk/3.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/milk/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-auto/fyru/bird-factory/1.jpg"><img class="section-img slick-slide" src="img/portfolio-auto/fyru/bird-factory/1.jpg"></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="tabs">
						<div class="tabs-nav">
							<a href="#" data-target="tab-content-1" class="tab active">Тенты</a>
							<a href="#" data-target="tab-content-2" class="tab">Фуры</a>
						</div>
						<div class="tab-content tab-content-1 active">
							<a href="#" class="partner-inf active">
									<div class="logo">
										<div class="picture"><img src="img/portfolio-auto/tilt/fresh-logo.png"></div>
										<div>
											<span>Свежесть Алтая</span>
											<div class="other-inf">
												РК «Природная питьевая вода «Свежесть Алтая», 2016
											</div>
										</div>
									</div>
								</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/tilt/lakra-logo.jpg"></div>
									<div>
										<span>ЛАКРА</span>
										<div class="other-inf">
											РК «Изготовление и брендирование фирменных тентов для ГК «ЛАКРА», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/tilt/el-planet-logo.jpg"></div>
									<div>
										<span>Планета электрика</span>
										<div class="other-inf">
											РК «Светло в любое время, тепло в любой сезон с «Планетой Электрика», 2016
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="tab-content tab-content-2">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/fyru/beloved-logo.jpg"></div>
									<div>
										<span>Любимое</span>
										<div class="other-inf">
											РК «Брендирование автомобильного транспорта для Любинского молочноконсервного комбината», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/fyru/milk-logo.jpg"></div>
									<div>
										<span>Молочная сказка</span>
										<div class="other-inf">
											РK «Лучшее, полезное, вкусное, здоровое для вас с Алтая!», 2014
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-auto/fyru/bird-factory-logo.jpg"></div>
									<div>
										<span>Коченевская птицефабрика</span>
										<div class="other-inf">
											РК «Брендирование грузовых автомашин Коченёвской птицефабрики», 2015
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reviews">
			<h2>Отзывы</h2>
			<div class="video-reviews">
				<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5 video-item"><iframe src="https://www.youtube.com/embed/xsuhBkGMo0U" frameborder="0" allowfullscreen></iframe></div>
				<div class="col-xs-12 col-sm-6 col-md-5  col-lg-5 video-item"><iframe src="https://www.youtube.com/embed/hY0tr4IdB1I" frameborder="0" allowfullscreen></iframe></div>
			</div>
			<div class="container gallery">
				<a href="img/reviews/1.jpg"><img src="img/reviews/1-mini.jpg" alt="Отзыв"></a>
				<a href="img/reviews/2.jpg"><img src="img/reviews/2-mini.jpg" alt="Отзыв"></a>
				<a href="img/reviews/3.jpg"><img src="img/reviews/3-mini.jpg" alt="Отзыв"></a>
				<a href="img/reviews/4.jpg"><img src="img/reviews/4-mini.jpg" alt="Отзыв"></a>
			</div>
		</section>



		<section class="calculation" id="calculator">
			<div class="container">
				<h2 class="underline"><strong>А как именно Вы хотите,</strong><br>чтобы Ваши <span class="text-orange"> клиенты узнали о Вас?</span></h2>
				<p class="deskr">Чтобы рассчитать стоимость размещения рекламы, <br>
					заполните форму, и мы подберем лучшую цену для Вас!
				</p>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<form class="calc-form">
							<div class="left-block">
								<div class="step first-step">
									<span class="circle-num">01</span>
									<div class="left-group">
										<div class="input-group">
											<input type="radio" class="radio" id="radio1" name="city" checked>
											<label for="radio1">Один город</label>
										</div>
										<div class="input-group">
											<input type="radio" class="radio" id="radio2" name="city">
											<label for="radio2">2 и более города</label>
										</div>
									</div>
									<div class="right-group">
										<select id="select-city" name="select-city">
											<option>Анапа</option>
											<option>Ангарск</option>
											<option>Астрахань</option>
											<option>Балаково</option>
											<option>Барнаул</option>
											<option>Белгород</option>
											<option>Бердск</option>
											<option>Бийск</option>
											<option>Брянск</option>
											<option>Великий Новгород</option>
											<option>Владивосток</option>
											<option>Волгоград</option>
											<option>Волжский</option>
											<option>Вологда</option>
											<option>Воронеж</option>
											<option>Дзержинск</option>
											<option>Екатеринбург</option>
											<option>Иваново</option>
											<option>Ижевск</option>
											<option>Иркутск</option>
											<option>Йошкар-Ола</option>
											<option>Казань</option>
											<option>Калининград</option>
											<option>Калуга</option>
											<option>Кемерово</option>
											<option>Киров</option>
											<option>Киселевск</option>
											<option>Комсомольск-на-Амуре</option>
											<option>Краснодар</option>
											<option>Красноярск</option>
											<option>Курск</option>
											<option>Ленинск-Кузнецкий</option>
											<option>Липецк</option>
											<option>Махачкала</option>
											<option>Михайловск</option>
											<option>Москва</option>
											<option>Мурманск</option>
											<option>Набережные Челны</option>
											<option>Находка</option>
											<option>Нижний Новгород</option>
											<option>Новокузнецк</option>
											<option>Новосибирск</option>
											<option>Нюрба</option>
											<option>Омск</option>
											<option>Орел</option>
											<option>Оренбург</option>
											<option>Орск</option>
											<option>Пенза</option>
											<option>Пермь</option>
											<option>Петрозаводск</option>
											<option>Прокопьевск</option>
											<option>Псков</option>
											<option>Республика Крым</option>
											<option>Ростов-на-Дону</option>
											<option>Рязань</option>
											<option>Самара</option>
											<option>Санкт-Петербург</option>
											<option>Саратов</option>
											<option>Севастополь</option>
											<option>Северск</option>
											<option>Ставрополь</option>
											<option>Сургут</option>
											<option>Таганрог</option>
											<option>Тверь</option>
											<option>Тольятти</option>
											<option>Томск</option>
											<option>Тула</option>
											<option>Тюмень</option>
											<option>Улан-Удэ</option>
											<option>Ульяновск</option>
											<option>Уфа</option>
											<option>Хабаровск</option>
											<option>Ханты-Мансийск</option>
											<option>Чебоксары</option>
											<option>Челябинск</option>
											<option>Черепаново</option>
											<option>Южно-Сахалинск</option>
											<option>Юрга</option>
											<option>Якутск</option>
											<option>Ярославль</option>
										</select>
										<input type="text" value="" id="custom-city" name="custom-city">
									</div>
								</div>
								<div class="step second-step">
									<span class="circle-num">02</span>
									<div class="group-input">
										<input type="checkbox" class="checkbox" id="check1" name="transport" value="Автобус">
										<label for="check1" class="icon-auto">
											<!-- <div class="wrap-img">
												<img src="img/icon-bus-mini.png">
												</div> -->Легковой
										</label>
									</div>
									<div class="group-input">
										<input type="checkbox" class="checkbox" id="check2" name="transport" value="Маршрутка">
										<label for="check2" class="icon-van">
											<!-- <div class="wrap-img">
												<img src="img/icon-bus-taxi.png">
												</div> -->Фургон
										</label>
									</div>
									<div class="group-input">
										<input type="checkbox" class="checkbox" id="check3" name="transport" value="Троллейбус">
										<label for="check3" class="icon-waggon">
											<!-- <div class="wrap-img">
												<img src="img/icon-trolleybus.png">
												</div> -->Фура
										</label>
									</div>
									<div class="group-input">
										<input type="checkbox" class="checkbox" id="check4" name="transport" value="Трамвай">
										<label for="check4" class="icon-plane">
											<!-- <div class="wrap-img">
												<img src="img/icon-tram.png">
												</div> -->Другое
										</label>
									</div>
								</div>
								<div class="step fourth-step">
									<span class="circle-num">03</span>
									<div class="left-group">
										<input type="text" placeholder="ФИО" name="firstname">
										<input type="text" class="phone" name="mobile" placeholder="Телефон">
									</div>
									<div class="right-group">
										<input type="text" name="company" placeholder="Компания / Сайт">
										<input type="text" name="email" placeholder="E-mail">
									</div>
								</div>
							</div>
							<div class="right-block">
								<h3 class="text-orange">Дополнительная информация <br>
									(не обязательно)
								</h3>
								<textarea name="description" placeholder="Дополнительная информация о Вашем проекте"></textarea>
							</div>
							<button type="submit" class="pulse">Рассчитать стоимость и сроки</button>
							<h3>С нами <span class="text-orange">легко и приятно</span> работать</h3>
							<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером!<br><br>
Мы делаем все, что касается оформления рекламно-информационного изображения на любых поверхностях.</p>
						<?php echo $hidden_inpunt; ?>

						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="about why-we auto" id="about">
			<div class="container">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
					<img class="logo" src="img/logo.png">
					<h2 class="underline light"><strong>Нашему агентству <span class="text-orange">8 лет</span></strong></h2>
					<div class="inf-about">
						<p>Честно. С любовью. Как для себя.
							Наша основная специализация — делать рекламу, которая работает!
						</p>
						<p>
							За это время разработали с нуля тысячи проектов, запустили рекламу на сотни тысяч
							километров, выдали тысячи рекламных материалов и упаковок.
							Мы оказываем услуги по созданию и размещению наружной рекламы <br>в Новосибирске,
							Барнауле, Кемерове, Новокузнецке, Омске, Томске, а также <br>в любом из 90 городов
							России, входящих в зону покрытия GMG. Нашей визитной карточкой является
							транзитная реклама.
						</p>
						<p>
							Собственные ресурсы — медианоситель на общественном транспорте и тесное
							сотрудничество с государственными и крупными частными перевозчиками —
							позволяют предлагать клиентам эксклюзивные условия размещения рекламы.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1 ">
					<div class="request-call">
						<h3 class="text-orange">Остались вопросы?</h3>
						<p>Задайте их нашему менеджеру</p>
						<form class="two-fields">
							<input type="text" placeholder="Имя" name="firstname">
							<input type="text" class="phone" placeholder="Телефон" name="mobile">
							<button type="submit" class="pulse">Отправить</button>
							<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером!
<br><br>Мы делаем все, что касается оформления рекламно-информационного оформления на любых поверхностях.</p>
<?php echo $hidden_inpunt; ?>
						</form>
						<p>Нам удается угадывать
							Ваши пожелания
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="contacts" id="contacts">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3ADCWYTzg5gdfe5GmC1KDveW5-AOTlBqCH&amp;width=48%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>			<div class="container">
				<div class="col-xs-12 col-sm-6 col-sm-offset-6">
					<h2 class="underline">Наши<br> <strong>Контакты</strong></h2>
					<ul>
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Головной офис компании находится в Новосибирске, <br>
								Горский микрорайон, дом 86, первый этаж
							</p>
						</li>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<p><a clsss="include-phone" href="tel:73832488080">+7 (383) 2 48-80-80</a><br>
						<!--		<a href="tel:73833621949">+7 (383) 362-19-49</a>-->
							</p>
						</li>
						<li>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<p><a href="mailto:sales@cmg-nsk.ru">sales@cmg-nsk.ru</a><br>
								коммерческий отдел
							</p>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="gmg-map" id="gmg-map">
			<h2 class="underline">Зона покрытия<br> <strong>GMG</strong></h2>
			<img src="img/map-area.png" alt="" class="map">
		</section>
		<form id="test-form" action="mail.php" class="pop-up mfp-hide white-popup-block">
			<h2>Заказать обратный звонок</h2>
			<fieldset style="border:0;">
				<ol>
					<li>
						<input id="name"  name="firstname" type="text" placeholder="Имя" required="">
					</li>
					<li>
						<input id="phone" class="phone" name="mobile" type="phone" placeholder="Телефон" required="">
					</li>
					<li>
						<button type="submit" class="pulse">Жду звонка</button>
					</li>
					<li>
						<p>
							Мы гарантируем конфиденциальность
Ваших данных
						</p>
					</li>
				</ol>
			</fieldset>
			<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером!<br><br>
Мы делаем все, что касается оформления рекламно-информационного изображения на любых поверхностях.</p>
<?php echo $hidden_inpunt; ?>
		</form>
		<!-- <script  src="libs/jquery/dist/jquery.min.js"></script>
		<script  src="libs/slick/slick.min.js"></script>
		<script  src="libs/niceSelect/jquery.nice-select.min.js"></script>
		<script  src="libs/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
		<script  src="libs/waypoint/jquery.waypoints.min.js"></script>
		<script  src="libs/masked-input.min.js"></script>
		<script  src="libs/circlefull.min.js"></script>
		<script  src="libs/scrollToId/jquery.malihu.PageScroll2id.js"></script>
		<script  src="libs/magnific-popup/js/jquery.magnific-popup.min.js"></script>
		<script  src="libs/countdown/jquery.countdown.min.js"></script>
		<script  src="libs/ZeroClipboard.js"></script> -->
		<script defer src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
		<script  defer src="js/geolocation.js"></script>
		<script  src="js/scripts.min.js"></script>
		<script  src="integration_vtiger/js/watch.js"></script>
		<script  src="integration_vtiger/form.js"></script>

		<script>
		</script>
	</body>
</html>