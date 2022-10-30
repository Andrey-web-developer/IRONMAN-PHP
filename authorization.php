<!DOCTYPE html>
<html lang="ru">

  <?php include 'head.tmpl.php'?>

  <main>
    <section class="authorization">
      <div class="container">
        <div class="row">
          <h1 class="col authorization__title">Регистрация/вход</h1>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6">
            <form action="#" class="authorization__form form">
              <fieldset class="form__list">
                <legend class="form__title">Вход в личный кабинет</legend>
                <div class="form__wrapper">
                  <ul class="nav nav-tabs tab__wrapper" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active btn-reset" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">E-mail</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link btn-reset" id="phone-tab" data-bs-toggle="tab" data-bs-target="#phone"
                        type="button" role="tab" aria-controls="phone" aria-selected="false">Телефон</button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                      tabindex="0">
                      <div class="form__inner">
                        <input type="email" aria-label="Введите E-mail" placeholder="E-mail"
                          class="form__input input-reset">
                      </div>
                    </div>
                    <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone-tab" tabindex="0">
                      <div class="form__inner">
                        <input type="tel" aria-label="Введите номер телефона" placeholder="Телефон"
                          class="form__input input-reset">
                      </div>
                    </div>
                  </div>
                  <input type="password" aria-label="Введите пароль" placeholder="Пароль"
                    class="form__input input-reset">
                  <div class="form__captcha">
                    <img src="images/captcha-example.png" alt="Текст с картинки">
                    <input type="text" aria-label="Введите код с картинки" placeholder="Введите код с картинки"
                      class="form__input input-reset">
                  </div>
                  <div class="form__group">
                    <button class="form__button button btn-reset">Войти</button>
                    <a href="#" class="form__recover-password">Забыли пароль?</a>
                  </div>
                </div>
              </fieldset>
            </form>
            <p class="form__title">Вход через социальные сети</p>
            <ul class="d-flex authorization__social-list list-reset">
              <li class="authorization__social-item">
                <a href="#" class="authorization__social-link">
                  <img src="images/authorization/vk.png" alt="Vk">
                </a>
              </li>
              <li class="authorization__social-item">
                <a href="#" class="authorization__social-link">
                  <img src="images/authorization/odnoklassniki.png" alt="Одноклассники">
                </a>
              </li>
              <li class="authorization__social-item">
                <a href="#" class="authorization__social-link">
                  <img src="images/authorization/google.png" alt="Google">
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <form action="#" class="authorization__form form">
              <fieldset class="form__list">
                <legend class="form__title">Регистрация розничного покупателя</legend>
                <div class="form__wrapper">
                  <input type="text" aria-label="Введите фамилию" placeholder="Фамилия" class="form__input input-reset">
                  <input type="text" aria-label="Введите имя" placeholder="Имя" class="form__input input-reset">
                  <input type="tel" aria-label="Введите номер телефона" placeholder="Телефон"
                    class="form__input input-reset">
                  <input type="email" aria-label="Введите E-mail" placeholder="E-mail" class="form__input input-reset">
                  <input type="password" aria-label="Введите пароль" placeholder="Пароль"
                    class="form__input input-reset">
                  <input type="password" aria-label="Повторите пароль" placeholder="Повторите пароль"
                    class="form__input input-reset">
                  <button class="form__button button btn-reset">Зарегистрироваться</button>
                </div>
              </fieldset>
            </form>
            <p class="authorization__privacy-policy">
              Нажимая кнопку &quot;Зарегистрироваться, я&nbsp;соглашаюсь на&nbsp;получение информации
              от&nbsp;интернет-магазина и&nbsp;уведомлений о&nbsp;состоянии моих заказов, а&nbsp;также принимаю условия
              <a href="#">политики конфиденциальности</a> и <a href="#">пользовательского соглашения.</a>
            </p>
          </div>
        </div>
      </div>
      <div class="authorization__wholesalers">
        <a href="wholesalers.php" class="authorization__wholesalers-link button">регистрация оптового покупателя</a>
      </div>
    </section>
  </main>

  <?php include 'footer.tmpl.php'?>

  <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>