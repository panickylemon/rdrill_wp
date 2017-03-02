<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>
		<?php
		wp_title('|', true, 'right');
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/wp-content/themes/rdrill-theme/image/icons/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body>
<div class="l-wrapper">
	<!--—BEGIN HEADER -->
	<header class="header-wrap">
		<div class="header">
			<div class="header__top-panel clearfix">
				<div class="header__logo">
					<a class="header__logo-link" href="/">
						<img class="header__logo-img" src="/wp-content/themes/rdrill-theme/image/icons/logo.png" alt="Rotabroach">
					</a>
				</div>
				<div class="header__phone clearfix">
					<div class="header__phone-item">
						<p class="header__phone-number">8 (800) <span
									class="header__phone-item--red">775-87-95</span></p>

						<p class="header__phone-description">Бесплатный звонок по России</p>
					</div>
					<div class="header__phone-item">
						<p class="header__phone-number">8 (812) <span
									class="header__phone-item--red">640-44-04</span></p>

						<p class="header__phone-description">Телефон по Санкт-Петербургу</p>
					</div>
				</div>
			</div>
			<div class="header__menu-burger">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

				<p class="icon-close"></p>
			</div>
			<div class="header__menu">
				<nav class="header__navigation">
					<?php
					$walker = new mainMenuWalker();
					wp_nav_menu( array(
							        'menu'  => 2, // id меню
									'depth' => 2, //показывать 2 уровня вложенности
									'container' => false,
									'menu_class' => 'header__menu-list clearfix',
									'walker' => $walker
					));
					?>
				</nav>


				<div class="feedback-search">
					<div class="header__feedback">
						<a class="header__feedback-link" href="#feeadback-form" data-toggle="modal">
							<span class="header__feedback-icon"></span>
							<span class="header__feedback-text">Напишите нам</span>
						</a>
					</div>
					<div class="header__search">
						<form action="" id="search-form">
							<input class="b-search__expand" type="search" placeholder="Поиск">
							<input class="b-search__button" name="submit" type="submit"
							       value="" id="search-button">
						</form>
					</div>
				</div>

			</div>
		</div>
	</header>
	<!--—END HEADER -->