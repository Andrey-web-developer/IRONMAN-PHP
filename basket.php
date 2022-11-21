<!DOCTYPE html>
<html lang="ru">
<?php include 'head.tmpl.php' ?>
<main>
  <section class="basket">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">Корзина</li>
        </ol>
      </nav>
      <div class="row">
        <h1 class="col basket__title">Корзина</h1>
      </div>
      <div class="row justify-content-between basket__container">
        <div class="col-md-5 xxl-4 d-flex">
          <h2 class="basket__subtitle">Минимальная сумма заказа 2000&nbsp;₽</h2>
        </div>
        <div class="col-md-7 col-xxl-5">
          <p class="basket__promo-code">Если у&nbsp;Вас есть купон на&nbsp;скидку, введите кодовое слово в&nbsp;поле
            ниже</p>
          <form action="#" class="basket__form form">
            <input type="text" aria-label="Введите промокод" placeholder="Промокод" class="form__input basket__input input-reset">
            <button class="basket__promo-button button btn-reset">Применить</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col basket__wrapper">
          <div class="d-none d-md-flex basket__title-list">
            <h3 class="basket__title-item-subtitle">Наименование</h3>
            <div class="col-7 basket__inner basket__inner--title">
              <div class="col-6 col-md-5 col-lg-3 basket__title-item">
                <h3 class="basket__title-item-subtitle">Цена</h3>
                <span class="d-none d-lg-block">Без скидки</span>
              </div>
              <div class="col-3 d-none d-lg-block basket__title-item">
                <h3 class="basket__title-item-subtitle">Цена</h3>
                <span>С учетом скидки</span>
              </div>
              <div class="col-5 col-lg-3 basket__title-item">
                <h3 class="basket__title-item-subtitle">Кол-во</h3>
                <span>Шт.</span>
              </div>
              <div class="col-2 d-none d-lg-block basket__title-item">
                <h3 class="basket__title-item-subtitle">Вес</h3>
                <span>Кг</span>
              </div>
              <div class="d-none d-md-block col-auto basket__title-item">
                <h3 class="basket__title-item-subtitle">Сумма</h3>
                <span>Руб.</span>
              </div>
            </div>
          </div>
          <ul class="basket__list list-reset">
            <li class="basket__item">
              <ul class="basket__content-list list-reset">
                <li class="basket__content-item">
                  <a href="product-page.php" class="col-md-5 col-lg-4 basket__content-link">
                    <div class="basket__content-img">
                      <img src="images/basket/product.png" alt="Фото товара">
                    </div>
                    <span>IRONMAN F-80 (Формула 80) (500 гр) шоколад</span>
                  </a>
                  <div class="col-md-7 basket__inner">
                    <div class="col-8 col-sm-9 col-md-5 col-lg-6 basket__content__inner">
                      <div class="col-auto col-sm-8 col-md-auto col-lg-6 basket__content__container">
                        <span class="d-lg-none basket__content__subtitle">Без скидки</span>
                        <span class="basket__content-numbers">680</span>
                      </div>
                      <div class="col-auto col-sm-8 col-md-auto basket__content__container">
                        <span class="d-lg-none basket__content__subtitle">С учетом скидки</span>
                        <span class="basket__content-numbers basket__content-numbers--bold">600</span>
                      </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-5 col-lg-3 basket__stepper">
                      <div class="stepper__wrapper">
                        <label class="stepper__label">
                          <input type="text" value="1" maxlength="3" class="stepper__input input-reset">
                          <span class="stepper__text">шт.</span>
                        </label>
                        <div class="stepper__buttons">
                          <button class="stepper__button stepper__button--up btn-reset" aria-label="Увеличить количество">
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                              <rect y="4" width="10" height="2" rx="1" />
                              <rect x="4" y="10" width="10" height="2" rx="1" transform="rotate(-90 4 10)" />
                            </svg>
                          </button>
                          <button class="stepper__button stepper__button--down stepper__button--disabled btn-reset" aria-label="Уменьшить количество">
                            <svg width="10" height="2" viewBox="0 0 10 2" xmlns="http://www.w3.org/2000/svg">
                              <rect width="10" height="2" rx="1" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <span class="col-2 d-none d-lg-block basket__content-numbers">0,5</span>
                    <div class="col-12 col-md-auto basket__total">
                      <h3 class="d-md-none basket__title-item-subtitle">Сумма</h3>
                      <span class="col-auto basket__content-numbers">600</span>
                    </div>
                  </div>
                </li>
                <li class="basket__content-item">
                  <a href="product-page.php" class="col-md-5 col-lg-4 basket__content-link">
                    <div class="basket__content-img">
                      <img src="images/basket/product.png" alt="Фото товара">
                    </div>
                    <span>IRONMAN F-80 (Формула 80) (500 гр) шоколад</span>
                  </a>
                  <div class="col-md-7 basket__inner">
                    <div class="col-8 col-sm-9 col-md-5 col-lg-6 basket__content__inner">
                      <div class="col-auto col-sm-8 col-md-auto col-lg-6 basket__content__container">
                        <span class="d-lg-none basket__content__subtitle">Без скидки</span>
                        <span class="basket__content-numbers">680</span>
                      </div>
                      <div class="col-auto col-sm-8 col-md-auto basket__content__container">
                        <span class="d-lg-none basket__content__subtitle">С учетом скидки</span>
                        <span class="basket__content-numbers basket__content-numbers--bold">600</span>
                      </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-5 col-lg-3 basket__stepper">
                      <div class="stepper__wrapper">
                        <label class="stepper__label">
                          <input type="text" value="1" maxlength="3" class="stepper__input input-reset">
                          <span class="stepper__text">шт.</span>
                        </label>
                        <div class="stepper__buttons">
                          <button class="stepper__button stepper__button--up btn-reset" aria-label="Увеличить количество">
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                              <rect y="4" width="10" height="2" rx="1" />
                              <rect x="4" y="10" width="10" height="2" rx="1" transform="rotate(-90 4 10)" />
                            </svg>
                          </button>
                          <button class="stepper__button stepper__button--down stepper__button--disabled btn-reset" aria-label="Уменьшить количество">
                            <svg width="10" height="2" viewBox="0 0 10 2" xmlns="http://www.w3.org/2000/svg">
                              <rect width="10" height="2" rx="1" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <span class="col-2 d-none d-lg-block basket__content-numbers">0,5</span>
                    <div class="col-12 col-md-auto basket__total">
                      <h3 class="d-md-none basket__title-item-subtitle">Сумма</h3>
                      <span class="col-auto basket__content-numbers">600</span>
                    </div>
                  </div>
                </li>
                <li class="basket__content-item">
                  <a href="product-page.php" class="col-md-5 col-lg-4 basket__content-link">
                    <div class="basket__content-img">
                      <img src="images/basket/product.png" alt="Фото товара">
                    </div>
                    <span>IRONMAN F-80 (Формула 80) (500 гр) шоколад</span>
                  </a>
                  <div class="col-md-7 basket__inner">
                    <div class="col-8 col-sm-9 col-md-5 col-lg-6 basket__content__inner">
                      <div class="col-auto col-sm-8 col-md-auto col-lg-6 basket__content__container">
                        <span class="d-lg-none basket__content__subtitle">Без скидки</span>
                        <span class="basket__content-numbers">680</span>
                      </div>
                      <div class="col-auto col-sm-8 col-md-auto basket__content__container">
                        <span class="d-lg-none basket__content__subtitle">С учетом скидки</span>
                        <span class="basket__content-numbers basket__content-numbers--bold">600</span>
                      </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-5 col-lg-3 basket__stepper">
                      <div class="stepper__wrapper">
                        <label class="stepper__label">
                          <input type="text" value="1" maxlength="3" class="stepper__input input-reset">
                          <span class="stepper__text">шт.</span>
                        </label>
                        <div class="stepper__buttons">
                          <button class="stepper__button stepper__button--up btn-reset" aria-label="Увеличить количество">
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                              <rect y="4" width="10" height="2" rx="1" />
                              <rect x="4" y="10" width="10" height="2" rx="1" transform="rotate(-90 4 10)" />
                            </svg>
                          </button>
                          <button class="stepper__button stepper__button--down stepper__button--disabled btn-reset" aria-label="Уменьшить количество">
                            <svg width="10" height="2" viewBox="0 0 10 2" xmlns="http://www.w3.org/2000/svg">
                              <rect width="10" height="2" rx="1" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <span class="col-2 d-none d-lg-block basket__content-numbers">0,5</span>
                    <div class="col-12 col-md-auto basket__total">
                      <h3 class="d-md-none basket__title-item-subtitle">Сумма</h3>
                      <span class="col-auto basket__content-numbers">600</span>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <div class="basket__title-list basket__title-list--bottom">
            <ul class="col-9 col-md-7 basket__inner list-reset">
              <li class="col-3 basket__title-item">
                <h3 class="basket__title-item-subtitle">Кол-во</h3>
                <span>Шт.</span>
              </li>
              <li class="col-2 basket__title-item">
                <h3 class="basket__title-item-subtitle">Вес</h3>
                <span>Кг</span>
              </li>
              <li class="col-3 col-sm-auto basket__title-item">
                <h3 class="basket__title-item-subtitle">Сумма</h3>
                <span>Руб.</span>
              </li>
            </ul>
          </div>
          <div class="basket__list basket__title-list--total">
            <h3 class="basket__title-item-subtitle">Итого</h3>
            <div class="col-9 col-md-7 basket__inner">
              <span class="col-3 col-sm-4 col-lg-3 basket__total-number">3</span>
              <span class="col-2 col-sm-3 col-md-3 col-lg-2 basket__total-number">1,5</span>
              <span class="col-3 col-sm-2 col-md-2 col-lg-1 basket__total-number">1800</span>
            </div>
          </div>
          <div class="basket__buttons">
            <button class="basket__button-reset button btn-reset">Очистить</button>
            <button class="basket__button-submit button btn-reset">Оформить заказ</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.tmpl.php' ?>
<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>