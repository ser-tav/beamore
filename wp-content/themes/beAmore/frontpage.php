<?php
	/**
		* Template Name: Главная
	*/
get_header(); ?>


<section class="main_blok" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>');">
	<div class="container pt-130">
		<div class="row pb-80">
			<div class="col-md-6">
				<div class="main_blok_day w-100 mb-3 font-size-30 d-flex justify-content-center mx-auto text-center">
					12 ноября 2020
				</div>
				<div class="main_blok_time pb-5 text-white font-size-30 text-center">
					17:00 по московскому времени
				</div>
				<div class="main_blok_title pb-5 text-white font-size-40 text-center">
					beAmore - Event маркетплейс для сильных, успешных, для тебя!
				</div>
				<div class="main_blok_desc text-white font-size-28 text-center">
					Live stream для всей России, нового инновационного сервиса, а так же
					закрытая презентация на 300 гостей
					в отеле Hyatt Regency Petrovsky Park
				</div>
			</div>
			<div class="col-md-6 text-center">
				<div class="main_blok_video pt-5">
					<iframe width="100%" height="307" style="max-width: 547px" src="https://www.youtube.com/embed/YjJcUlshEzg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<button class="my-4 registr_btn">РЕГИСТРАЦИЯ НА МЕРОПРИЯТИЕ</button>
			</div>
		</div>
	</div>
	<div class="main_blok_partners">
		<div class="container">
			<div class="row flex-wrap">
				<div class="col-12 col-md-4 py-3 font-size-18 text-center">
					<div class="pb-3">Генеральный партнер beAmore</div>
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/texnopark.png" alt="">
					</div>
				</div>
				<div class="col-12 col-md-4  py-3 font-size-18 text-center">
					<div class="pb-3">Главный технический партнер beAmore</div>
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/tur_soyuz.png" alt="">
					</div>
				</div>
				<div class="col-12 col-md-4 py-3 font-size-18 text-center">
					<div class="pb-3">Главный информационный партнер beAmore</div>
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/texnopark.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about_the_event">
	<div class="container ">
		<div class="about_the_event_title text-white text-center font-size-40 pt-110 mb-40">
			<?php the_field('about_headling'); ?>
		</div>
		<div class="d-flex">
			<div class="d-none d-md-block">
				<img src="<?php the_field('about_image'); ?>" alt="">
			</div>
			
			
			<div class="about_the_event_desc text-white mx-auto">
				<p class="pb-4 font-size-18"> <?php the_field('about_text'); ?> </p>
				
			</div>
			
		</div>
		<div class="text-center pb-110">
			<button class="my-4 registr_btn"><?php the_field('about_button_name'); ?></button>
		</div>
	</div>
</section>

<section class="broadcast_program">
	<div class="container">
		<div class="broadcast_program_title text-center font-size-40 pt-110 mb-40">
			Программа трансляции
		</div>
		<!-- TO DO  slider widget -->
		<div class="row">
			<div class="broadcast_program_slider text-center mx-auto pb-80 col-11">
				<div class="px-5 w-100" style="max-width: 360px!important">
					<div class="broadcast_slider_img mb-30"><img class=" w-100"
						src="<?php bloginfo('template_directory'); ?>/images/slide1.png"
					alt=""></div>
					<div class="font-size-16 broadcast_program_slider_desc">
						<p class="font-weight-bold font-size-22">14:00 - 15:00</p>
						Вступление, презентация возможностей проекта BeAmore
					</div>
				</div>
				
				<div class="px-5 w-100" style="max-width: 360px!important">
					<div class="broadcast_slider_img mb-30"><img class=" w-100"
						src="<?php bloginfo('template_directory'); ?>/images/slide2.png"
					alt=""></div>
					<div class="font-size-16  broadcast_program_slider_desc">
						<p class="font-weight-bold font-size-22">14:00 - 15:00</p>
						Вступление, презентация возможностей проекта BeAmore
					</div>
				</div>
				
				<div class="px-5 w-100" style="max-width: 360px!important">
					<div class="broadcast_slider_img mb-30"><img class=" w-100"
						src="<?php bloginfo('template_directory'); ?>/images/slide3.png"
					alt=""></div>
					<div class="font-size-16 broadcast_program_slider_desc">
						<p class="font-weight-bold font-size-22">14:00 - 15:00</p>
						Вступление, презентация возможностей проекта BeAmore
					</div>
				</div>
				
				
				<div class="px-5 w-100" style="max-width: 360px!important">
					<div class="broadcast_slider_img mb-30"><img class=" w-100"
						src="<?php bloginfo('template_directory'); ?>/images/slide3.png"
					alt=""></div>
					<div class="font-size-16 broadcast_program_slider_desc">
						<p class="font-weight-bold font-size-22">14:00 - 15:00</p>
						Вступление, презентация возможностей проекта BeAmore
					</div>
				</div>
			</div>
			<!-- TO DO  slider widget -->
		</div>
	</div>
	<div class="broadcast_program_partners pb-110">
		<div class="container d-flex flex-wrap pt-110">
			<div class="col-10 col-md-4">
				<div class="text-center font-size-26 mb-40"><?php the_field('blok_1_title'); ?></div>
				<div class="text-center">
					<?php while (has_sub_field('blok_1_img')):
						$img = get_sub_field('image');
					$link = get_sub_field('link');  ?>
					<a href="<?=  $link ?>"><img src="<?=  $img ?>" alt=""></a>
					<?php endwhile; ?>
				</div>
				
			</div>
			<div class="col-12 col-md-4">
				<div class="text-center font-size-26 mb-40"><?php the_field('blok_2_title'); ?></div>
				<div class="d-flex flex-wrap justify-content-center">
					<?php while (has_sub_field('blok_2_img')):
						$img = get_sub_field('image');
					$link = get_sub_field('link');  ?>
					<div class="row col-6 d-flex justify-content-center ">
						<a href="<?=  $link ?>"><img class="broadcast_program_partners_img pb-4"
							src="<?=  $img ?>" alt="">
						</a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="text-center font-size-26 mb-40"><?php the_field('blok_3_title'); ?></div>
				<div class="d-flex flex-wrap justify-content-center">
					<?php while (has_sub_field('blok_3_img')):
						$img = get_sub_field('image');
					$link = get_sub_field('link');  ?>
					<div class="row col-6 d-flex justify-content-center ">
						<a href="<?=  $link ?>"><img class="broadcast_program_partners_img pb-4"
							src="<?=  $img ?>" alt="">
						</a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="front_speakers">
	<div class="container">
		<div class="row">
			<div class="front_speakers_title text-center font-size-40 pt-110 mb-40 col-12">
				Cпикеры
			</div>
		</div>
		
		<div class="row ">
			<div class="col-11 front_speakers_slider">
				<?php $args = array('post_type' => 'speakers', 'order' => 'ASC', 'post_status' => 'publish');
					$query = new WP_Query($args);
				while ($query->have_posts()) : $query->the_post(); ?>
				<div class="px-5 w-100 text-center">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail('front-speaker-slider');
					} ?>
					<p class="font-weight-bold font-size-22"><?php the_title(); ?></p>
					<?php the_excerpt(); ?>
				</div>
				<?php endwhile;
				wp_reset_query(); ?>
			</div>
		</div>
		
	</div>
