<?php
	require_once('integration_vtiger/ModelIntegration.php');
	$leadsource 				= 'Landing-оформление-ТЦ';
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
	<body class="page-shop">
		<!-- Yandex.Metrika counter -->
				<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43965724 = new Ya.Metrika({ id:43965724, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43965724" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

	<!-- <div id="page-preloader"><span class="spinner"></span></div> -->
		<header>
			<div class="parallax-bg shop">
				<div class="overlay">
					<div class="half-over">
						<div class="control-overlay">
							<span class="v-line"></span>
						</div>
					</div>
				</div>
			</div>
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
									<li><a href="#calculator" class="to-id">Заказать</a></li>
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
										<a class="button to-id popup-with-form" href="#test-form">Заказать звонок</a>
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
					<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
						<h1>Эффективное Оформление Помещений</h1>
						<h2>может <span class="text-orange">увеличить прибыль в 2 — 3 раза!</span>
						</h2>
						<p class="descr">
							Добавьте Вашему Бренду Реальности
						</p>
						<div class="col-xs-12 cols">
							<h2 class="with-bg">Сервис</h2>
						</div>
						<div class="cols col-xs-12 col-sm-6 col-md-6 col-lg-5">
						<p>
Любая сложность проекта <br>
Собственный отдел мониторинга качества<br>
Фотоотчеты по факту исполнения
							</p>
						</div>
						<div class="cols col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-2">

							<p>
								Реальные скидки до 40% <br>
«Дорабатываем» за другими агентствами <br>
Гарантия по договору на качество услуг <br>
							</p>
						</div>
					</div>
				</div>
				<a class="mouse-scroll to-id" href="#steps"><img src="img/mouse-scroll.png"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
			</div>

			</div>
		</header>
		<section class="steps" id="steps">
			<div class="container">
				<h2>ДО ВАШЕГО БРЕНДИРОВАНИЯ <span class="text-orange">ВСЕГО 2 ШАГА</span></h2>
				<h3  id="steps-h">мы работаем с любым бизнесом</h3>
				<div class="steps-wrap">
					<div class="row">
						<div class="step">
							<div class="wrap-img"><img src="img/shop-img/mobile-icon.png"></div>
							<h4><a href="#test-form" class="phone-num popup-with-form">8800-112-33-45</a></h4>
						</div>
						<div class="step arrow"><div class="wrap-img"><img src="img/arrow.png"></div></div>
						<div class="step">
							<div class="wrap-img"><img src="img/shop-img/shop-icon.png"></div>
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
										<h5>Замеры<BR>и фотографирование<BR> объекта</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="2" data-width="1" data-fontsize="16" data-percent="28" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Заключение<BR>договора</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="3" data-width="1" data-fontsize="16" data-percent="42" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Предоплата<BR>оплата</h5>
								</div>
								<div class="circle-container">
									<div class="circlestat" data-dimension="100" data-text="4" data-width="1" data-fontsize="16" data-percent="56" data-fgcolor="#ff9700" data-bgcolor="#dadada" data-fill="transparent"
										>
									</div>
										<h5>Согласование<BR>макета</h5>
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
										<h5>Запуск проекта<br>фотоотчет</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="why-we shop" id="why-we">
			<div class="container">
				<div class="col-sm-12 col-sm-12 col-md-8 col-lg-8">
					<h2 class="underline light"><strong>Почему <span class="text-orange">МЫ</span></strong></h2>
					<div class="reasons-wrap">
						<div class="reason-block">
							<span class="circle-num">01</span>
							<p>
							Гарантируем единые стандарты <br>и высокое качество услуг на всей территории страны для проектов любого масштаба.
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
							<p>Опытные монтажные бригады
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
							<input type="text"  name="firestname" placeholder="Имя">
							<input type="text"  name="mobile"  class="phone" placeholder="Телефон">
							<button type="submit" class="pulse">Отправить</button>
							<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером!
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
		<section class="bus work-part" id="bus">
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
											<span>от 10 000 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-shop/complex-design/hleb/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/hleb/3.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/hleb/4.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/hleb/4.jpg"></a></div>

							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/angaria/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/angaria/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/angaria/2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/angaria/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/angaria/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/angaria/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/ambar/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/ambar/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/ambar/2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/ambar/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/ambar/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/ambar/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/batik/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/batik/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/batik/2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/batik/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/batik/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/batik/3.jpg"></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4">
					<div class="tabs">
						<h3 class="underline">Комплексное оформление,<br>навигация</h3>
						<div class="tab-content tab-content-1 active">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/hleb.jpg"></div>
									<div>
										<span>НОВОСИБХЛЕБ</span>
										<div class="other-inf">
											РК «Хлебушек и булочки! Оформление киосков розничной сети «Новосибхлеб», 2015
										</div>
									</div>
								</div>
							</a>

							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/angaria.jpg"></div>
									<div>
										<span>Ангария</span>
										<div class="other-inf">
											РК «Вкус счастливого детства! Оформление фирменных магазинов мороженого «Ангария», 2017
										</div>
									</div>
								</div>
							</a>


							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/ambar.jpg"></div>
									<div>
										<span>АМБАРЪ</span>
										<div class="other-inf">
											РК «АМБАРЪ», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/batik.jpg"></div>
									<div>
										<span>БАТИК</span>
										<div class="other-inf">
											Производство и монтаж вывески для оптово-розничного центра детских товаров «БАТИК», 2015
										</div>
									</div>
								</div>
							</a>





						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bus-taxi work-part" id="taxi">
			<div class="container">
				<div class="col-xs-12 col-sm-push-5 col-sm-7 col-md-7 col-lg-7 pdnl-null">
					<div class="wrap-outer-s">
						<div class="works-slide">
							<div class="subslides">
								<div class="slide-wrap gallery">
									<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 3 500 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-shop/complex-design/house-agency/GJA-1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/house-agency/GJA-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/house-agency/GJA-2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/house-agency/GJA-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/house-agency/GJA-3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/house-agency/GJA-3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/novomar/novomar-1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/novomar/novomar-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/novomar/novomar-2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/novomar/novomar-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/novomar/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/novomar/1.jpg"></a></div>
							</div>

							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/atlant/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/atlant/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/atlant/2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/atlant/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/atlant/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/atlant/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/moscow-time/moscow-time-1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/moscow-time/moscow-time-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/moscow-time/moscow-time-2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/moscow-time/moscow-time-2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/complex-design/moscow-time/moscow-time-3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/complex-design/moscow-time/moscow-time-3.jpg"></a></div>
							</div>


						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-pull-7 col-sm-5 col-md-5 col-lg-5 ">
					<div class="tabs">
						<h3 class="underline">Входные зоны, <br>вывески, световые короба</h3>
						<div class="tab-content tab-content-1 active">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/house-agency-logo.jpg"></div>
									<div>
										<span>Городское жилищное агентство</span>
										<div class="other-inf">
											РК «Оформление входной зоны офиса «Городского жилищного агентства», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf ">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/novomar-logo.jpg"></div>
									<div>
										<span>Новомарусино</span>
										<div class="other-inf">
											РК «Объемная световая входная зона для офиса продаж ЖК «Новомарусино», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<!--<div class="picture"><img src="img/portfolio-shop/complex-design/angaria-logo.jpg"></div>-->
									<div>
										<span>Атлант</span>
										<div class="other-inf">
											РК «LED-вывески для ТЦ «Атлант», 2015
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/complex-design/moscow-time-logo.jpg"></div>
									<div>
										<span>Московское время</span>
										<div class="other-inf">
											РК «Комплексное оформление магазина «Московское время», 2012
										</div>
									</div>
								</div>
							</a>


						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bus-taxi work-part" id="tram">
			<div class="container">
				<div class="col-sm-7 pdnl-null">
					<div class="wrap-outer-s">
						<div class="works-slide">
							<div class="subslides">
								<div class="slide-wrap gallery">
									<div class="video-btn phone-num popup-with-form" href="#test-form">
										<div class="">
											<span class="play"><i class="fa fa-ruble" aria-hidden="true"></i></span>
											<span>от 500 руб.</span>
										</div>
									</div>
								<a href="img/portfolio-shop/entrance-zone/byte/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/byte/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/byte/2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/byte/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/byte/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/byte/3.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/mchs/1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/mchs/1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/mchs/2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/mchs/2.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/mchs/3.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/mchs/3.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/mchs/4.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/mchs/4.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/blagovesh/blagovesh-1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/blagovesh/blagovesh-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/blagovesh/blagovesh-2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/blagovesh/blagovesh-2.jpg"></a></div>
							</div>
							<div class="subslides">
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/baikal-service/baikal-1.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/baikal-service/baikal-1.jpg"></a></div>
								<div class="slide-wrap gallery"><a href="img/portfolio-shop/entrance-zone/baikal-service/baikal-2.jpg"><img class="section-img slick-slide" src="img/portfolio-shop/entrance-zone/baikal-service/baikal-2.jpg"></a></div>
							</div>


						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="tabs">
						<h3 class="underline">Баннеры, стенды, <br>таблички</h3>
						<div class="tab-content tab-content-1 active">
							<a href="#" class="partner-inf active">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/entrance-zone/byte.jpg"></div>
									<div>
										<span>Байт Транзит</span>
										<div class="other-inf">
											РК «Байт Транзит» ребрендинг — роллерные мобильные стенды Roll up», 2017
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/entrance-zone/mchs.jpg"></div>
									<div>
										<span>МЧС</span>
										<div class="other-inf">
											РК «Оформление Сибирского спасательного центра МЧС России», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf ">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/entrance-zone/blagovesh-logo.jpg"></div>
									<div>
										<span>Благовещенка</span>
										<div class="other-inf">
											РК «Благовещенка» — входная зона офиса продаж», 2016
										</div>
									</div>
								</div>
							</a>
							<a href="#" class="partner-inf">
								<div class="logo">
									<div class="picture"><img src="img/portfolio-shop/entrance-zone/baikal-service-logo.jpg"></div>
									<div>
										<span>Байкал-Сервис</span>
										<div class="other-inf">
											РК «Оформление входной зоны офиса компании «Байкал-Сервис», 2016
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
		<section class="any-work" id="any-work">
			<div class="container">
				<div class="any-work-wrap">
				<h2><span class="text-orange">Сделаем</span> то, что нужно, и как нужно!</h2>
				<h3  id="steps-h">у нас есть все необходимые инструменты для оформления <span class="text-orange">offline-бизнеса</span></h3>
				<h4>(магазины, киоски, офисы, мероприятия, транспорт и др.)</h4>
					<div class="row">
						<div class="tabs-col cols">
							<div class="tabs-vertical">
								<ul>
									<li><a href="#" data-target="1" class="active">Широкоформатная печать</a></li>
									<li><a href="#" data-target="2">Изготовление световых вывесок</a></li>
									<li><a href="#" data-target="3">Офсетная печать</a></li>
									<li><a href="#" data-target="4">Сувенирная продукция</a></li>
									<li><a href="#" data-target="5">POS-материалы</a></li>
								</ul>
							</div>
						</div>
						<div class="tabs-cont-col cols">
							<div class="tabs-v-content">
								<div class="tab-cont visible" id="tab-1">
									<img src="img/shop-img/tabs-wide.jpg" alt="">
								</div>
								<div class="tab-cont" id="tab-2">
									<img src="img/shop-img/tabs-light.jpg" alt="">
								</div>
								<div class="tab-cont" id="tab-3">
									<img src="img/shop-img/tabs-offset.jpg" alt="">
								</div>
								<div class="tab-cont" id="tab-4">
									<img src="img/shop-img/tabs-suvenir.jpg" alt="">
								</div>
								<div class="tab-cont" id="tab-5">
									<img src="img/shop-img/tabs-pos.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="deskr-col deskr cols">
							<div class="tab-cont visible" id="text-1">
								<p>Процедура печати будет происходить на широкоформатных принтерах, в результате чего Вы получите наилучшее качество. </p><p>
Также широкоформатная печать позволяет реализовать самые масштабные рекламные проекты.
</p><p>Оптимальное решение для крупного бизнеса.</p>
							</div>
							<div class="tab-cont" id="text-2">
								<p>Правильное оформление рекламного короба поможет повысить объем продаж и общую узнаваемость бренда. Световые вывески хорошо видно как днем, так и в ночное время. </p><p>
Отлично подойдет как для локальной вывески (указатели, витрины магазина), так и для геотаргетинговой (рекламные баннеры, световые короба).</p>
							</div>
							<div class="tab-cont" id="text-3">
								<p>Высокое качество печати с хорошей передачей цвета и контрастностью изображений делает продукцию максимально реалистичной. </p><p>
Печать подходит как для небольших продуктов, так и для огромных баннеров и растяжек.</p><p>
Максимальная выгода при печати средних и крупных тиражей.</p>
							</div>
							<div class="tab-cont" id="text-4">
								<p>Современные технологии позволяют нанести имиджевую или рекламную информацию о фирме на самые разнообразные материалы.</p><p>
Наилучшее решение для крупного бизнеса.</p>
							</div>
							<div class="tab-cont" id="text-5">
								<p>Материалы, способствующие продвижению бренда или товара в местах продаж (ценникодержатели, воблеры, навигация внутри помещений)</p><p>
Используются для создания единой стилистики фирмы.</p><p>
Подходит для магазинов, рынков, салонов, кафе, ресторанов, больниц, аптек, вокзалов, банков и т.д.</p>
							</div>
						</div>
					</div>
					<h3 class="bottom-text">В производство <span class="text-orange">уже на следующий день!</span></h3>
				</div>
				</div>
			</div>
		</section>
		<section class="calculation shop" id="calculator">
			<div class="container">
				<h2 class="underline"><strong>Покажите Вашим клиентам, <span class="text-orange">что Вы реальны</span></strong></h2>
				<p class="deskr">Чтобы рассчитать стоимость, заполните форму,  <br>
и <span class="text-orange">мы подберем лучшую цену для Вас!</span>
				</p>
				<form action="" class="shop-calc">
					<div class="group-input">
						<input type="text" name="firstname" placeholder="ФИО">
						<input type="text" name="company" placeholder="Компания / сайт">
					</div>
					<div class="group-input">
						<input type="text" class="phone" name="mobile" placeholder="Телефон">
						<input type="text" name="email" placeholder="E-mail">
					</div>
					<div class="group-input">
					<textarea name="add-inf" placeholder="Дополнительна информация о Вашем проекте"></textarea>
					</div>
					<button class="pulse">Рассчитать стоимость и сроки</button>
					<h3>С нами <span class="text-orange">легко и приятно работать</span></h3>
						<?php echo $hidden_inpunt; ?>
				</form>
			</div>
		</section>
		<section class="about why-we shop" id="about">
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
							брендирование помещений.
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
							<input type="text"  name="firstname"  placeholder="Имя">
							<input type="text" name="mobile" class="phone" placeholder="Телефон">
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
		<section class="contacts" id="contacts">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3ADCWYTzg5gdfe5GmC1KDveW5-AOTlBqCH&amp;width=48%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>			<div class="container">
			<div class="container">
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
							<p class="include-phone"><a href="tel:73832488080">+7 (383) 2 48-80-80</a><br>
							<!--	<a href="tel:73833621949">+7 (383) 362-19-49</a>-->
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
						<input id="name" name="firstname" type="text" placeholder="Имя" required="">
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
			<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером!
<br><br>Мы делаем все, что касается оформления рекламно-информационного оформления на любых поверхностях.</p>
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
		<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
		<script  src="js/scripts.min.js"></script>
		<script  defer src="js/geolocation.js"></script>
		<script  src="integration_vtiger/js/watch.js"></script>
		<script  src="integration_vtiger/form.js"></script>
		<script>
		</script>
	</body>
</html>