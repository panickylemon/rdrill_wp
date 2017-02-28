<?php get_header(); ?>

<main class="content">

    <div class="l-container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <div class="l-container">
    <?php get_sidebar('about-inner'); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();?>

            <div class="about-content">
                <h1>Новости</h1>

                <div class="news-item">
                    <h2 class="news-item__title"><?php the_title(); ?></h2>

                    <div class="news-item__additional-info clearfix">
                        <p class="news-date">
                            <span class="news__additional-title">Дата</span>
                            <span><?php the_time('d.m.Y') ?></span>
                        </p>

                        <p class="news-author">
                            <span class="news__additional-title">Автор:</span>
                            <span class="news-name"><?php the_author(); ?></span>
                        </p>
                    </div>

                    <?php if ( has_post_thumbnail()) : ?>
                        <div class="news-item__image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="news-item__text">
                        <?php the_content(''); ?>
                    </div>

<!--                    <div class="news-item__sales-leader clearfix">-->
<!--                        <div class="sales-leader__wrap-item">-->
<!--                            <div class="sales-leader__item sales-leader__first">-->
<!--                                <p class="sales-leader__title">-->
<!--                                    Станок-->
<!--                                    <span class="sales-leader__name">COMMANDO 40</span>-->
<!--                                </p>-->
<!--                                <img class="sales-leader__img" src="image/base/news-machine.png" alt="станок">-->
<!--                                <p class="sales-raiting">-->
<!--                                    <span class="sales-raiting--large">Лидер</span>-->
<!--                                    по продажам-->
<!--                                </p>-->
<!--                                <div class="sales-leader__characteristics">-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Мощность</span> <span-->
<!--                                            class="characteristics-item__value">1100 Вт</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Скор. вращ.</span> <span-->
<!--                                            class="characteristics-item__value">270-610 об/мин</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Диаметр сверления</span> <span-->
<!--                                            class="characteristics-item__value">макс. 13 мм</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Глубина</span> <span-->
<!--                                            class="characteristics-item__value">макс. 50 мм</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Вес</span> <span-->
<!--                                            class="characteristics-item__value">14.2 кг</span>-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <a class="base-button base-button--grey sales-leader__button" href="#">-->
<!--                                    Описание-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="sales-leader__wrap-item">-->
<!--                            <div class="sales-leader__item sales-leader__not-first sales-leader__second">-->
<!--                                <p class="sales-leader__title">-->
<!--                                    Станок-->
<!--                                    <span class="sales-leader__name">ELEMENT 30</span>-->
<!--                                </p>-->
<!--                                <img class="sales-leader__img" src="image/base/news-machine.png" alt="станок">-->
<!--                                <p class="sales-raiting">-->
<!--                                    <span class="sales-raiting--large"><span-->
<!--                                            class="sales-raiting--red">2 </span>место</span>-->
<!--                                    по продажам-->
<!--                                </p>-->
<!--                                <div class="sales-leader__characteristics">-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Мощность</span> <span-->
<!--                                            class="characteristics-item__value">850 Вт</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Скор. вращ.</span> <span-->
<!--                                            class="characteristics-item__value">600 об/мин</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Диаметр сверления</span> <span-->
<!--                                            class="characteristics-item__value">макс. 13 мм</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Глубина</span> <span-->
<!--                                            class="characteristics-item__value">макс. 35 мм</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Вес</span> <span-->
<!--                                            class="characteristics-item__value">10.8 кг</span>-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <a class="base-button base-button--grey sales-leader__button" href="#">-->
<!--                                    Описание-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="sales-leader__wrap-item">-->
<!--                            <div class="sales-leader__item sales-leader__not-first sales-leader__item-third">-->
<!--                                <p class="sales-leader__title">-->
<!--                                    Станок-->
<!--                                    <span class="sales-leader__name">FALCON</span>-->
<!--                                </p>-->
<!--                                <img class="sales-leader__img" src="image/base/news-machine.png" alt="станок">-->
<!--                                <p class="sales-raiting">-->
<!--                                    <span class="sales-raiting--large"><span-->
<!--                                            class="sales-raiting--red">3 </span>место</span>-->
<!--                                    по продажам-->
<!--                                </p>-->
<!--                                <div class="sales-leader__characteristics">-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Мощность</span> <span-->
<!--                                            class="characteristics-item__value">1250 Вт</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Скор. вращ.</span> <span-->
<!--                                            class="characteristics-item__value">100-500 об/мин</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Диаметр сверления</span> <span-->
<!--                                            class="characteristics-item__value">макс. 13 мм</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Глубина</span> <span-->
<!--                                            class="characteristics-item__value">макс. 550 мм</span>-->
<!--                                    </p>-->
<!--                                    <p class="sales-leader__characteristics-item">-->
<!--                                        <span class="characteristics-item__name">Вес</span> <span-->
<!--                                            class="characteristics-item__value">13.5 кг</span>-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <a class="base-button base-button--grey sales-leader__button" href="#">-->
<!--                                    Описание-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="news-item__director">
                        <img class="news-item__director-img" src="/wp-content/themes/rdrill-theme/image/base/advantages-1.png" alt="фото">
                        <div class="news-item__director-text">
                            <p class="news-item__director-name">Фамилия Имя Отчество</p>
                            <p class="news-item__director-position">Директор по маркетингу ОАО «Портал»</p>
                            <p>
                                Андрей работает с крупными клиентами Северо-Запада и досконально знает всю продукцию
                                Rotabroach. Если у вас есть вопрос по ассортименту или требуется помощь в выборе, то
                                Андрей всегда поможет.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>
    </div>

    <div class="l-container other-news">
        <p class="other-news__title">Рекомендуем почитать дополнительно:</p>
        <div class="other-news__wrap clearfix">

            <div class="other-news__item other-news__item-first">
                <img class="other-news__item-img" src="image/base/advantages-1.png" alt="фото">
                <a class="other-news__item-link" href="#"><span>Заголовок новости</span></a>
            </div>

            <div class="other-news__item other-news__item-second">
                <img class="other-news__item-img" src="image/base/advantages-1.png" alt="фото">
                <a class="other-news__item-link" href="#"><span>Заголовок новости</span></a>
            </div>

            <div class="other-news__item other-news__item-third">
                <img class="other-news__item-img" src="image/base/advantages-1.png" alt="фото">
                <a class="other-news__item-link" href="#"><span>Заголовок новости</span></a>
            </div>

            <div class="other-news__item other-news__item-last">
                <img class="other-news__item-img" src="image/base/advantages-1.png" alt="фото">
                <a class="other-news__item-link" href="#"><span>Заголовок новости</span></a>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>
