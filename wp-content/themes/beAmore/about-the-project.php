<?php /* Template Name: О проекте */ get_header(); ?>
<div class="about_the_project_page">
    <section class="project_main_blok" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID) ?>')">
        <div class="project_main_bg">
            <div class="container pt-130">
                <div class="flex-wrap pb-80">
                    <div class="col-8">
                        <h2 class="w-100 mb-3 font-size-56 text-uppercase text-white text-left"><?php the_title() ?></h2>
                        <div class="w-100 pb-5 text-white font-size-23 text-left"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <ul class="nav nav-pills flex-wrap mb-5" id="pills-tab" role="tablist">
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><?php the_field('tab_name_1'); ?></a>
                </li>
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><?php the_field('tab_name_2'); ?></a>
                </li>
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><?php the_field('tab_name_3'); ?></a>
                </li>
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link" id="launch-dates-tab" data-toggle="pill" href="#launch-dates" role="tab" aria-controls="pills-contact" aria-selected="false"><?php the_field('tab_name_4'); ?></a>
                </li>
            </ul>
            <div class="row flex-wrap justify-content-between">
                <div class="tab-content col-lg-9" id="pills-tabContent">
                    <div class="w-100 tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php the_field('tab_content_1'); ?>
                    </div>
                    <div class="w-100 tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<?php the_field('tab_content_2'); ?>
                    </div>
                    <div class="w-100 tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<?php the_field('tab_content_3'); ?>
                    </div>
                    <div class="w-100 tab-pane fade" id="launch-dates" role="tabpanel" aria-labelledby="launch-dates-tab">
                        <?php the_field('tab_content_4'); ?>
                    </div>
                </div>
                <div class="col-lg-3 w-100 h-100 flex-wrap ml-lg-auto mb-5">
                    <div class="go_to_beamore w-100">
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">Cайт</div>
                            <div class="font-size-12">beamore.ru</div>
                        </div>
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">СРОКИ ЗАПУСКА</div>
                            <div class="font-size-12">ноябрь 2020</div>
                        </div>
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">Презентация проекта</div>
                            <div class="font-size-12">12 ноября 2020 онлайн и оффлайн (Москва)</div>
                        </div>
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">Для кого</div>
                            <div class="font-size-12">поставщики услуг, товаров, площадок, агенств</div>
                        </div>
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">стоимость лицензии</div>
                            <div class="font-size-12">от 11 500 до 40 000 руб.</div>
                        </div>
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">Языки</div>
                            <div class="font-size-12">русский и английский</div>
                        </div>
                        <div class="pb-2">
                            <div class="font-size-13 text-uppercase">контакты</div>
                            <div class="font-size-12">
                                <a href="mailto:info@beamore.ru">info@beamore.ru</a><br>
                                <a href="tel:+7(926)209-21-71">+7(926)209-21-71</a>
                            </div>
                        </div>
                    </div>
                    <div class="go_to_beamore_btn mx-auto my-5">
                        <a class="d-flex justify-content-center align-items-center w-100 h-100" href="#">ПЕРЕЙТИ НА
                            BEAMORE.RU</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>