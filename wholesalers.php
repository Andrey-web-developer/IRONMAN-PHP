<!DOCTYPE html>
<html lang="ru">

  <?php include 'head.tmpl.php'?>

  <main>
    <section class="wholesalers">
      <div class="container">
        <div class="row">
          <h1 class="col wholesalers__title">
            Регистрация/вход оптовикам
          </h1>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <form action="#" class="wholesalers__form form">
              <fieldset class="form__list">
                <legend class="form__title form__title--wholesalers">Вход в личный кабинет оптового покупателя</legend>
                <div class="form__wrapper">
                  <input type="text" aria-label="Введите логин" placeholder="Логин" class="form__input input-reset">
                  <input type="password" aria-label="Введите пароль" placeholder="Пароль"
                    class="form__input input-reset">
                  <button class="form__button button btn-reset">Войти</button>
                </div>
              </fieldset>
            </form>
            <div class="wholesalers__inner">
              <p class="wholesalers__text wholesalers__text--bold">Минимальная сумма заказа:</p>
              <p class="wholesalers__text">Оптовым клиентам: 20&nbsp;000&nbsp;₽</p>
              <p class="wholesalers__text">Фитнесс клубам: 10&nbsp;000&nbsp;₽</p>
            </div>
            <div class="wholesalers__inner">
              <p class="wholesalers__text wholesalers__text--bold">Бесплатная доставка по&nbsp;Москве и&nbsp;Московской
                области.</p>
            </div>
            <div class="wholesalers__inner">
              <p class="wholesalers__text">
                В&nbsp;регионы отправим заказ удобной Вам транспортной компанией (ТК). Бесплатно довезем заказ
                до&nbsp;ТК в&nbsp;Москве и&nbsp;Московской области. Услуги ТК&nbsp;оплачивает клиент.
              </p>
            </div>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <form action="#" class="wholesalers__form form">
              <fieldset class="form__list">
                <legend class="form__title form__title--wholesalers">Запрос на доступ в личный кабинет оптового
                  покупателя</legend>
                <div class="form__wrapper">
                  <input type="text" aria-label="Введите наименование организации"
                    placeholder="Наименование организации" class="form__input input-reset">
                  <input type="email" aria-label="Введите E-mail" placeholder="E-mail" class="form__input input-reset">
                  <input type="tel" aria-label="Введите номер телефона" placeholder="Телефон"
                    class="form__input input-reset">
                  <input type="text" aria-label="Введите ИНН" placeholder="ИНН" class="form__input input-reset">
                  <button class="form__button button btn-reset">Подать заявку</button>
                </div>
              </fieldset>
            </form>
            <div class="wholesalers__inner">
              <p class="wholesalers__text">В&nbsp;ответ мы&nbsp;Вас зарегистрируем и&nbsp;вышлем пароль для входа
                в&nbsp;личный кабинет.</p>
            </div>
            <div class="wholesalers__inner">
              <p class="wholesalers__text">В&nbsp;среднем это занимает один рабочий день.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'footer.tmpl.php'?>

  <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>