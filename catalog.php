<!DOCTYPE html>
<html lang="ru">

  <?php include 'head.tmpl.php'?>

  <main>
    <section class="catalog">
      <div class="container">
        <div class="row">
          <h1 class="visually-hidden">Каталог товаров</h1>
          <aside class="col-3 catalog__filter filter-products">
            <form action="#" class="filter-products__form">
              <fieldset class="filter-products__list">
                <label class="filter-products__label filter-products__label--bg">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">только в наличии</span>
                </label>
              </fieldset>
              <fieldset class="filter-products__list">
                <legend class="filter-products__title">бренды</legend>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">ironman</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">xxl power</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">ladyfitness</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">junior (юниор)</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">shaper</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">md</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">athletic nutrition</span>
                </label>
              </fieldset>
              <fieldset class="filter-products__list filter-products__list--show-more">
                <legend class="filter-products__title">спортивное питание</legend>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">l карнитин</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">аминокислоты</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">анаболические формулы</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">батончики</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">батончики боксы</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">витамины</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">гейнеры</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">для суставов</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">жидкие формы</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">заменители питания</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">креатин</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">лечебное питание</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">напитки</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">напитки упаковка</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">протеины</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">сжигатели</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">энергетики</span>
                </label>
                <button class="filter-products__show-more button btn-reset">посмотреть ещё 10</button>
              </fieldset>
              <fieldset class="filter-products__list">
                <legend class="filter-products__title">метки</legend>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">новинки</span>
                </label>
                <label class="filter-products__label">
                  <input class="filter-products__checkbox" type="checkbox">
                  <span class="filter-products__text">акции/скидки</span>
                </label>
                <button class="filter-products__apply button btn-reset">применить</button>
              </fieldset>
            </form>
          </aside>
          <div class="col-lg-9">
            <div class="col catalog__wrapper">
              <div class="catalog__count">
                <span>28</span>
                товаров
              </div>
              <button class="d-lg-none d-flex catalog__button-filter btn-reset">
                Фильтры
                <div class="catalog__filter-icon">
                  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="682.667" height="682.667"
                    viewBox="0 0 512 512">
                    <path
                      d="M316.5 1.5c-14.1 3.1-25.7 9.6-36.6 20.6-7 7-9.5 10.4-13.3 17.9-2.6 5.1-5.1 11.3-5.7 13.6l-1.1 4.4H13.4L9 60.2C2.9 63.3-.2 68.8.3 75.3.8 80.7 3 84.4 8 87.7l3.3 2.3h248.2l2.2 7.3c6.3 20.6 24.1 39 45.1 46.7 20.3 7.4 40.9 6 60.5-4.2 17.2-9 32.6-28.4 37.2-47.1l.7-2.7h95.5l3.3-2.3c5-3.3 7.2-7 7.7-12.4.5-6.5-2.6-12-8.7-15.1-4.4-2.2-4.7-2.2-51.2-2.2h-46.7l-1.1-4.3c-2-7.5-8.7-20-14.5-27C375.4 9.7 353.8-.2 331.3.1c-4.8.1-11.5.7-14.8 1.4zm28.6 32.4c15.4 4.8 26.3 17.5 29.1 34 4.7 27.3-20.2 52.6-47.5 48.3-25.2-3.9-41.7-28.7-35.2-52.7 2.1-7.7 7.7-16.8 13.1-21.3 4.4-3.7 12.9-8.1 17.7-9.2 6.1-1.5 16.4-1 22.8.9zM161.5 184c-25.6 6.7-45.2 25.2-53.1 50.2l-1.7 5.7-48.3.3c-47 .3-48.3.4-51 2.4C2.1 246.5.5 249.7.5 256c0 6.3 1.6 9.5 6.9 13.4 2.7 2 4 2.1 51.1 2.4l48.4.3 1.6 5.6c4.8 16.4 17.8 33 32.9 42.2 3.1 1.8 9.5 4.7 14.3 6.4 7.5 2.6 10.7 3.1 21.1 3.5 15.2.6 22.8-1 36.2-7.6 16.8-8.2 31.7-25.4 37.2-42.9l2.3-7.3 124.7-.2c124.1-.3 124.7-.3 127.4-2.4 5.3-3.9 6.9-7.1 6.9-13.4 0-6.3-1.6-9.5-6.9-13.4-2.7-2.1-3.3-2.1-127.4-2.4l-124.7-.2-2.3-7.4c-5.5-17.5-20.6-34.9-37.6-43.1-5-2.4-12-5.1-15.6-5.9-9.1-2.2-26.6-2-35.5.4zm31.8 31.9c24.6 8.5 35.7 36.6 23.8 59.9-4.6 9.1-13.2 16.3-23.8 20.2-5.2 1.9-7.7 2.2-15.5 1.8-7.8-.3-10.4-.9-16.1-3.5-21.3-10-30.5-35.8-20.3-56.8 4.9-9.8 12.2-16.5 23.3-21.1 7.6-3.1 20.3-3.3 28.6-.5zM319.5 364.4c-27.2 5.3-50.1 25.2-57.8 50.3l-2.2 7.3H11.3L8 424.2c-5 3.4-7.2 7.1-7.7 12.5-.5 6.5 2.6 12 8.7 15.1l4.4 2.2h246.4l1.1 4.4c.6 2.3 3.2 8.5 5.8 13.7 7.7 15.5 21.8 28.1 39.2 35.2 27.8 11.3 63.9 1.9 83.5-21.9 6.4-7.7 11.7-17.5 14.1-25.6l1.6-5.8h46.8c46.4 0 46.7 0 51.1-2.2 6.1-3.1 9.2-8.6 8.7-15.1-.5-5.4-2.7-9.1-7.7-12.4l-3.3-2.3H405.4l-1.8-5.8c-3.7-11.9-9.5-21.1-19.1-30.7-10.1-10.2-19.6-15.9-32.5-19.4-9.7-2.7-23.5-3.4-32.5-1.7zm22.5 32.2c21.3 4.8 35.8 26.3 32.2 47.5-2.1 12.2-8.5 22.3-18.3 28.8-19.5 13-46.3 7.5-58.9-12.1-13.6-21-5.8-49.9 16.4-60.8 10.1-5 17.7-5.9 28.6-3.4z" />
                  </svg>
                </div>
              </button>
              <form class="catalog__form-drop" action="#">
                <select class="form-select form-select-lg catalog__form-select" aria-label="Фильтрация товаров">
                  <option value="">По популярности</option>
                  <option value="">По возрастанию цены</option>
                  <option value="">По убыванию цены</option>
                  <option value="">По рейтингу</option>
                  <option value="">По отзывам</option>
                  <option value="">По размеру скидки</option>
                </select>
              </form>
            </div>
            <div class="col">
              <article class="cards">
                <div class="row">
                  <div class="col">
                    <ul class="cards__list list-reset">
                      <div class="row">
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-1.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-2.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale cards__sale--color">new</span>
                              <img src="images/index/products-3.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-4.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-1.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale cards__sale--color">new</span>
                              <img src="images/index/products-2.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-3.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-4.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale cards__sale--color">new</span>
                              <img src="images/index/products-2.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-3.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                        <div class="col-sm-6 col-lg-4 cards__wrapper">
                          <li class="cards__item">
                            <a href="product-page.php" class="cards__img-link">
                              <span class="cards__sale">sale</span>
                              <img src="images/index/products-4.png" alt="Фото товара" class="cards__img">
                            </a>
                            <div class="cards__content">
                              <a href="product-page.php" class="cards__title-link">
                                <h3 class="cards__title">IM F80 500g шокладный напиток протеин</h3>
                              </a>
                              <div class="d-flex align-items-center justify-content-between cards__inner">
                                <div class="d-flex align-items-center cards__price">
                                  <span class="cards__price-now">559 ₽</span>
                                  <span class="cards__price-old">900 ₽</span>
                                </div>
                                <button class="cards__basket btn-reset">
                                  <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9916 6.98096H3.86903L2 25.0001H24.8561L22.9916 6.98096Z"
                                      stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                      d="M17.4835 11.1558V5.05329C17.4835 2.81498 15.6686 1 13.4302 1C11.1919 1 9.37695 2.81498 9.37695 5.05329V11.1558"
                                      stroke-width="2" stroke-miterlimit="10" />
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </li>
                        </div>
                      </div>
                    </ul>
                  </div>
                </div>
              </article>
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