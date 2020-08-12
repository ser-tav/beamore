<?php get_header(); ?>

<section class="main_blok" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>');">
	<div class="container pt-130">
		<div class="row pb-80">
			<div class="col-md-6">
				<div class="main_blok_day w-100 mb-3 font-size-30 d-flex justify-content-center mx-auto text-center"><?php the_field('main_date'); ?></div>
				<div class="main_blok_time pb-5 text-white font-size-30 text-center"><?php the_field('main_date_2'); ?></div>
				<div class="main_blok_title pb-5 text-white font-size-40 text-center"><?php the_field('main_title'); ?></div>
				<div class="main_blok_desc text-white font-size-28 text-center"><?php the_field('main_text'); ?></div>
			</div>
			<div class="col-md-6 text-center video-block">
				<div class="main_blok_video pt-5 px-2"><?php the_field('main_video'); ?></div>
				<button class="my-4 registr_btn">РЕГИСТРАЦИЯ НА МЕРОПРИЯТИЕ</button>
			</div>
		</div>
	</div>
	<div class="main_blok_partners">
		<div class="container">
			<div class="row flex-wrap">
				<?php while (has_sub_field('main_partners')) : $image = get_sub_field('image'); $text = get_sub_field('text'); ?>
				<div class="col-12 col-md-4 py-3 font-size-18 text-center">
					<div class="pb-3 text-side"><?php echo $text; ?></div>
					<div>
						<img src="<?php echo $image; ?>" alt="">
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<section class="about_the_event" style="background-image: url('<?php the_field('about_image'); ?>');">
	<div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <div class="about_the_event_title text-white font-size-40 pt-110 mb-40">
                    <?php the_field('about_headling'); ?>
                </div>
                <div class=" d-flex ">
                    <div class="about_the_event_desc text-white ">
                        <p class="pb-4 font-size-18"><?php the_field('about_text'); ?></p>
                    </div>
                </div>
                <div class=" pb-110">
                    <button class="my-4 registr_btn"><?php the_field('about_button_name'); ?></button>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="broadcast_program">
	<div class="container">
		<div class="broadcast_program_title text-center font-size-40 pt-110 mb-40"><?php the_field('programm_title'); ?></div>
		<!-- TO DO  slider widget -->
		<div class="row pb-80">
			<div class="broadcast_program_slider text-center mx-auto  col-11">
				<?php while (has_sub_field('add_program')) : $image = get_sub_field('image'); $time = get_sub_field('time'); $text = get_sub_field('text'); ?>
				<div class="px-5 w-100" style="max-width: 360px!important">
					<div class="broadcast_slider_img mb-30">
						<img class=" w-100"	src="<?php echo $image; ?>" alt="">
					</div>
					<div class="font-size-16 broadcast_program_slider_desc">
						<p class="font-weight-bold font-size-22"><?php echo $time; ?></p>
						<?php echo $text; ?>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<!-- TO DO  slider widget -->
		</div>
	</div>
	<div class="broadcast_program_partners pb-110">
		<div class="container d-flex flex-wrap pt-110">
			<div class="col-12 col-md-4">
				<div class="text-center font-size-26 mb-40"><?php the_field('blok_1_title'); ?></div>
				<div class="text-center">
					<?php while (has_sub_field('blok_1_img')): $img = get_sub_field('image'); $link = get_sub_field('link'); ?>
					<a href="<?=  $link ?>">
						<img src="<?=  $img ?>" alt="">
					</a>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="text-center font-size-26 mb-40"><?php the_field('blok_2_title'); ?></div>
				<div class="d-flex flex-wrap justify-content-center">
					<?php while (has_sub_field('blok_2_img')): $img = get_sub_field('image'); $link = get_sub_field('link'); ?>
					<div class="row col-6 d-flex justify-content-center ">
						<a href="<?=  $link ?>">
						<img class="broadcast_program_partners_img pb-4 pr-2" src="<?=  $img ?>" alt="">
						</a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="text-center font-size-26 mb-40"><?php the_field('blok_3_title'); ?></div>
				<div class="d-flex flex-wrap justify-content-center">
					<?php while (has_sub_field('blok_3_img')): $img = get_sub_field('image'); $link = get_sub_field('link'); ?>
					<div class="row col-6 d-flex justify-content-center ">
						<a href="<?=  $link ?>">
							<img class="broadcast_program_partners_img pb-4 pr-2" src="<?=  $img ?>" alt="">
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
			<div class="front_speakers_title text-center font-size-40 pt-110 mb-40 col-12">Cпикеры</div>
		</div>
		<div class="row  pb-5">
			<div class="col-11 front_speakers_slider">
				<?php $args = array('post_type' => 'speakers', 'order' => 'ASC', 'post_status' => 'publish'); $query = new WP_Query($args);	while ($query->have_posts()) : $query->the_post(); ?>
				<div class="px-5 w-100 text-center">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail('front-speaker-slider');
					} ?>
					<p class="font-weight-bold font-size-22"><?php the_title(); ?></p>
					<?php the_field('speaker_dolj'); ?>
				</div>
				<?php endwhile;	wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<section class="helpful">
	<div class="container pb-110">
        <div class="row justify-content-center">
            <div class="col-12 helpful_title text-white text-center font-size-40 pt-110 mb-40">
                <?php the_field('for_title'); ?>
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <?php while (has_sub_field('for_icons')): $img = get_sub_field('image'); $title = get_sub_field('title'); $text = get_sub_field('text'); ?>
                <div class="col-12 col-md-3 text-center line-height-33 w-100 max-w-270">
                    <div class="helpful_icon">
                        <img src="<?= $img; ?>" alt="">
                    </div>
                    <div class="helpful_icon_title text-white font-size-22 pt-4"><?= $title; ?></div>
                    <div class="helpful_icon_desc text-white font-size-16"><?= $text; ?></div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="text-center pt-80">
                <button class="my-4 registr_btn"><?php the_field('for_btn_name'); ?></button>
            </div>
        </div>
	</div>
