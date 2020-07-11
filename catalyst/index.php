<?php
$title="Главная страница"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require_once 'config/db.php';
?>
    <!--Главный экран-->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-caption">
            <h1 class="display-2">Покупаем катализаторы</h1>
            <h3>Примем авто﻿мобильные катализаторы с любых регионов</h3>
            <a href="#fixed"><button type="button" class="btn btn-outline-light btn-lg mt-5">Заказать звонок</button></a>
          </div>
        </div>
      </div>
    </div>
                      <!--НАПОЛНЕНИЕ-->
<!--Контейнер-->
  <div class="container-fuild" >
      <div class="row w-100 align-self-center col-12 mx-auto">
          <div class="jumbotron">
              <h5>Звоните по номеру <b>(номер телефона)</b> или пишите на Whatsapp и Viber, чтобы узнать подробнее.</h5>
        </div>
    </div>
  </div>
<!--Контейнер с характеристиками-->
  <div class="container-fuild">
  <div class="row text-center w-100 mx-auto" id="price">
    <div class="col-12">
      <h1>Какие катализаторы мы приобретаем:</h1>
    </div>
    <hr style="border-top:2px solid #f0f0f0; width:60%; margin-top:0.3em;margin-bottom:1em;
    ">
    <div class="col-12">
      <p class="lead">Конечная цена катализатора выясняется после анализа специалиста.
         Расчет происходит сразу после оценки</p>
    </div>
  </div>
</div>
<!--Виды катализаторов-->
      <div class="container-fuild padding pb-5">
        <div class="row col-md-10 col-sm-12 mx-auto">
          <div class="col-lg-5 mx-auto  pt-2">
            <div class="card">
              <img class="card-img-top" src="img/ker.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Керамические катализаторы</h5>
                <p class="card-text text-justify">Примерная стоимость варьируется <b>от 2 500 до 10 000</b> тыс. руб. за килограмм</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mx-auto  pt-2">
            <div class="card">
              <img class="card-img-top" src="img/met.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Металлические катализаторы</h5>
                <p class="card-text text-justify">﻿Примерная стоимость варьируется <b>от 800 до 4 000</b> тыс. руб. за килограмм</p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--ФОРМА-->
<div class="fixed-wrap">
  <div id="fixed">
    <form action="send.php" method="post" class="form-horizontal m-3 pt-5 pb-5 col-11 col-md-8 col-lg-4 mx-auto" style="font-size:1.5em; color:white; text-shadow: 5px 5px 10px #000;">
      <h1 class="text-center">Запросить звонок:</h1>
      <div class="form-group">
        <label for="inputName" class="col control-label">Ваше имя:</label>
        <div class="col">
          <input name="fio" type="name" class="form-control form-control-lg" id="inputName" placeholder="Введите ваше имя">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPhone" class="col control-label">Ваш телефон:</label>
        <div class="col">
          <input name="tel" type="phone" class="form-control form-control-lg" id="inputPhone" placeholder="Введите ваш телефон">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail" class="col control-label">Ваша почта:</label>
        <div class="col">
          <input name="mail" type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Введите вашу почту">
        </div>
      </div>
      <div class="form-group">
        <div class="col-5 mx-auto">
          <button name="go" value="Заказать" type="submit" class="btn btn-outline-light btn-lg mt-2 mx-auto">Заказать</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!--Доп инфо-->
<div class="container-fluid padding">
  <div class="row padding">
    <div class="col-lg-6 my-auto">
      <h2>Стоимость катализатора зависит от производителя авто:</h2>
      <ul>
         <li>Катализаторы от иномарок:</li>
         <p>Катализаторы в иномарках содержат больше драгметаллов и стоят дороже, чем нейтрализаторы в российских авто.</p>
         <li>Катализаторы от российских авто:</li>
         <p>Чем новее год производства и чем больше объём двигателя — тем выше стоимость этих катализаторов.</p>
    </ul>
    </div>
    <div class="col-lg-6">
      <img src="img/avto.jpg" class="img-fluid">
    </div>
  </div>
</div>
<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
