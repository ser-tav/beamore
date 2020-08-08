<?php
/**
 * Template Name: О проекте
 */
get_header(); ?>
<div class="about_the_project_page">
    <section class="project_main_blok" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID) ?>')">
        <div class="project_main_bg">
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
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link active"
                       id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                       aria-selected="true">Наши клиенты</a>
                </li>
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link"
                       id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                       aria-controls="pills-profile" aria-selected="false">Функционал</a>
                </li>
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link"
                       id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                       aria-controls="pills-contact" aria-selected="false">Конкуренты</a>
                </li>
                <li class="d-flex justify-content-center align-items-center about_tub nav-item">
                    <a class="d-flex justify-content-center align-items-center w-100 font-size-18 nav-link"
                       id="launch-dates-tab" data-toggle="pill" href="#launch-dates" role="tab"
                       aria-controls="pills-contact" aria-selected="false">Сроки запуска</a>
                </li>
            </ul>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="tab-content row col-md-8 col-12" id="pills-tabContent">
                    <div class="w-100 tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">.
                        <div class="font-size-16">
                            <p class="pb-5 line-height-26">
                                Ивент Маркетплейс beAmore задумывался как простой сервис для пользователей кто хочет или
                                умеет самостоятельно заниматься организацией мероприятий. Но в процессе разработки
                                проекта нам стало понятно, что аудитория сервиса может быть настолько огромной, что
                                иногда даже сложно представить это и описать. Тем не менее мы четко для себя определили
                                что beAmore это b2b2c Event Marketplace с сервисом для самостоятельного планирования
                                мерпориятий.</p>

                            <p class="pb-5 line-height-26">b2c аудитория beAmore это прежде всего свободные от рамок и
                                границ люди, которые могут быть как в паре, так и жить холостяцкой жизнью. Люди которые
                                четко знают что хотят в этой жизни, а главное знают как этого достичь. Современные люди
                                как поколения X, Y и Z, так и миллениалы, которые привыкли и хотят пользоваться услугами
                                в онлайн. Ядром ЦА beAmore является молодое поколение мужчин (35%) и женщин(65%) в
                                возрасте от 25-45 лет, которые могут самостоятельно принимать решения и оплачивать свои
                                потребности. Молодые люди до 25 лет так же являются нашей ЦА, но в большинстве случаев
                                решение по оплате тех или иных услуг, принимается родителями. Аудитория после 45 лет -
                                элита beAmore, успешные состоявшиеся в жизни люди, которые достигли определенного уровня
                                жизни и хотят получать за свои деньги определенные виды услуг, не считают свои расходы,
                                но и не переплачивают за не качественный сервис.</p>

                            <p class="pb-5 line-height-26">b2b аудитория beAmore так же многогранна и ограничивается
                                лишь фантазией поставщиков. Чтобы было легче и проще работать в системе beAmore, мы
                                разделили всех поставщиков на 4 типа.
                            </p>
                        </div>
                        <div class="our_clients_video pb-5">
                            <iframe width="100%" height="307" style="max-width: 547px"
                                    src="https://www.youtube.com/embed/YjJcUlshEzg" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="font-size-20 pb-3"><span class="pr-3">II</span>Поставщики услуг</div>
                            <div class="font-size-16 line-height-26">
                                Зачастую это фрилансеры, но очень часто это могут быть и компании со штатом
                                специалистов. К потсавшикам услуг относятся все кто предоставляет различные виды услуг
                                как для мероприятий и свадеб, так и для путешествий. К поставщикам услуг относятся
                                фотографы; видеографы; ведущие; прокатные компании (звук, свет, сцена); оформители и
                                декораторы; танцевальные, музыкальные, песочные и всевозможные шоу; компании сдающие в
                                аренду ретро авто, лимузины; частные лица и компании предоставляющие услуги трансфера;
                                экскурсионные и трэвел гиды, промо и технический персонал, словом все те, кто
                                обслуживает огромную индустрию развлечений и путешествий.
                                Отдельно отметим, что кейтеринговые компании относятся к другому типу поставщиков.
                            </div>
                        </div>
                        <div class="font-size-16 pb-5 line-height-26">
                            Как мы видим ЦА beAmore многогранна и будет не правильно измерять ее конкретным возрастом
                            или полом. Работать с beAmore и в beAmore может каждый кто достиг 18 лет, умеет пользоваться
                            компьютером, готов предложить свои услуги или пользоваться услугами других людей.
                        </div>
                        <div class="max-w-750 mb-110">
                            <div class="our_clients_slider">
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
                        <p class="font-size-16 line-height-26 pb-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p class="font-size-16 line-height-26 pb-5"> Excepteur sint occaecat cupidatat, dolore eu fugiat nulla pariatur non proident. Dolorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et fugiat nulla pariatur dolore magna aliqua. Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="max-w-750 pb-5">
                            <div class="functional_slider">
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Rectangle 87.png" alt="">
                                </div>
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
                        <div class="funtional_items">
                            <div class="fun_item">
                                <div class="font-size-20 line-height-26">Важный функционал 1</div>
                                <p class="font-size-16 line-height-26 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>

                                <p class="font-size-16 line-height-26 pb-5">Excepteur sint occaecat cupidatat, dolore eu fugiat nulla pariatur non proident. Dolorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et fugiat nulla pariatur dolore magna aliqua. Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="fun_item">
                                <div class="font-size-20 line-height-26">Важный функционал 2</div>
                                <p class="font-size-16 line-height-26 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>

                                <p class="font-size-16 line-height-26 pb-5">Excepteur sint occaecat cupidatat, dolore eu fugiat nulla pariatur non proident. Dolorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et fugiat nulla pariatur dolore magna aliqua. Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="fun_item">
                                <div class="font-size-20 line-height-26">Важный функционал 3</div>
                                <p class="font-size-16 line-height-26 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. In culpa qui officia deserunt mollit anim id est laborum.</p>

                                <p class="font-size-16 line-height-26 pb-5">Excepteur sint occaecat cupidatat, dolore eu fugiat nulla pariatur non proident. Dolorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et fugiat nulla pariatur dolore magna aliqua. Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="funtional_video mb-50">
                            <iframe width="100%" height="307" style="max-width: 547px"
                                    src="https://www.youtube.com/embed/YjJcUlshEzg" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="w-100 tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div>
                            <p class="font-size-16 line-height-26 pb-5"> Мы в beAmore можем смело заявить, что прямых конкурентов у нас нет! Наш сервис действительно уникален. Безусловно в каждом отдельном направлении так или иначе у нас присутствуют конкуренты, но чем beAmore выгодно отличается от всех них. Главное наше отличие от всех в том, что мы генерируем для поставщиков реальные заказы из реальных проектов клиентов созданных внутри beAmore. Мы не занимаемся продажей вам рекламы или выведением в ТОП за деньги ваших страниц, мы продаем ваши товары и ваши услуги!</p>

                            <p class="font-size-16 line-height-26 pb-5">Ниже в таблице мы приводим сравнительные данные по нашим конкурентам о наличие тех или иных основных критериев для принятия решения.
                            И самое главное, что начиная работу с beAmore, вы начинаете работать сразу в нескольких направления, кастомизируя и минимизируя свои расходы!</p>

                        </div>
                    </div>
                    <div class="w-100 tab-pane fade" id="launch-dates" role="tabpanel" aria-labelledby="launch-dates-tab">
                        <div>
                            <p class="font-size-16 line-height-26 pb-5">Пандемия вызванная вирусом Covid-2019 внесла существенные корректировка в нашу с вами жизнь. Что так же отразилось на запусках нашего сервиса beAmore.  Прогнозировать что будет с отраслью не берутся даже самые продвинутые эксперты. Тем не менее мы твердо решили провести презентацию beAmore широкой аудитории потенциальных поставщиков сервиса 12 ноября 2020 года.
                                Но работа начнется уже в сентябре, именно с сентября мы начнем предварительную продажу лицензий со скидкой в 30%, в октябре скидка составит 20% и в ноябре до момента презентации сервиса 10%. После презентации сервиса скидок не предусматривается.</p>

                            <p class="font-size-16 line-height-26 pb-5"> Презентация проекта состоится в отеле Hyatt Petorvsky Park, на которую буду приглашены профильные СМИ, специальные гости, а так же будут разыграны 50 пригласительных среди поставщиков зарегистрировавшихся beAmore и купивших лицензию до 12 октября 2020 года. Всего на мероприятие буду приглашены 350 гостей. Для всех остальных будет организована трансляция в online.
                                Для заказчиков, презентация сервиса beAmore состоится через месяц 12.12.2020 года. В этот  день будет объявлена и анонсирована через социальные сети и СМИ акция с условиями участия в ней, сроками ее проведения и денежными призами, такими как, выиграй миллион на свою свадьбу в 2021 году, а так же различные денежные призы от 250000 рублей до полумиллиона, на свои мероприятия и путешествия.
                            </p>
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
