<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package books
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<div class="container">
			<a href="#top" class="logo">
				<img src="images/image%2013.jpg" alt="">
			</a>

			<?php
			wp_nav_menu([
				'menu'            => 'Головне меню',
			]);
			?>

			<!-- <ul>
				<li><a href="#top">Главная</a></li>
				<li><a href="#aboutUs">Обо мне</a></li>
				<li><a href="#1">Книги</a></li>
				<li><a href="#new">Новости</a></li>
				<li><a href="#testi">Отзывы</a></li>
				<li><a href="#footer">Контакты</a></li>
			</ul> -->

			<a href="#" class="transparent_button">
				Войти
			</a>
			<div class="burger">
				<span></span>
			</div>
		</div>

	</header>