</section>

<section class="helpful">
	<div class="container pb-110">
		<div class="helpful_title text-white text-center font-size-40 pt-110 mb-40">
			<?php the_field('for_title'); ?>
		</div>
		<div class="d-flex flex-wrap justify-content-center">
			
			<?php while (has_sub_field('for_icons')):
				$img = get_sub_field('image');
				$title = get_sub_field('title');
			$text = get_sub_field('text'); ?>
			<div class="col-12 col-md-3 text-center line-height-33 w-100 max-w-270">
				<div class="helpful_icon">
					<img src="<?= $img; ?>" alt="">
				</div>
				<div class="helpful_icon_title text-white font-size-22 pt-4"><?= $title; ?></div>
				<div class="helpful_icon_desc text-white font-size-16">
					<?= $text; ?>
				</div>
			</div>
			<?php endwhile; ?>
			
		</div>
		<div class="text-center pt-80">
			<button class="my-4 registr_btn"><?php the_field('for_btn_name'); ?></button>
		</div>
	</div>
</section>

<section class="project_description">
	<div class="d-flex justify-content-center align-items-center flex-row-reverse">
		<div class="d-none d-md-block">
			<img src="<?php the_field('desc_img'); ?>" alt="">
		</div>
		<div class="container max-w-750 w-100">
			<div class="font-size-40 mb-40 pt-5">
				<?php the_field('desc_title'); ?>
			</div>
			<div>
				<p class="font-size-18 line-height-30"><?php the_field('desc_text'); ?></p>
				
				<div class="about_project mx-auto mb-5">
					<a class="d-flex justify-content-center align-items-center w-100 h-100"
					href=""><?php the_field('desc_btn'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="items position-relative" 
style="background-image: url('<?php bloginfo('template_directory'); ?>/images/Rectangle(1).png')">
		<div class="container d-flex flex-wrap text-center h-100 justify-content-center align-items-center">
			<div class="row align-items-start">
				<?php while (has_sub_field('steps_date')):
					$img = get_sub_field('img');
					$title = get_sub_field('title');
				$text = get_sub_field('text'); ?>
				<div class="pt-3 col">
					<div>
						<img src="<?= $img; ?>" alt="">
					</div>
					<div class="font-size-18 text-white px-3 pt-4 line-height-30">
						<?= $title; ?>
						<div class="font-size-16 text-white">
							<?= $text; ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
</section>

<section class="program">
	<div class="container">
		<div class="text-center font-size-40 pt-110 mb-40">
			Программа
		</div>
		<div class="pb-110">
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">16:00 - 16:50</div>
				<div class="col-10 font-size-22">Сбор гостей</div>
			</div>
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">16:50 - 17:00</div>
				<div class="col-10 font-size-22">Подготовка к началу закрытой презентации, подключение к трансляции,
					в онлайн
				</div>
			</div>
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">17:00</div>
				<div class="col-10 font-size-22">СНачало программы, начало трансляции в онлайн</div>
			</div>
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">17:00 - 17:30</div>
				<div class="col-10 font-size-22">Панельная дискуссия о ситуации в отрасли и трендах на 2021 год
				</div>
			</div>
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">18:55</div>
				<div class="col-10 font-size-22">Завершение трансляции в онлайн</div>
			</div>
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">19:00</div>
				<div class="col-10 font-size-22">Пресс - конференция</div>
			</div>
			<div class="col-12 program_item d-flex py-4">
				<div class="col-2 row font-size-18">19.30- 20.00</div>
				<div class="col-10 font-size-22">Нетворкинг, фуршет</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
