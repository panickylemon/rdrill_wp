<?php
/**
 * Template Name: Контакты
 */
?>


<?php get_header(); ?>

<main class="content">

    <div class="l-container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <div class="l-container">

        <div class="contacts-wrap">

            <?php $page_title = get_post_meta( $post->ID, 'page_title', true ); ?>
            <?php if (!empty($page_title)) { ?>
                <h1><?php echo $page_title ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>

            <div class="clearfix">
                <div class="contacts-content">
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>

                <div class="map-wrap">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ypZYDLDxhitrFLEUMfUN8N-HsQuOvjle&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                </div>
            </div>

            <div class="contacts-staff">
                <h2>
                    <span class="advantages-line"></span>
                    <span class="advantages-number-">Контакты сотрудников</span>
                    <span class="advantages-line"></span>
                </h2>
                <div class="clearfix">

                    <div class="contacts-staff__item">
                        <div class="contacts-staff__photo olkhovik"></div>
                        <p class="staff-name">
                            Ольховик Никита Игоревич
                        </p>
                        <p class="contacts-staff__position text--grey">
                            Руководитель отдела продаж
                        </p>

                        <p class="contacts-staff__icon contacts-staff__skype">Olhovik.portal</p>
                        <p class="contacts-staff__icon contacts-staff__email">olhovik@zaoportal.ru</p>
                        <p class="contacts-staff__icon contacts-staff__phone">+7 (812) 640 44 04, доб.220</p>
                        <p class="contacts-staff__icon contacts-staff__phone-2">+7 965 073 20 88</p>
                    </div>

                    <div class="contacts-staff__item">
                        <div class="contacts-staff__photo dudkin"></div>
                        <p class="staff-name">
                            Дудкин Георгий Александрович
                        </p>
                        <p class="contacts-staff__position text--grey">
                            Руководитель региональных продаж
                        </p>

                        <p class="contacts-staff__icon contacts-staff__skype">Olhovik.portal</p>
                        <p class="contacts-staff__icon contacts-staff__email">dudkin@zaoportal.ru</p>
                        <p class="contacts-staff__icon contacts-staff__phone">+7 (812) 640 44 04, доб.220</p>
                        <p class="contacts-staff__icon contacts-staff__phone-2">+7 921 964 42 61</p>
                    </div>

                    <div class="contacts-staff__item">
                        <div class="contacts-staff__photo pogonec"></div>
                        <p class="staff-name">
                            Погонец Мария Олеговна
                        </p>
                        <p class="contacts-staff__position text--grey">
                            Заместитель начальника снабжения
                        </p>

                        <p class="contacts-staff__icon contacts-staff__skype">pogonecmaria77</p>
                        <p class="contacts-staff__icon contacts-staff__email">pogonec@zaoportal.ru</p>
                        <p class="contacts-staff__icon contacts-staff__phone">+7 (812) 640 44 04, доб.220</p>
                        <p class="contacts-staff__icon contacts-staff__phone-2">+7 921 979 19 84</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>


