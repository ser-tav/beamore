<?php
/**
 * Template Name: Преимущества
 */
get_header(); ?>
<div class="advantages_page">
    <section class="advantages_blok" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID) ?>')">
        <div class="advantages_bg">
            <div class="container pt-130">
                <div class="flex-wrap pb-80">
                    <div class="col-8">
                        <h2 class="w-100 mb-3 font-size-30 text-white text-left">
                            <?php the_title() ?>
                        </h2>
                        <div class="w-100 pb-5 text-white font-size-23 text-left">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <ul class="nav nav-pills flex-wrap mb-5" id="pills-tab" role="tablist">
                <li class="d-flex justify-content-center align-items-center w-100 w-md-25  nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link active"
                       id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                       aria-selected="true">Вступление</a>
                </li>
                <li class="d-flex justify-content-center align-items-center w-100 w-md-25  nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link"
                       id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                       aria-controls="pills-profile" aria-selected="false">Почему именно сейчас </a>
                </li>
                <li class="d-flex justify-content-center align-items-center w-100 w-md-25  nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link"
                       id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                       aria-controls="pills-contact" aria-selected="false">Программа лояльности </a>
                </li>
                <li class="d-flex justify-content-center align-items-center w-100 w-md-25  nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link"
                       id="launch-dates-tab" data-toggle="pill" href="#launch-dates" role="tab"
                       aria-controls="pills-contact" aria-selected="false">Партнерская программа</a>
                </li>
            </ul>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="tab-content row col-md-8 col-12" id="pills-tabContent">
                    <div class="w-100 tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">.
                        <div class="font-size-16">
                            <p class="pb-5 line-height-26">
                                beAmore это уникальный Event маркетплейс аналогов которого нет ни в одной стране мира. Мы объединили сразу три рынка, где каждый поставщик может начать свою работу, продвигая свои услуги или продавая товары. Это значит, что как минимум в три раза мы минимизировали ваши траты и сэкономили вам деньги. Мы отказались от подписки, а это значит что в будущем, через год, ваши деньги останутся при вас и вам не нужно будет их нести в непонятные но хорошо раскрученные рекламные каталоги в надежде получить от них клиентов. Все клиенты рано или поздно будут в beAmore, потому что мы экономим им не только время, но и деньги. Мы придумали инструменты бесплатного продвижения поставщиков на страницах нашего каталога, в отличие от нас все остальные сервисы берут деньги за каждую статью, за каждое упоминание о поставщике, мы нет. Интересные и полезные статьи от поставщиков будут попадать в анонсы на главную страницу, а так же в рассылки пользователям, подписавшимся на новости. У нас много преимуществ одно из которых мы современнее всех!</p>

                            <p class="pb-5 line-height-26">Регистрируйтесь в beAmore как можно раньше и получаете основные преимущества перед теми поставщиками, кто зарегистрируется позже, ведь даже незначительные 0,01 балла к рейтингу позволят вам и вашим предложениям появляться в поисковой выдаче клиентов раньше остальных поставщиков.</p>

                            <p class="pb-5 line-height-26">Есть и другие преимущества в ранней покупке лицензии. Во-первых у вас есть возможность приобрести лицензию по самой низкой цене. Во-вторых за раннюю оплату вам будет начислены дополнительные 0,5 балла к рейтингу. В-третьих с момента ранней регистрации в сентябре у вас начнется стаж в beAmore. Каждый год стажа принесет поставщику несгораемые 0,33 балла к рейтингу. Всего за три года каждый поставщик зарабатывает дополнительный 1 не сгораемы балл к общему рейтингу.</p>

                            <p class="pb-5 line-height-26">Важно помнить, что рейтинг в beAmore динамичный, а это значит чем большей у вас заказов, оценок, и отзывов, тем выше ваш рейтинг.</p>
                        </div>

                        <div class="max-w-750 mb-110">
                            <div class="introduction_slider">
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="max-w-750 mb-5">
                            <div class="why_now_slider">
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                            </div>
                        </div>

                        <p class="font-size-16 line-height-26 pb-5">Сейчас самое лучшее время привести все свои дела в порядок, оглядеться вокруг и понять, как именно изменился мир, чему мы стали доверять больше, а к чему доверия поубавилось. Осознать, как изменилась жизнь людей, какие приоритеты вышли на первый план, какие человеческие потребности стали главными. Посмотрите что нового появилось в этом мире, посмотрите на наш сервис beAmore, изучите его поймите как он работает и подготовьтесь к новому сезону свадеб, мероприятий и путешествий в 2021 году. Заполните внимательно свою персональную бизнес страницу, добавьте качественное портфлоио, проработайте свои предложения и выходите к своим новым клиентам подготовленными, во всеоружии. Все проекты, свадьбы, вечеринки и мероприятия, которых не было в этом году, заявят о себе уже очень скоро, так как самоизоляция и другие ограничения уже сформировали отлженный спрос, а значит в 2021 году нас ждеут настоящий бум как свадеб, так и мероприятий.
                        </p>
                    </div>
                    <div class="w-100 tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div>
                            ......................
                        </div>
                    </div>
                    <div class="w-100 tab-pane fade" id="launch-dates" role="tabpanel" aria-labelledby="launch-dates-tab">
                        <div>
                          ........................
                        </div>
                    </div>
                </div>
                <div class="col-12 row col-md-4 max-w-270 w-100 h-100 mx-auto">
                    <div class="go_to_beamore">
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
