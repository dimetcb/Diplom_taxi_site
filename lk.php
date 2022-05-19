<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png" />
  <script src="https://kit.fontawesome.com/eb17427400.js" crossorigin="anonymous"></script>
  <title>Личный кабинет</title>
  <style>
    body {
      background-image: url(/img/fon_lk.jpg);
    }

    .files {
      border: 3px solid black;
      border-radius: 8px;
      box-shadow: 10px 5px 5px rgb(29, 211, 211);
      text-align: center;
      margin-bottom: 1rem;
      margin-left: 50px;
    }

    .countdown-title {
      color: #396;
      font-weight: 100;
      font-size: 40px;
      margin: 40px 0px 20px;
    }

    .countdown {
      font-family: sans-serif;
      color: #fff;
      display: inline-block;
      font-weight: 100;
      text-align: center;
      font-size: 30px;
    }

    .countdown-number {
      padding: 10px;
      border-radius: 3px;
      background: #00bf96;
      display: inline-block;
    }

    .countdown-time {
      padding: 15px;
      border-radius: 3px;
      background: #00816a;
      display: inline-block;
    }

    .countdown-text {
      display: block;
      padding-top: 5px;
      font-size: 16px;
    }

    .deadline-message {
      display: none;
      font-size: 24px;
      font-style: italic;
    }

    .visible {
      display: block;
    }

    .hidden {
      display: none;
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
    }

    @media (max-width: 393px) {
      html {
        font-size: 0.4rem;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">

    <div class="row mt-5">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link" href="/index.php" role="tab" aria-controls="v-pills-index" aria-selected="false">На главную</a>
          <a class="nav-link" id="profileTab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Профиль</a>
          <a class="nav-link" id="messagesTab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Связаться с таксопарком</a>
          <a class="nav-link" id="settingsTab" data-toggle="pill" href="#v-pills-docs" role="tab" aria-controls="v-pills-docs" aria-selected="false">Документы для работы</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row mt-5">
              <div class="col-sm-3">
                <img src="/img/images.png" alt="фото пользователя" width="100" height="100" />
              </div>
              <div class="col-sm-9">

                <p>Имя: <span><?php echo $_SESSION['name'] ?></span>
                </p>
                <p>Отчество: <?php echo $_SESSION['patronymic'] ?></p>
                <p>Фамилия: <span><?php echo $_SESSION['lastname'] ?></span>
                </p>

                <h1 id="userName"></h1>
                <h2>Осталось дней до следующего ТО:</h2>
                <div id="deadline-message" class="deadline-message">
                  Срочно езжай в сервис на ТО!!!
                </div>
                <div id="countdown" class="countdown">
                  <div class="countdown-number">
                    <span class="days countdown-time"></span>
                    <span class="countdown-text">Дни</span>
                  </div>
                  <div class="countdown-number">
                    <span class="hours countdown-time"></span>
                    <span class="countdown-text">Часы</span>
                  </div>
                  <div class="countdown-number">
                    <span class="minutes countdown-time"></span>
                    <span class="countdown-text">Минуты</span>
                  </div>
                  <div class="countdown-number">
                    <span class="seconds countdown-time"></span>
                    <span class="countdown-text">Секунды</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-docs" role="tabpanel" aria-labelledby="v-pills-docs-tab">
            <div class="row docs flex-column p-5">
              <div class="col-md-4 files">
                <h4>Карточка водителя</h4>
                <p>
                  <a href="/Docs/card_driver.pdf"><i class="fa-solid fa-file-word fa-lg"></i> Открыть файл
                    в браузере</a>
                </p>
                <p>
                  <a href="/Docs/card_driver.pdf" download><i class="fa-solid fa-file-word fa-lg"></i> Скачать
                    файл</a>
                </p>
              </div>
              <div class="col-md-4 files">
                <h4>Путевой лист (бланк)</h4>
                <p>
                  <a href="/Docs/forma-4.xls">
                    <i class="fa-solid fa-file-excel fa-lg"></i> Открыть файл
                    в браузере</a>
                </p>
                <p>
                  <a href="/Docs/forma-4.xls" download><i class="fa-solid fa-file-excel fa-lg"></i> Скачать
                    файл</a>
                </p>
              </div>
              <div class="col-md-4 files">
                <h4>Путевой лист (образец заполнения)</h4>
                <p>
                  <a href="/Docs/pytevoi_list.jpg"><i class="fa-solid fa-file-image fa-lg"></i> Открыть файл
                    в браузере</a>
                </p>
                <p>
                  <a href="/Docs/pytevoi_list.jpg" download><i class="fa-solid fa-file-image fa-lg"></i> Скачать
                    файл</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function getTimeRemaining(endtime) {
      let t = Date.parse(endtime) - Date.parse(new Date());
      let seconds = Math.floor((t / 1000) % 60);
      let minutes = Math.floor((t / 1000 / 60) % 60);
      let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      let days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        total: t,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds,

      };
    }

    function initializeClock(id, endtime) {
      let clock = document.getElementById(id);
      let daysSpan = clock.querySelector(".days");
      let hoursSpan = clock.querySelector(".hours");
      let minutesSpan = clock.querySelector(".minutes");
      let secondsSpan = clock.querySelector(".seconds");

      function updateClock() {
        let t = getTimeRemaining(endtime);
        if (t.total <= 0) {
          document.getElementById("countdown").className = "hidden";
          document.getElementById("deadline-message").className = "visible";
          clearInterval(timeinterval);
          initializeClock("countdown", deadline);
          return true;
        }
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
      }
      updateClock();
      let timeinterval = setInterval(updateClock, 100);
    }
    let deadline = "May 31 2022 12:00:00 GMT+0300";
    initializeClock("countdown", deadline);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script>
    let path = location.pathname.split("/")[2];
    let user;
    async function getUser() {
      let response = await fetch("/php/lk_obr.php");
      return response.json();
    }
    addEventListener('popstate', event => {
      let pathPop = location.pathname.split("/")[2]
      if (pathPop == "profile") {
        $('#profileTab').tab('show');
        console.log(pathPop);
      } else if (pathPop == "messages") {
        $('#messagesTab').tab('show');
        console.log(pathPop);
      } else if (pathPop == "settings") {
        $('#settingsTab').tab('show');
        console.log(pathPop);
      }
    });
    if (path == "profile") {
      getUser().then(user => {
        userName.innerText = `${user.name} ${user.lastname} ${patronymic}`
      });
      console.log(user);
      $('#v-pills-profile').tab('show');
    } else if (path == "messages") {
      $('#v-pills-messages').tab('show');

      $('#v-pills-settings').tab('show');
    }
    document.getElementById(path + "Tab").classList.add("active");
    let navLinks = document.querySelectorAll(".nav-link");
    for (let i = 0; i < navLinks.length; i++) {
      navLinks[i].addEventListener("click", () => {
        let page = navLinks[i].getAttribute("aria-controls").split("v-pills-")[1];
        console.log(page);
        history.pushState('', '', page);
      })
    }
  </script>
</body>

</html>