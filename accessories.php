<!DOCTYPE html>
<html lang="ru">
<?php include 'head.tmpl.php' ?>
<main>
  <section class="accessories">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">Аксессуары</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col">
          <h1 class="accessories__title">аксессуары</h1>
        </div>
        <ul class="row accessories-list list-reset">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <li class="accessories-list__item">
              <a href="#" class="accessories__link">
                <p class="accessories-list__text"><span>ХИТ!</span> Наши изделия из&nbsp;кожи знамениты великолепным
                  качеством</p>
                <img src="images/accessories/belts.png" alt="Ремни">
                <h2 class="accessories-list__title">ремни</h2>
              </a>
            </li>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <li class="accessories-list__item">
              <a href="#" class="accessories__link">
                <img src="images/accessories/wristbands-and-other.png" alt="Напульсники, лямки, бинты и другое">
                <h2 class="accessories-list__title accessories-list__title--offset">напульсники, лямки, бинты
                  и&nbsp;другое</h2>
              </a>
            </li>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <li class="accessories-list__item">
              <a href="#" class="accessories__link">
                <img src="images/accessories/shakers-and-pillboxes.png" alt="Шейкеры и таблетницы">
                <h2 class="accessories-list__title">шейкеры и таблетницы</h2>
              </a>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.tmpl.php' ?>
<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>