<div class="about-sidebar">
    <nav class="about-menu">
        <p class="about-sidebar__title">
            Помощь
        </p>
        <?php
            $walker = new helpMenuWalker();
            wp_nav_menu( array(
                'menu'  => 94,
                'depth' => 1, // уровень вложенности
                'container' => false,
                'menu_class' => 'about-sidebar__list',
                'walker' => $walker
            ));
        ?>
    </nav>

    <div class="contact-manager">
        <p class="sidebar__subtitle">
            Есть <strong>вопросы?</strong>
        </p>
        <img class="contact-manager__image" src="/wp-content/themes/rdrill-theme/image/base/man.png" alt="менеджер">
        <p class="contact-manager__text">
            Свяжитесь с нашим менеджером по продажам
        </p>
        <a class="base-button base-button--red contact-manager__button" href="#questions-form"
           data-toggle="modal">Задать вопрос</a>
    </div>

</div>