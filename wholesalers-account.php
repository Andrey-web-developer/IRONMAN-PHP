<!DOCTYPE html>
<html lang="ru">
<?php include 'head.tmpl.php' ?>
<main>
  <section class="wholesalers-account">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">Личный кабинет оптовика</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col">
          <h1 class="wholesalers-account__title">Личный кабинет оптовика</h1>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-6">
          <ul class="wholesalers-account__list list-reset">
            <li class="wholesalers-account__item mb-4 mb-lg-0">
              <div class="wholesalers-account__container">
                <h2 class="wholesalers-account__subtitle">Ваши данные</h2>
                <button class="wholesalers-account__change btn-reset" data-bs-toggle="modal" data-bs-target="#user-data" aria-label="Нажмите, чтобы изменить данные">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM16.3788 10.6778L13.3203 7.61848C13.1914 7.48959 12.9812 7.48959 12.8523 7.61848L6.35352 14.1191L6.00426 17.2665C5.95679 17.6871 6.31283 18.0432 6.73329 17.9957L9.88001 17.6464L16.3788 11.1458C16.5077 11.0169 16.5077 10.8066 16.3788 10.6778ZM17.1587 5.18665L18.8134 6.84178C19.3289 7.35732 19.3289 8.19506 18.8134 8.71399L17.6131 9.91464C17.4842 10.0435 17.274 10.0435 17.1451 9.91464L14.0866 6.85535C13.9577 6.72647 13.9577 6.51618 14.0866 6.3873L15.287 5.18665C15.8058 4.67112 16.6433 4.67112 17.1587 5.18665Z" />
                  </svg>
                </button>
                <div class="modal fade" id="user-data" tabindex="-1" aria-labelledby="Введите ваши данные" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Ваши данные</h2>
                        <button class="btn-reset" data-bs-dismiss="modal" aria-label="Close">
                          <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.32769 6.98007L13.5245 2.77892C13.797 2.46923 13.9413 2.0674 13.9282 1.65511C13.915 1.24282 13.7453 0.851018 13.4536 0.559337C13.162 0.267656 12.7702 0.0979906 12.3579 0.0848273C11.9456 0.071664 11.5438 0.215991 11.2341 0.488472L7.03291 4.68529L2.82419 0.475488C2.67344 0.32474 2.49448 0.20516 2.29752 0.123575C2.10056 0.041991 1.88945 1.58839e-09 1.67626 0C1.46307 -1.58839e-09 1.25197 0.041991 1.05501 0.123575C0.858044 0.20516 0.679079 0.32474 0.528331 0.475488C0.377582 0.626237 0.258002 0.805201 0.176418 1.00216C0.0948333 1.19913 0.0528423 1.41023 0.0528423 1.62342C0.0528423 1.83661 0.0948333 2.04771 0.176418 2.24468C0.258002 2.44164 0.377582 2.6206 0.528331 2.77135L4.73813 6.98007L0.541314 11.1801C0.376722 11.3273 0.243879 11.5064 0.150913 11.7067C0.0579464 11.9069 0.0068112 12.124 0.000635221 12.3447C-0.00554076 12.5654 0.0333725 12.785 0.114995 12.9901C0.196617 13.1952 0.319231 13.3815 0.475336 13.5376C0.631441 13.6938 0.817755 13.8164 1.02288 13.898C1.228 13.9796 1.44762 14.0185 1.6683 14.0123C1.88898 14.0062 2.10608 13.955 2.30632 13.8621C2.50655 13.7691 2.68572 13.6363 2.83285 13.4717L7.03291 9.27485L11.2287 13.4717C11.5331 13.7761 11.946 13.9472 12.3766 13.9472C12.8071 13.9472 13.2201 13.7761 13.5245 13.4717C13.829 13.1672 14 12.7543 14 12.3237C14 11.8932 13.829 11.4803 13.5245 11.1758L9.32769 6.98007Z" fill="white" fill-opacity="0.5" />
                          </svg>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="#" class="modal-form">
                          <div class="form__wrapper">
                            <input type="text" aria-label="Введите фамилию" placeholder="Фамилия" class="form__input input-reset">
                            <input type="text" aria-label="Введите имя" placeholder="Имя" class="form__input input-reset">
                            <input type="text" aria-label="Введите отчество" placeholder="Отчество" class="form__input input-reset">
                            <input type="password" aria-label="Введите старый пароль" placeholder="Старый пароль" class="form__input input-reset">
                            <input type="password" aria-label="Введите новый пароль" placeholder="Новый пароль" class="form__input input-reset">
                            <input type="tel" aria-label="Введите номер телефона" placeholder="Телефон" class="form__input input-reset">
                            <div class="modal-footer">
                              <button class="form__button button btn-reset">Сохранить</button>
                              <button class="form__button form__button--close button btn-reset" data-bs-dismiss="modal">Отмена</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="wholesalers-account__wrapper list-reset">
                <li class="wholesalers-account__inner">
                  <h3 class="wholesalers-account__inner-title">
                    ФИО
                  </h3>
                  <span class="wholesalers-account__inner-text">
                    Иванов Иван Иванович
                  </span>
                </li>

                <li class="wholesalers-account__inner">
                  <h3 class="wholesalers-account__inner-title">
                    Пароль
                  </h3>
                  <span class="wholesalers-account__inner-text">
                    · · · · · · · · · · · · · ·
                  </span>
                </li>

                <li class="wholesalers-account__inner">
                  <h3 class="wholesalers-account__inner-title">
                    Телефон
                  </h3>
                  <span class="wholesalers-account__inner-text">
                    +7 (999) 654-65-23
                  </span>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="wholesalers-account__list list-reset">
            <li class="wholesalers-account__item">
              <div class="wholesalers-account__container">
                <h2 class="wholesalers-account__subtitle">Адрес доставки заказа</h2>
                <button class="wholesalers-account__change btn-reset" data-bs-toggle="modal" data-bs-target="#address" aria-label="Нажмите, чтобы изменить данные">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM16.3788 10.6778L13.3203 7.61848C13.1914 7.48959 12.9812 7.48959 12.8523 7.61848L6.35352 14.1191L6.00426 17.2665C5.95679 17.6871 6.31283 18.0432 6.73329 17.9957L9.88001 17.6464L16.3788 11.1458C16.5077 11.0169 16.5077 10.8066 16.3788 10.6778ZM17.1587 5.18665L18.8134 6.84178C19.3289 7.35732 19.3289 8.19506 18.8134 8.71399L17.6131 9.91464C17.4842 10.0435 17.274 10.0435 17.1451 9.91464L14.0866 6.85535C13.9577 6.72647 13.9577 6.51618 14.0866 6.3873L15.287 5.18665C15.8058 4.67112 16.6433 4.67112 17.1587 5.18665Z" />
                  </svg>
                </button>
                <div class="modal fade" id="address" tabindex="-1" aria-labelledby="Введите адрес доставки товара" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Адрес доставки заказа</h2>
                        <button class="btn-reset" data-bs-dismiss="modal" aria-label="Close">
                          <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.32769 6.98007L13.5245 2.77892C13.797 2.46923 13.9413 2.0674 13.9282 1.65511C13.915 1.24282 13.7453 0.851018 13.4536 0.559337C13.162 0.267656 12.7702 0.0979906 12.3579 0.0848273C11.9456 0.071664 11.5438 0.215991 11.2341 0.488472L7.03291 4.68529L2.82419 0.475488C2.67344 0.32474 2.49448 0.20516 2.29752 0.123575C2.10056 0.041991 1.88945 1.58839e-09 1.67626 0C1.46307 -1.58839e-09 1.25197 0.041991 1.05501 0.123575C0.858044 0.20516 0.679079 0.32474 0.528331 0.475488C0.377582 0.626237 0.258002 0.805201 0.176418 1.00216C0.0948333 1.19913 0.0528423 1.41023 0.0528423 1.62342C0.0528423 1.83661 0.0948333 2.04771 0.176418 2.24468C0.258002 2.44164 0.377582 2.6206 0.528331 2.77135L4.73813 6.98007L0.541314 11.1801C0.376722 11.3273 0.243879 11.5064 0.150913 11.7067C0.0579464 11.9069 0.0068112 12.124 0.000635221 12.3447C-0.00554076 12.5654 0.0333725 12.785 0.114995 12.9901C0.196617 13.1952 0.319231 13.3815 0.475336 13.5376C0.631441 13.6938 0.817755 13.8164 1.02288 13.898C1.228 13.9796 1.44762 14.0185 1.6683 14.0123C1.88898 14.0062 2.10608 13.955 2.30632 13.8621C2.50655 13.7691 2.68572 13.6363 2.83285 13.4717L7.03291 9.27485L11.2287 13.4717C11.5331 13.7761 11.946 13.9472 12.3766 13.9472C12.8071 13.9472 13.2201 13.7761 13.5245 13.4717C13.829 13.1672 14 12.7543 14 12.3237C14 11.8932 13.829 11.4803 13.5245 11.1758L9.32769 6.98007Z" fill="white" fill-opacity="0.5" />
                          </svg>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="#" class="modal-form">
                          <div class="form__wrapper">
                            <input type="text" aria-label="Введите название города" placeholder="Город" class="form__input input-reset">
                            <input type="text" aria-label="Введите название транспортной компании" placeholder="Транспортная компания" class="form__input input-reset">
                            <input type="text" aria-label="Введите предпочтительный терминал в городе" placeholder="Предпочтительный терминал в городе" class="form__input input-reset">
                            <textarea name="#" id="#" cols="30" rows="5" aria-label="Введите комментарии к отправке" placeholder="Комментарии к отправке" class="form__input input-reset"></textarea>
                            <div class="modal-footer">
                              <button class="form__button button btn-reset">Сохранить</button>
                              <button class="form__button form__button--close button btn-reset" data-bs-dismiss="modal">Отмена</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="wholesalers-account__wrapper list-reset">
                <li class="wholesalers-account__inner">
                  <h3 class="wholesalers-account__inner-title">
                    Город
                  </h3>
                  <span class="wholesalers-account__inner-text">
                    Москва
                  </span>
                </li>
                <div class="wholesalers-account__content">
                  <li class="wholesalers-account__inner">
                    <h3 class="wholesalers-account__inner-title">
                      Транспортная компания
                    </h3>
                    <span class="wholesalers-account__inner-text">
                      СДЭК
                    </span>
                  </li>
                  <li class="wholesalers-account__inner">
                    <h3 class="wholesalers-account__inner-title">
                      Предпочтительный терминал в городе
                    </h3>
                    <span class="wholesalers-account__inner-text">
                      Нижний Сусальный пер., 5 строение 1
                    </span>
                  </li>
                </div>
                <li class="wholesalers-account__inner">
                  <h3 class="wholesalers-account__inner-title">
                    Комментарии к отправке
                  </h3>
                  <span class="wholesalers-account__inner-text">
                    Пожалуйста, упакуйте получше
                  </span>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col">
          <div class="wholesalers-account__container">
            <h2 class="wholesalers-account__subtitle">Реквизиты</h2>
            <button class="wholesalers-account__change btn-reset" data-bs-toggle="modal" data-bs-target="#requisites" aria-label="Нажмите, чтобы изменить данные">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24ZM16.3788 10.6778L13.3203 7.61848C13.1914 7.48959 12.9812 7.48959 12.8523 7.61848L6.35352 14.1191L6.00426 17.2665C5.95679 17.6871 6.31283 18.0432 6.73329 17.9957L9.88001 17.6464L16.3788 11.1458C16.5077 11.0169 16.5077 10.8066 16.3788 10.6778ZM17.1587 5.18665L18.8134 6.84178C19.3289 7.35732 19.3289 8.19506 18.8134 8.71399L17.6131 9.91464C17.4842 10.0435 17.274 10.0435 17.1451 9.91464L14.0866 6.85535C13.9577 6.72647 13.9577 6.51618 14.0866 6.3873L15.287 5.18665C15.8058 4.67112 16.6433 4.67112 17.1587 5.18665Z" />
              </svg>
            </button>
            <div class="modal fade" id="requisites" tabindex="-1" aria-labelledby="Введите реквизиты" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Реквизиты</h2>
                    <button class="btn-reset" data-bs-dismiss="modal" aria-label="Close">
                      <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.32769 6.98007L13.5245 2.77892C13.797 2.46923 13.9413 2.0674 13.9282 1.65511C13.915 1.24282 13.7453 0.851018 13.4536 0.559337C13.162 0.267656 12.7702 0.0979906 12.3579 0.0848273C11.9456 0.071664 11.5438 0.215991 11.2341 0.488472L7.03291 4.68529L2.82419 0.475488C2.67344 0.32474 2.49448 0.20516 2.29752 0.123575C2.10056 0.041991 1.88945 1.58839e-09 1.67626 0C1.46307 -1.58839e-09 1.25197 0.041991 1.05501 0.123575C0.858044 0.20516 0.679079 0.32474 0.528331 0.475488C0.377582 0.626237 0.258002 0.805201 0.176418 1.00216C0.0948333 1.19913 0.0528423 1.41023 0.0528423 1.62342C0.0528423 1.83661 0.0948333 2.04771 0.176418 2.24468C0.258002 2.44164 0.377582 2.6206 0.528331 2.77135L4.73813 6.98007L0.541314 11.1801C0.376722 11.3273 0.243879 11.5064 0.150913 11.7067C0.0579464 11.9069 0.0068112 12.124 0.000635221 12.3447C-0.00554076 12.5654 0.0333725 12.785 0.114995 12.9901C0.196617 13.1952 0.319231 13.3815 0.475336 13.5376C0.631441 13.6938 0.817755 13.8164 1.02288 13.898C1.228 13.9796 1.44762 14.0185 1.6683 14.0123C1.88898 14.0062 2.10608 13.955 2.30632 13.8621C2.50655 13.7691 2.68572 13.6363 2.83285 13.4717L7.03291 9.27485L11.2287 13.4717C11.5331 13.7761 11.946 13.9472 12.3766 13.9472C12.8071 13.9472 13.2201 13.7761 13.5245 13.4717C13.829 13.1672 14 12.7543 14 12.3237C14 11.8932 13.829 11.4803 13.5245 11.1758L9.32769 6.98007Z" fill="white" fill-opacity="0.5" />
                      </svg>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="#" class="modal-form">
                      <div class="form__wrapper">
                        <input type="text" aria-label="Введите наименование организации (краткое)" placeholder="Наименование организации (краткое)" class="form__input input-reset">
                        <input type="text" aria-label="Введите ИНН/КПП" placeholder="ИНН/КПП" class="form__input input-reset">
                        <input type="tel" aria-label="Введите номер телефона" placeholder="Телефон" class="form__input input-reset">
                        <input type="text" aria-label="Введите юридический и фактический адрес" placeholder="Юридический и фактический адрес" class="form__input input-reset">
                        <input type="text" aria-label="Введите почтовый адрес" placeholder="Почтовый адрес" class="form__input input-reset">
                        <input type="text" aria-label="Введите расчетный счет" placeholder="Расчетный счет" class="form__input input-reset">
                        <input type="text" aria-label="Введите корреспондентский счет" placeholder="Корреспондентский счет" class="form__input input-reset">
                        <input type="text" aria-label="Введите БИК" placeholder="БИК" class="form__input input-reset">
                        <input type="text" aria-label="Введите название банка" placeholder="Банк" class="form__input input-reset">
                        <input type="text" aria-label="Введите ОКВЭД" placeholder="ОКВЭД" class="form__input input-reset">
                        <input type="text" aria-label="Введите ОКПО" placeholder="ОКПО" class="form__input input-reset">
                        <input type="text" aria-label="Введите ОГРН" placeholder="ОГРН" class="form__input input-reset">
                        <div class="modal-footer">
                          <button class="form__button button btn-reset">Сохранить</button>
                          <button class="form__button form__button--close button btn-reset" data-bs-dismiss="modal">Отмена</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul class="d-flex flex-wrap wholesalers-account__wrapper wholesalers-account__wrapper--border list-reset">
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                Наименование организации (краткое)
              </h3>
              <span class="wholesalers-account__inner-text">
                ООО «Название»
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                Почтовый адрес
              </h3>
              <span class="wholesalers-account__inner-text">
                Нижний Сусальный пер., 5 строение 1
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner">
              <h3 class="wholesalers-account__inner-title">
                Банк
              </h3>
              <span class="wholesalers-account__inner-text">
                Сбербанк
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                ИНН/КПП
              </h3>
              <span class="wholesalers-account__inner-text">
                2460048358/246001001
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                Расчетный счет
              </h3>
              <span class="wholesalers-account__inner-text">
                1037835039923
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner">
              <h3 class="wholesalers-account__inner-title">
                ОКВЭД
              </h3>
              <span class="wholesalers-account__inner-text">
                02.1
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                Телефон
              </h3>
              <span class="wholesalers-account__inner-text">
                +7 (999) 654-65-23
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                Корреспондентский счет
              </h3>
              <span class="wholesalers-account__inner-text">
                1037835039923
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner">
              <h3 class="wholesalers-account__inner-title">
                ОКПО
              </h3>
              <span class="wholesalers-account__inner-text">
                57313813
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                Юридический и фактический адрес
              </h3>
              <span class="wholesalers-account__inner-text">
                Нижний Сусальный пер., 5 строение 1
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner wholesalers-account__inner--border">
              <h3 class="wholesalers-account__inner-title">
                БИК
              </h3>
              <span class="wholesalers-account__inner-text">
                57313813
              </span>
            </li>
            <li class="col-12 col-sm-6 col-md-4 wholesalers-account__inner">
              <h3 class="wholesalers-account__inner-title">
                ОГРН
              </h3>
              <span class="wholesalers-account__inner-text">
                57313813
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col">
          <div class="wholesalers-account__container">
            <h2 class="wholesalers-account__subtitle">Ваша скидка</h2>
          </div>
          <div class="wholesalers-account__wrapper wholesalers-account__sale">
            <h3 class="wholesalers-account__sale-title">
              Ваша скидка:
              <span>11%</span>
              <div>
                Сумма заказов за все время:
                <span>11 560 ₽</span>
              </div>
            </h3>
            <ul class="wholesalers-account__sale-list sale list-reset">
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 20%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 19%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 18%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 17%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 16%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 15%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 14%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 13%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 12%</div>
                </div>
              </li>
              <li class="sale__item sale__item--active">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 11%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 10%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 9%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 8%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 7%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 6%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 5%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 4%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 3%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 2%</div>
                </div>
              </li>
              <li class="sale__item">
                <div class="sale__block"></div>
                <div class="sale__text">
                  Скидка
                  <div>в 1%</div>
                </div>
              </li>
            </ul>
            <p class="wholesalers-account__sale-text">
              При заказе от&nbsp;1000 до&nbsp;2000 рублей&nbsp;Вы получаете скидку в&nbsp;1%, от&nbsp;2000
              до&nbsp;3000 рублей&nbsp;2%, от&nbsp;3000 до&nbsp;4000 рублей&nbsp;3% и&nbsp;т.д.
              до&nbsp;20%, при сумме заказа от&nbsp;20&nbsp;000&nbsp;рублей.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="wholesalers-account__container">
            <h2 class="wholesalers-account__subtitle">История заказов</h2>
          </div>
          <div class="wholesalers-account__wrapper orders">
            <div class="orders__wrapper">
              <ul class="orders__titles list-reset">
                <li class="col-4 orders__titles-item">
                  <h3 class="orders__title">№ заказа</h3>
                </li>
                <li class="col-3 col-sm-4 orders__titles-item">
                  <h3 class="orders__title">Сумма</h3>
                </li>
                <li class="col-auto orders__titles-item">
                  <h3 class="orders__title">Статус заказа</h3>
                </li>
              </ul>
            </div>
            <ul class="orders__list list-reset">
              <li class="orders__item">
                <span class="col-4 orders__text orders__text--number">345676543</span>
                <span class="col-3 col-sm-4 orders__text">1450 ₽</span>
                <span class="col-4 orders__text">Комплектуется</span>
              </li>
              <li class="orders__item">
                <span class="col-4 orders__text orders__text--number">876676543</span>
                <span class="col-3 col-sm-4 orders__text">1450 ₽</span>
                <span class="col-4 orders__text">Передан в службу доставки</span>
              </li>
              <li class="orders__item">
                <span class="col-4 orders__text orders__text--number">621676543</span>
                <span class="col-3 col-sm-4 orders__text">1450 ₽</span>
                <span class="col-4 orders__text">Выполнен</span>
              </li>
            </ul>
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