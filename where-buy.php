<!DOCTYPE html>
<html lang="ru">
<?php include 'head.tmpl.php' ?>
<main>
  <section class="where-buy">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">Где купить</li>
        </ol>
      </nav>
      <div class="row">
        <h1 class="col where-buy__title">где купить</h1>
      </div>
      <div class="row">
        <h2 class="col where-buy__subtitle">Нашу продукцию вы можете встретить</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="where-buy__content-title">В сетях супермаркетов</h3>
          <ul class="where-buy__list list-reset">
            <div class="row">
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/auchan.png" alt="Ашан" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/magnit.png" alt="Магнит" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/perekrestok.png" alt="Перекрёсток" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/spar.png" alt="Spar" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/decathlon.png" alt="Decathlon" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/lenta.png" alt="Лента" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/fixprice.png" alt="Fixprice" class="where-buy__img">
                  </div>
                </a>
              </li>
              <li class="col-6 where-buy__item">
                <a href="#" class="where-buy__link">
                  <div class="where-buy__inner">
                    <img src="images/where-buy/globus.png" alt="Globus" class="where-buy__img">
                  </div>
                </a>
              </li>
            </div>
          </ul>
        </div>
        <div class="col-lg-6">
          <h3 class="where-buy__content-title">И в розничных магазинах вашего города</h3>
          <div class="where-buy__map-wrapper">
            <div id="map" class="where-buy__map"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.tmpl.php' ?>
<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
<script src="js/script.js"></script>
</body>

</html>