</section>

<section class="project_description" style="background-image: url('<?php the_field('desc_img'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="font-size-40 mb-40 pt-5">
                    <?php the_field('desc_title'); ?>
                </div>
                <div class="font-size-40 mb-40 pt-5">
                    <p class="font-size-18 line-height-30"><?php the_field('desc_text'); ?></p>
                    <div class="about_project mx-auto mb-5">
                        <a class="d-flex justify-content-center align-items-center" href=""><?php the_field('desc_btn'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="items position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/Rectangle(1).png')">
        <div class="position-absolute yellow_line" ></div>
		<div class="container d-flex flex-wrap text-center h-100 justify-content-center align-items-center">
			<div class="row align-items-start pt-110 ">
				<?php while (has_sub_field('steps_date')): $img = get_sub_field('img'); $title = get_sub_field('title'); $text = get_sub_field('text'); ?>
				<div class="pb-5 col">
					<div>
						<img src="<?= $img; ?>" alt="">
					</div>
					<div class="font-size-17 text-white px-3 pt-4 line-height-30">
						<?= $title; ?>
						<div class="font-size-13 text-white"><?= $text; ?></div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
</section>

<section class="program">
	<div class="container">
		<div class="row text-center font-size-40 pt-110 mb-40">
            <div class="col-12">Программа</div>
		</div>
		<div class="row pb-110">
            <?php while (has_sub_field('all_programs_date')):  $date = get_sub_field('date'); $text = get_sub_field('text'); ?>
			<div class="w-100 program_item d-flex py-4">
				<div class="col-lg-2 col-sm-4 font-size-18"><?= $date; ?></div>
				<div class="col-lg-10 col-sm-8 font-size-22"><?= $text; ?></div>
			</div>
            <?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>