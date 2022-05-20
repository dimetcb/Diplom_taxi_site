<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/eb17427400.js" crossorigin="anonymous"></script>

  <title>Аренда автомобилей такси</title>
  <style>
    img {
      max-width: 100%;
      height: auto;
    }

    .content {
      background-image: url(/img/fon.jpg);
      background-size: 100%;
      background-repeat: no-repeat;
      max-width: 100%;
      height: auto;
    }

    .text-banner {
      padding-left: 2rem;
    }

    .navbar {
      font: bolder;
    }

    #map {
      max-width: 100%;
      max-height: 100%;
    }

    @media (max-width: 576px) {
      html {
        font-size: 0.4rem;
      }
    }

    @media (max-width: 768px) {
      html {
        font-size: 0.6rem;
      }

      .category {
        margin-top: 15px;
      }
    }

    @media (max-width: 393px) {
      html {
        font-size: 0.4rem;
      }
    }
  </style>
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header>
    <div class="container-fluide py-3">
      <div class="row justify-content-between align-items-sm-center">
        <div class="col-md-1 col-2 flex-grow-1 header-logo">
          <img name="logo" class="img-fluid" src="/img/100x100.png" alt="logo taxi" />
        </div>
        <div class="col">
          <strong class="font-weight-bolder text-left">Аренда автомобилей такси</strong><br />
          <strong class="font-weight-lighter">Выгодные и честные условия</strong>
        </div>
        <div class="col">
          <div class="contacts">
            <div class="contacts__text">
              <strong>График работы:</strong> <br />ежедневно с 11:00 до 20:00
            </div>
          </div>
        </div>
        <div class="col">
          <div class="contacts text-left">
            <a href="tel:+79251001388" class="phone">+7 (925) 100-13-88</a>
            <br /><a href="https://wa.me/+79251001388" class="contacts__whatsapp" target="_blank">
              <img class="img-fluid" width="18" src="/img/wa.png" alt="знак вотсапа" />
              <span>Свяжитесь с нами!</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-xl navbar-dark bg-warning">
      <img src="/img/favicon_package_v0.16(2)/android-chrome-192x192.png" width="30" height="30" class="d-inline-block align-top" alt="" />
      <a class="navbar-brand" href="/index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active mr-5 text-dark font-weight-normal" href="/index.php">Главная <span class="sr-only">(текущая)</span></a>
          <div class="dropdown mr-5">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Каталог автомобилей
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/econom.html">Эконом класс</a>
              <a class="dropdown-item" href="/comfort.html">Комфорт+ класс</a>
              <a class="dropdown-item" href="/bissnes.html">Бизнесс класс</a>
            </div>
          </div>
          <a class="nav-link mr-5 text-dark font-weight-normal" href="/about.html">О компании</a>
          <a class="nav-link mr-5 text-dark font-weight-normal" href="#contacts-info">Контакты</a>
          <a class="nav-link mr-5 text-dark font-weight-normal" href="/reg.html"><i class="fa-solid fa-user"></i> Личный кабинет</a>
        </div>
      </div>
    </nav>
  </header>
  <!--================ End Header Menu Area =================-->

  <!-- Content start-->
  <div class="container-fluid content">
    <div class="container text-center title-info">
      <span class="title-info__title">
        <h2>Аренда авто под такси в Москве.</h2>
      </span>
      <span class="title-info__text">
        <h4>Возьмите машину для работы в такси</h4>
      </span>
      <div class="title-info__list row align-items-center py-3 font-weight-bolder">
        <div class="col-md-3 title-info font-weight-bolder">
          <div class="col">
            <img class="img-fluid" src="/img/icons8-проверено-16.png" alt="marks" />
            Удобный вывод денег
          </div>
        </div>
        <div class="col-md-3 title-info font-weight-bolder">
          <div class="col">
            <img class="img-fluid" src="/img/icons8-проверено-16.png" alt="marks" />
            Новые авто
          </div>
        </div>
        <div class="col-md-3 title-info font-weight-bolder">
          <div class="col">
            <img class="img-fluid" src="/img/icons8-проверено-16.png" alt="marks" />
            Cтраховка за наш счет
          </div>
        </div>
        <div class="col-md-3 title-info font-weight-bolder">
          <div class="col">
            <img class="img-fluid" src="/img/icons8-проверено-16.png" alt="marks" />
            Всего по 2 документам
          </div>
        </div>
      </div>
    </div>
    <div class="row p-3">
      <div class="col-md-6 text-banner d-flex align-items-sm-center">
        <h3>
          Аренда автомобилей под такси<br />
          <footer class="blockquote-footer">
            Удобнее и выгоднее, чем копить на машину
          </footer>
        </h3>
      </div>
      <div class="col-md-6">
        <div class="col-xl-8 col-lg-6 order-lg-2">
          <img class="img-fluid" src="/img/banner.png" alt="" class="main-banner__image" />
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="category">
      <h2 class="h1 text-center p-5">Работайте как вам удобно</h2>
      <div class="row justify-content-center">
        <div class="col-mb-6 px-5 category-card-container d-flex justify-content-end">
          <div class="card" style="width: 18rem">
            <img class="img-fluid" src="/img/category-1.jpg" class="card-img-top" alt="category-card__img" />
            <div class="card-body">
              <h5 class="card-title">Аренда</h5>
              <p class="card-text">
                Доход <span class="text-nowrap"> до 100 000 руб.</span>
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ежедневный <br />вывод денег</li>
              <li class="list-group-item">
                Домашнее <br />хранение автомобиля
              </li>
              <li class="list-group-item">6 / 1 <br />график работы</li>
            </ul>
            <a class="btn btn-primary" href="#contacts-info" role="button">Узнать подробнее</a>
          </div>
        </div>
        <div class="col-mb-6 px-5 mx -5 category-card-container">
          <div class="card" style="width: 18rem">
            <img class="img-fluid" src="/img/category-2.jpg" class="card-img-top" alt="category-card__img" />
            <div class="card-body">
              <h5 class="card-title">Аренда</h5>
              <p class="card-text">
                Доход <span class="text-nowrap"> до 150 000 руб.</span>
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Ежедневный <br />вывод денег</li>
              <li class="list-group-item">
                Домашнее <br />хранение автомобиля
              </li>
              <li class="list-group-item">7 / 0 <br />график работы</li>
            </ul>
            <a class="btn btn-primary" href="#contacts-info" role="button">Узнать подробнее</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container p-5">
      <h2 class="h1 text-center">Аренда под такси - это выгодно!</h2>
      <div class="row-list row text-center">
        <div class="col-md-4 col-sm-4 utp-list__item-container">
          <div class="col-list__item js-constructor-btn" data-name="Узнать подробнее о новых автомобилях" data-title="Узнать подробнее о новых автомобилях">
            <img class="img-fluid" class="utp-list__item-img" src="/img/icons8-такси-96.png" alt="" />
            <div class="utp-list__item-title">Новый автомобиль</div>
            <div class="utp-list__item-text">
              Парк автомобилей Комфорт и <br />Комфорт+
            </div>
            <div class="utp-list__item-btn">Оставить заявку</div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 utp-list__item-container">
          <div class="utp-list__item js-constructor-btn" data-name="Узнать подробнее об экономии" data-title="Узнать подробнее об экономии">
            <img class="img-fluid" class="utp-list__item-img" src="/img/icons8-деньги-ваши-96.png" alt="" />
            <div class="utp-list__item-title">Экономия</div>
            <div class="utp-list__item-text">
              ТО, страхование, сезонная <br />смена резины - за наш счет.
            </div>
            <div class="utp-list__item-btn">Оставить заявку</div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 utp-list__item-container">
          <div class="utp-list__item js-constructor-btn" data-name="Узнать подробнее об экономии" data-title="Узнать подробнее о поддержке">
            <img class="img-fluid" class="utp-list__item-img" src="/img/icons8-человек-с-щитом-96.png" alt="" />
            <div class="utp-list__item-title">Поддержка</div>
            <div class="utp-list__item-text">
              Юридическая консультация <br />в сложной ситуации.
            </div>
            <div class="utp-list__item-btn">Оставить заявку</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content end -->
  <!--================ Start footer Area  =================-->
  <footer class="foot text-white bg-dark" id="contacts-info">
    <div class="container contacts">
      <h2 class="text-center">Связаться с нами</h2>
      <div class="row">
        <div class="col-md-4">
          <h3>Контакты:</h3>
          <h5>Адрес:</h5>
          <p>г. Москва, ул. Проспект Вернадского, д. 6В, стр. 3</p>
          <h5>Телефон:</h5>
          <a href="+79251001388">+7 (925) 100-13-88</a>
          <h5>График работы:</h5>
          <p>
            Понедельник - суббота: с 11-00 по 20-00, воскресенье: выходной.
          </p>
        </div>
        <div class="col-6 pt-2">
          <form action="">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Имя" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail" />
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Сообщение"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-danger" />
            </div>
            <div class="col-md-2 mb-2" id="map">
              <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A653e9d0cb8c0a59b44e83a1fab8e7ab89503092e243f707a87ee21f09f22bf11&amp;width=100%&amp;height=50vmin&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>

  <!--================ End footer Area  =================-->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>