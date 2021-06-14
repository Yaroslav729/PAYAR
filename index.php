<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Окoнные конструкции в Бердске</title>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Noto+Sans:wght@400;700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sass/style.css">
  </head>
  <body>
    <div class="fon">
      <header class="navbar">
        <div class="container">
          <div class="navbar-top">
            <div class="navbar-top__left">
              <a href="index.php" class="logo">
                <img src="img/logo/logo_top.svg" alt="PAYAR" class="logo__img">
              </a>
              <span class="navbar-top__text">Окна и витражи любой&nbsp;сложности</span>
            </div>
            <!-- /.navbar-top__right -->
            <div class="navbar-top__right">
              <img src="img/icon/icon-telephone.svg" alt="icon: home" class="navbar__icon-telephone">
              <a href="tel:+79139039199" class="telephone">+7 913 903 91 99</a>
            </div>
            <!-- /.navbar-top__left -->
            <button class="menu-button navbar-top__menu-button">
              <span class="menu-button__line"></span>
              <span class="menu-button__line"></span>
              <span class="menu-button__line"></span>
            </button>
          </div>
          <!-- /.navbar-top -->
        </div>
        <!-- /.container -->
        <div class="navbar-bottom">
          <div class="container container-bottom">
            <ul class="navbar-menu">
              <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">О компании</a></li>
              <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Наши работы</a></li>
              <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Преимущества</a></li>
              <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Отзывы</a></li>
              <li class="navbar-menu__item"><a href="#" class="navbar-menu__link">Контакты</a></li>
            </ul>
            <!-- /.navbar-menu -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-bottom -->
      </header>
      <section class="offer">
        <div class="container">
          <div class="offer-container">
            <div class="offer-service">
              <h1 class="offer-service__if">Меняете окна в квартире?
                Сделайте это <span class="offer-service__text-information">с помощью профессионалов!</span></h1>
              <div class="offer-service__information">
                <img src="img/icon/check.svg" alt="icon: chek" class="offer-service__chek">
                <p class="offer-service__margin">
                  Мы проследим, чтобы окна были <span class="offer-service__text-information">установлены грамотно и служили десятки лет.</span>
                </p>
              </div>
              <div class="offer-service__information">
                <img src="img/icon/check.svg" alt="icon: chek" class="offer-service__chek">
                <p class="offer-service__margin">
                  Вся наша продукция сертифицирована, всем клиентам предоставляем
                  <span class="offer-service__text-information">гарантию до 5 лет и доставку.</span>
                </p>
              </div>
              <div class="offer-service__information">
                <img src="img/icon/check.svg" alt="icon: chek" class="offer-service__chek">
                <p class="offer-service__margin">
                  <span class="offer-service__text-information">Запишитесь на замер</span> на сайте.
                </p>
              </div>
            </div>
            <!-- /.offer-serves -->
            <div class="offer-form">
              <div class="offer-form__frame">
                <div class="offer-form__border">
                  <h3 class="offer-form__text">Заполните форму</h3>
                  <input type="text" class="offer-form__name" placeholder="Ваше Имя">
                  <input type="tel" class="offer-form__phone" placeholder="Ваш телефон">
                  <button class="button button-offer">Получить консультацию</button>
                  <p class="offer-form__understanding">
                    Нажимая на кнопку, вы даете согласие на обработку&nbsp;персональных данных и соглашаетесь
                    c&nbsp;<span class="offer-form__understanding-text">политикой&nbsp;конфиденциальности.</span>
                  </p>
                </div>
                <!-- /.offer-form__border -->
              </div>
              <!-- /.offer-form__frame -->
            </div>
            <!-- /.offer-form -->
          </div>
          <!-- /.offer-container -->
        </div>
        <!-- /.container -->
      </section>
    </div>
    <!-- /.fon -->
    <section class="quiz">
      <div class="container">
        <div class="quiz-container">
          <div class="quiz-keepsake">
            <h2 class="quiz-keepsake__text">Пройдите <span class="quiz-keepsake__text-information">опрос</span> и мы
              сделаем вам подарок!</h2>
          </div>
          <div class="quiz-interview">
            <ul class="quiz-interview__choice">
              <li class="quiz-interview__if-one">
                <p class="quiz-interview__if-text">1. Какой цвет окна Вам подойдёт?</p>
                <img src="img/block-2/window-white.svg" alt="" class="quiz-interview__window-white">
                <img src="img/block-2/window-gray.svg" alt="" class="quiz-interview__window-gray">
                <img src="img/block-2/window-brown.svg" alt="" class="quiz-interview__window-brown">
              </li>
              <li class="quiz-interview__color">
                <input type="checkbox" id="check-1" class="quiz-interview__checkbox-color">
                <label for="check-1" class="quiz-interview__checkbox-white">Белый</label>
              </li>
              <li class="quiz-interview__color">
                <input type="checkbox" id="check-2" class="quiz-interview__checkbox-color">
                <label for="check-2" class="quiz-interview__checkbox-gray">Серый</label>
              </li>
              <li class="quiz-interview__color">
                <input type="checkbox" id="check-3" class="quiz-interview__checkbox-color">
                <label for="check-3" class="quiz-interview__checkbox-brown">Коричневый</label>
              </li>
              <li class="quiz-interview__if-too">
                <p class="quiz-interview__if-text__nesting">2. Нужен ли Вам монтаж окон?</p>
                <input type="checkbox" id="check-4" class="quiz-interview__checkbox">
                <label for="check-4" class="quiz-interview__checkbox-yes">Да</label>
                <input type="checkbox" id="check-5" class="quiz-interview__checkbox">
                <label for="check-5" class="quiz-interview__checkbox-no">Нет</label>
              </li>
              <li class="quiz-interview__if-three">
                <p class="quiz-interview__if-text__nesting">3. Нужен ли Вам демонтаж старого окна?</p>
                <input type="checkbox" id="check-6" class="quiz-interview__checkbox">
                <label for="check-6" class="quiz-interview__checkbox-yes">Да</label>
                <input type="checkbox" id="check-7" class="quiz-interview__checkbox">
                <label for="check-7" class="quiz-interview__checkbox-no">Нет</label>
              </li>
              <li class="quiz-interview__if-four">
                <p class="quiz-interview__if-text__nesting">4. Нужна ли вам внутренняя отделка окна?</p>
                <input type="checkbox" id="check-8" class="quiz-interview__checkbox">
                <label for="check-8" class="quiz-interview__checkbox-yes">Да</label>
                <input type="checkbox" id="check-9" class="quiz-interview__checkbox">
                <label for="check-9" class="quiz-interview__checkbox-no">Нет</label>
              </li>
              <li class="quiz-interview__if-five">
                <p class="quiz-interview__if-text__nesting">5. Планируете устанавливать окно в&nbsp;течении месяца?</p>
                <input type="checkbox" id="check-10" class="quiz-interview__checkbox">
                <label for="check-10" class="quiz-interview__checkbox-yes">Да</label>
                <input type="checkbox" id="check-11" class="quiz-interview__checkbox">
                <label for="check-11" class="quiz-interview__checkbox-no">Нет</label>
              </li>
            </ul>
            <input type="tel" class="quiz-interview__phone" placeholder="Ваш телефон">
            <button class="button button-quiz">Получить подарок</button>
          </div>
          <!-- /.quiz-interview -->
          <!-- /.quiz-keepsake -->

        </div>
        <!-- /.container-keepsake -->
      </div>
      <!-- /.container -->
    </section>
  </body>
</html>