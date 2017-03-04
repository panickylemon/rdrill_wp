</div>

<!--—BEGIN MODALS -->
<div class="l-modal modal fade" id="feedback-form" tabindex="-1" role="dialog">
	<div class="b-modal modal-dialog" role="document">
		<a href="#" class="modal-close" data-dismiss="modal"></a>
		<?php echo do_shortcode( '[contact-form-7 id="316" html_id="feedback" title="Обратная связь"]' ); ?>
	</div>
</div>

<div class="l-modal modal fade" id="request-form" tabindex="-1" role="dialog">
	<div class="b-modal modal-dialog" role="document">
		<a href="#" class="modal-close" data-dismiss="modal"></a>
		<?php echo do_shortcode( '[contact-form-7 id="323" html_id="request" title="Заявка (товар)"]' ); ?>
	</div>
</div>

<div class="l-modal modal fade" id="questions-form" tabindex="-1" role="dialog">
	<div class="b-modal modal-dialog" role="document">
		<a href="#" class="modal-close" data-dismiss="modal"></a>

		<form class="modal-form" id="questions" data-parsley-validate="">
			<p class="modal-form__title">
				Задать вопрос
			</p>

			<label for="name">ФИО</label>
			<input placeholder="ФИО*" type="text" name="name" id="name-questions" required="">

			<label for="phone">Телефон для связи</label>
			<input placeholder="Телефон для связи*" type="text" name="phone" id="phone-questions" required="">

			<label for="email">Email</label>
			<input placeholder="Email" type="email" name="email" id="email-questions">
			<label for="comment">Комментарий</label>
			<textarea placeholder="Ваш вопрос" name="comment" id="comment-questions"></textarea>


			<div class="wrap-button">
				<button class="base-button base-button--red button-submit">Отправить</button>
			</div>
		</form>
	</div>
</div>
<!--—END MODALS -->

<!--—BEGIN FOOTER -->

<footer>
	<div class="wrap-footer">
		<div class="footer">
			<div class="l-container">
				<div class="footer-item__wrap">
					<div class="footer-item">
						<ul class="footer-menu-list">
							<li class="footer-menu-list__item">
								<a class="footer-menu-link" href="#">О компании</a>

								<ul class="footer-submenu-list">
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">О бренде Rotabroach</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Качество Rotabroach</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Технологии Custmart</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Гарантия</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Новости</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Представительство РФ</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Отзывы клиентов</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Условия сотрудничества</a>
									</li>
								</ul>
							</li>
						</ul>

					</div>
					<div class="footer-item">
						<ul class="footer-menu-list">
							<li class="footer-menu-list__item">
								<a class="footer-menu-link" href="#">Продукция и услуги</a>

								<ul class="footer-submenu-list">
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Акции</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Станки</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Сверла</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Аксессуары</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Сверление рельс</a>
									</li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
				<div class="footer-item__wrap">
					<div class="footer-item">
						<ul class="footer-menu-list">
							<li class="footer-menu-list__item">
								<a class="footer-menu-link" href="#">Клиенту</a>

								<ul class="footer-submenu-list">
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Помощь</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Дилеры</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Статьи</a>
									</li>
									<li class="footer-submenu-list__item">
										<a class="footer-submenu-link" href="#">Контакты</a>
									</li>
								</ul>
							</li>
						</ul>

					</div>
					<div class="footer-item footer-contact-wrap">
						<div class="footer-contact">
							<p class="footer-contact__title">
								Наши контакты
							</p>

							<div class="footer__phone">
								<div class="footer__phone-item">
									<p class="footer__phone-number">8 (800) <span
											class="footer__phone-item--red">775-87-95</span>
									</p>

									<p class="footer__phone-description">Бесплатный звонок по России</p>
								</div>
								<div class="footer__phone-item">
									<p class="footer__phone-number">8 (812) <span
											class="footer__phone-item--red">640-44-04</span>
									</p>

									<p class="footer__phone-description">Телефон по Санкт-Петербургу</p>
								</div>
							</div>
							<p class="footer-contact__title footer-contact__title-address">
								Адрес
							</p>

							<p class="footer-contact__address">
								Санкт-Петербург, ул. Седова, д. 11А БЦ “Эврика”, офис №1003
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-panel">
			<div class="l-container">
				<p class="footer__copyright">© 2016 Реквизиты компании</p>

				<div class="footer__social-network">
					<a class="social-network__item footer__youtube" href="#"></a>
					<a class="social-network__item footer__facebook" href="#"></a>
					<a class="social-network__item footer__vk" href="#"></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--—END FOOTER -->

<?php wp_footer(); ?>

</body>
</html>