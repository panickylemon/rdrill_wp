<div class="about-sidebar">
    <nav class="about-menu">
        <?php
            $walker = new asideMenuWalker();
            wp_nav_menu( array(
                'menu'  => 93,
                'depth' => 1, // уровень вложенности
                'container' => false,
                'menu_class' => 'about-sidebar__list'
            ));
        ?>
    </nav>
    <nav class="about-menu">
        <p class="about-sidebar__title">
            О компании
        </p>
        <ul class="about-sidebar__list">
            <li>
                <a class="about-sidebar__list-item" href="#">
                    О бренде Rotabroach
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Качество Rotabroach
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Технологии Custmart
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Гарантия
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item about-active" href="#">
                    Новости
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Статьи
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Представительство в России
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Отзывы клиентов
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Условия сотрудничества
                </a>
            </li>
            <li>
                <a class="about-sidebar__list-item" href="#">
                    Акции
                </a>
            </li>
        </ul>
    </nav>

    <div class="wrap-interview">
        <div class="interview-block">
            <p class="sidebar__subtitle">
                <strong>Какие сверла</strong> вы используете
            </p>

            <p class="question-img">?</p>

            <form class="interview-form clearfix">
                <div class="interview-form__item">
                    <label for="hss">HSS</label>
                    <input type="radio" name="drill" value="hss" id="hss">
                </div>

                <p class="interview-or">или</p>

                <div class="interview-form__item">
                    <label for="tct">TST</label>
                    <input type="radio" name="drill" value="hss" id="tct">
                </div>

                <button class="base-button base-button--grey interview-form__submit">
                    Отправить
                </button>
            </form>
        </div>
    </div>

    <div class="contact-manager">
        <p class="sidebar__subtitle">
            Есть <strong>вопросы?</strong>
        </p>
        <img class="contact-manager__image" src="image/base/man.png" alt="менеджер">
        <p class="contact-manager__text">
            Свяжитесь с нашим менеджером по продажам
        </p>
        <a class="base-button base-button--red contact-manager__button" href="#questions-form"
           data-toggle="modal">Задать вопрос</a>
    </div>

</div>