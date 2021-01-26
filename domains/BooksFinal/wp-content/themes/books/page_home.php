<?php /* Template Name: Home page*/ ?>
<?php get_header(); ?>
<main>
	<!-- Banner -->
	<section class="banner" id="top" style="background-image:url(<?php echo get_field('fon_image')['url']; ?>)">
		<div class="container">
			<div class="left">
				<h1><?php the_field('banner_title'); ?></h1>
				<p><?php
						the_field('banner_text'); ?></p>
				<a href="<?php the_field('link_button'); ?>" class="brown_button"><?php the_field('text_button'); ?></a>
			</div>
			<div class="right">
				<img class="banner__photo" src="<?php echo	get_field('image_human')['url']; ?>"
					alt="<?php echo get_field('image_human')['alt']; ?>">
			</div>
		</div>
	</section>
	<!-- About as -->
	<section class="about_us container" id="aboutUs">
		<div class="left">
			<img class="banner__photo" src="<?php echo	get_field('zobrazhennya_pronas')['url']; ?>"
				alt="<?php echo	get_field('zobrazhennya_pronas')['alt']; ?>">
		</div>
		<div class="right">
			<h2><?php the_field('zagovok_pronas') ?></h2>
			<?php the_field('kontent') ?>

			<a target="_blanc" href=" <?php the_field('posylannya_knopky_pronas'); ?>"
				class="transparent_button"><?php the_field('tekst_knopky'); ?></a>
		</div>
	</section>
	<!-- Top books -->
	<!-- <section class="topBooks" id="1">
		<div class="container">
			<div class="title">
				<h3>Топ книг</h3>
			</div>
			<div class="slider">
				<div class="slide">

					<a href="book.php"><img src="images/books/item1.png" alt="" class="scale"></a>

					<div class="slide_text">
						<p>Гривцов.В.Е.</p>
					</div>
					<div class="slide_title">
						<p>Пятьдесят оттенков свободы</p>
					</div>
					<div class="slide_price">
						<h4>690 грн</h4>
					</div>
				</div>
				<div class="slide">
					<div class="slide_img">
						<a href="book.php"><img src="images/books/item2.png" alt="" class="scale"></a>
					</div>
					<div class="slide_text">
						<p>Гривцов.В.Е.</p>
					</div>
					<div class="slide_title">
						<p>Пятьдесят оттенков свободы</p>
					</div>
					<div class="slide_price">
						<h4>690 грн</h4>
					</div>
				</div>
				<div class="slide">
					<div class="slide_img">
						<a href="book.php"><img src="images/books/item3.png" alt="" class="scale"></a>
					</div>
					<div class="slide_text">
						<p>Гривцов.В.Е.</p>
					</div>
					<div class="slide_title">
						<p>Пятьдесят оттенков свободы</p>
					</div>
					<div class="slide_price">
						<h4>690 грн</h4>
					</div>
				</div>
				<div class="slide">
					<div class="slide_img">
						<a href="book.php"><img src="images/books/item4.png" alt="" class="scale"></a>
					</div>
					<div class="slide_text">
						<p>Гривцов.В.Е.</p>
					</div>
					<div class="slide_title">
						<p>Пятьдесят оттенков свободы</p>
					</div>
					<div class="slide_price">
						<h4>690 грн</h4>
					</div>
				</div>
				<div class="slide">
					<div class="slide_img">
						<a href="book.php"><img src="images/books/item4.png" alt="" class="scale"></a>
					</div>
					<div class="slide_text">
						<p>Гривцов.В.Е.</p>
					</div>
					<div class="slide_title">
						<p>Пятьдесят оттенков свободы</p>
					</div>
					<div class="slide_price">
						<h4>690 грн</h4>
					</div>
				</div>

			</div>
			<div class="btn">
				<a href="books.php" class="brown_button" target="_blanc">Показать все книги</a>
			</div>
		</div>


	</section> -->
	<!-- Testimonials -->
	<section class="testimonials container" id="testi">
		<h2>
			<?php the_field('zagolovokvidguky') ?>
		</h2>
		<div class="content">
			<?php
			if (have_rows('spysok_vidgukiv')) :
				while (have_rows('spysok_vidgukiv')) : the_row(); ?>

			<div class="item">
				<span class="face">
					<img src="<?php echo get_sub_field('foto')['url'] ?>" alt="<?php echo get_sub_field('foto')['alt'] ?>">
				</span>
				<p class="date"><?php the_sub_field('data') ?></p>
				<h3><?php the_sub_field('imya') ?></h3>
				<div class="social">
					<p>Оригинал отзыва в</p>
					<a target="_blanc" href="<?php the_sub_field('vidguk_u_fejsbuczi') ?>">
						<svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6">
								<path
									d="M0 0V20H10.6512V12.2744H8.04748V9.12062H10.6512V6.47199C10.6512 4.54572 12.2128 2.98418 14.139 2.98418H16.861V5.82016H14.9133C14.3012 5.82016 13.805 6.31637 13.805 6.92844V9.12066H16.8121L16.3965 12.2745H13.805V20H20V0H0Z"
									fill="#9A8464" />
							</g>
						</svg>
					</a>
				</div>
				<p class="text"><?php the_sub_field('vidguk') ?></p>
			</div>

			<?php
				endwhile;


			else :

			endif;
			?>

		</div>
		<a target="_blanc" href="<?php the_field('posylannya_knopky_vidgukiv'); ?>"
			class="brown_button"><?php the_field('tekst_knopky_vidgukiv'); ?>
			отзывы</a>
	</section>
	<!-- News -->
	<section class="news" id="new">
		<div class="container">
			<h2>
				<?php the_field('novyny_zagolovok') ?>
			</h2>
			<div class="items">

				<?php
				if (have_rows('spysok_novyn')) :
					while (have_rows('spysok_novyn')) : the_row(); ?>

				<div class="item">
					<a target="_blanc" href="<?php the_sub_field('posylannya_knopky') ?>">
						<?php the_sub_field('tekst_knopky') ?>
					</a>
					<img src="<?php echo get_sub_field('kartynka_osnovna')['url'] ?>"
						alt="<?php echo get_sub_field('kartynka_osnovna')['alt'] ?>">
					<strong></strong>
					<p><?php the_sub_field('kontent_novyn'); ?></p>
					<div class="name">
						<img src="<?php echo get_sub_field('kartynka_profilya')['url'] ?>"
							alt="<?php echo get_sub_field('kartynka_profilya')['alt'] ?>" class="newsImg">
						<h3><?php the_sub_field('avtor_novyn'); ?></h3>
					</div>
				</div>

				<?php
					endwhile;
				else :
				endif;
				?>



			</div>
		</div>
	</section>
	<!-- How buy -->
	<section class="howBuy">
		<div class="container">
			<h2>
				<?php the_field('zagolovok_kak_kupyt') ?>
			</h2>
			<div class="howBuy__row">
				<?php
				if (have_rows('poryadok_dij')) :
					while (have_rows('poryadok_dij')) : the_row(); ?>
				<div class="howBuy__item">
					<div class="number"><?php the_sub_field('nomer_po_poryadku'); ?></div>
					<div class="howBuy__title">
						<h3><?php the_sub_field('zagolovok_diyi'); ?></h3>
					</div>
					<div class="howBuy__text">
						<p><?php the_sub_field('opys_diyi'); ?></p>
					</div>
					<div class="howBuy__img">
						<img src="<?php echo get_sub_field('kartynka_diyi')['url'] ?>"
							alt="<?php echo get_sub_field('kartynka_diyi')['alt'] ?>">
					</div>
				</div>

				<?php
					endwhile;
				else :
				endif;
				?>

			</div>
		</div>
	</section>
	<!-- Contact -->
	<section class="contact">
		<div class="container">
			<h2>Контакты</h2>
			<div class="contact__row">
				<div class="shadow">

				</div>
				<div class="contact__left">
					<h3>Телефон:</h3>
					<a href="phone:+380 (067) 789 65 23" class="phone">+380 (067) 789 65 23</a>
					<h3>Почта:</h3>
					<a href="mailto:info@grivtsov-center.com" class="email">info@grivtsov-center.com</a>
					<h3>Cоц. Сети:</h3>
					<div class="net">
						<a href="">
							<svg width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M0 0V30H15.9768V18.4116H12.0712V13.6809H15.9768V9.70798C15.9768 6.81858 18.3191 4.47627 21.2085 4.47627H25.2916V8.73024H22.37C21.4518 8.73024 20.7075 9.47456 20.7075 10.3927V13.681H25.2182L24.5948 18.4117H20.7075V30H30V0H0Z"
									fill="#9A8464" />
							</svg>
						</a>
						<a href="">
							<svg width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M0 0V30H30V0H0ZM23.2583 10.7643C23.2664 10.9472 23.2706 11.131 23.2706 11.3155C23.2706 16.9465 18.9847 23.4392 11.1471 23.4392C8.74075 23.4392 6.50097 22.7339 4.61532 21.5247C4.94868 21.5643 5.28778 21.5845 5.63182 21.5845C7.62818 21.5845 9.46543 20.9033 10.9238 19.7602C9.05921 19.726 7.4855 18.494 6.94319 16.8011C7.2035 16.851 7.47046 16.8778 7.74501 16.8778C8.13363 16.8778 8.51011 16.8255 8.86767 16.7283C6.91846 16.3367 5.44958 14.6146 5.44958 12.5502C5.44958 12.5322 5.44958 12.5143 5.44998 12.4965C6.0244 12.8156 6.68136 13.0073 7.37993 13.0295C6.23651 12.2654 5.48446 10.9611 5.48446 9.4829C5.48446 8.70191 5.69459 7.97004 6.06145 7.34057C8.16297 9.91866 11.3027 11.6149 14.8441 11.7928C14.7713 11.4808 14.7335 11.1556 14.7335 10.8217C14.7335 8.46864 16.6415 6.56084 18.9946 6.56084C20.2202 6.56084 21.3276 7.07822 22.1049 7.90629C23.0753 7.71541 23.9873 7.36062 24.8107 6.87237C24.4926 7.86745 23.817 8.70231 22.9371 9.22978C23.7992 9.12673 24.6203 8.8976 25.3845 8.5587C24.8134 9.41314 24.091 10.1637 23.2583 10.7643Z"
									fill="#9A8464" />
							</svg>
						</a>
						<a href="">
							<svg width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20.1448 6.87695H9.8552C8.21303 6.87695 6.87671 8.21319 6.87671 9.85544V20.145C6.87671 21.7875 8.21303 23.1238 9.8552 23.1238H20.1448C21.7872 23.1238 23.1235 21.7875 23.1235 20.145V9.85544C23.1235 8.21327 21.7872 6.87695 20.1448 6.87695ZM14.9998 20.3486C12.051 20.3486 9.65155 17.9492 9.65155 15C9.65155 12.0512 12.051 9.65179 14.9998 9.65179C17.9489 9.65179 20.3484 12.0512 20.3484 15C20.3484 17.9492 17.9489 20.3486 14.9998 20.3486ZM20.5205 10.7578C19.8223 10.7578 19.2546 10.1901 19.2546 9.49231C19.2546 8.79448 19.8223 8.22679 20.5205 8.22679C21.2182 8.22679 21.7859 8.79448 21.7859 9.49231C21.7859 10.1901 21.2182 10.7578 20.5205 10.7578Z"
									fill="#9A8464" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M14.9997 11.9116C13.2974 11.9116 11.9111 13.2972 11.9111 14.9996C11.9111 16.7026 13.2974 18.0885 14.9997 18.0885C16.7027 18.0885 18.088 16.7026 18.088 14.9996C18.088 13.2972 16.7027 11.9116 14.9997 11.9116Z"
									fill="#9A8464" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M0 0V30H30V0H0ZM25.3833 20.1448C25.3833 23.0337 23.0337 25.3833 20.1448 25.3833H9.85525C6.96659 25.3833 4.6167 23.0337 4.6167 20.1448V9.85525C4.6167 6.96659 6.96659 4.6167 9.85525 4.6167H20.1448C23.0337 4.6167 25.3833 6.96659 25.3833 9.85525V20.1448Z"
									fill="#9A8464" />
							</svg>
						</a>
					</div>
				</div>
				<div class="contact__right">
					<img src="images/books/Group_46.png" alt="">
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>