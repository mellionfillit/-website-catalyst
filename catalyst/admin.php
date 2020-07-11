<?php
$title="Панель админа"; // название формы
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title><?php echo $title; ?></title>

  </head>
  <body>
    <!--ШАПКА-->
    <nav class="navbar navbar-expand-md sticky-top navbar-light" style="background-color: #eee">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">Назад</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link" style="color:#000!important">Панель админа</a>
            </li>
          </ul>
      </div>
    </nav>
    <!--ТАБЛИЦА ЗАЯВКИ-->
    <h3 class='text-center m-3'>Заявки</h3>
    <div class="table-responsive">
      <table class="table-light table-striped table-bordered table-hover mx-auto">
              <tr>
                  <th>ID</th>
                  <th>Имя заказчика:</th>
                  <th>Телефон:</th>
                  <th>Маил:</th>
                  <th>Статус:</th>
              </tr>

              <?php
                  //Делаем выборку всех строк из таблицы "products"
                  $requests = mysqli_query($mysqli, "SELECT * FROM `request`");
                  //Преобразовываем полученные данные в нормальный массив
                  $requests = mysqli_fetch_all($requests);

                  //Перебираем массив и рендерим HTML с данными из массива
                  foreach ($requests as $request) {
                      ?>

                          <tr>
                              <td><?= $request[0] ?></td>
                              <td><?= $request[1] ?></td>
                              <td><?= $request[2] ?></td>
                              <td><?= $request[3] ?></td>
                              <td><?= $request[4] ?></td>

                              <td><a href="vendor/delete_ord.php?id=<?= $request[0] ?>"><button class="btn btn-danger">Удалить</button></a></td>
                          </tr>

                      <?php
                  }
              ?>
          </table>
        </div>
<!--ТАБЛИЦА ЗАКАЗЫ-->
<h3 class='text-center m-3'>Заказы</h3>
<div class="table-responsive">
  <table class="table-light table-striped table-bordered table-hover mx-auto">
          <tr>
              <th>ID</th>
              <th>Имя заказчика:</th>
              <th>Телефон:</th>
              <th>Маил:</th>
              <th>Материал:</th>
              <th>Марка авто:</th>
              <th>Детали:</th>
              <th>Вес в граммах:</th>
              <th>Статус:</th>
          </tr>

          <?php
              //Делаем выборку всех строк из таблицы "products"
              $orders = mysqli_query($mysqli, "SELECT * FROM `orders`");
              //Преобразовываем полученные данные в нормальный массив
              $orders = mysqli_fetch_all($orders);

              //Перебираем массив и рендерим HTML с данными из массива
              foreach ($orders as $order) {
                  ?>

                      <tr>
                          <td><?= $order[0] ?></td>
                          <td><?= $order[1] ?></td>
                          <td><?= $order[2] ?></td>
                          <td><?= $order[3] ?></td>
                          <td><?= $order[4] ?></td>
                          <td><?= $order[5] ?></td>
                          <td><?= $order[6] ?></td>
                          <td><?= $order[7] ?></td>
                          <td><?= $order[8] ?></td>
                          <td><a href="update.php?id=<?= $order[0] ?>"<button class="btn btn-success">Изменить</button></a></td>
                          <td><a href="vendor/delete.php?id=<?= $order[0] ?>"><button class="btn btn-danger">Удалить</button></a></td>
                      </tr>

                  <?php
              }
          ?>
      </table>
    </div>

    <!--ФОРМА ДОБ ЗАПИСИ-->
    <h3 class='text-center m-3'>Добавить запись</h3>
    <div class="fixed-wrap">
    <form action="vendor/create.php" method="post" class="form-horizontal m-3 col-11 col-md-8 col-lg-4 mx-auto">
      <div class="form-group">
        <label for="inputName" class="col control-label">Имя заказчика:</label>
        <div class="col">
          <input type="text" name="name_ord" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Телефон:</label>
        <div class="col">
          <input type="text" name="phone_ord" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Маил:</label>
        <div class="col">
          <input type="text" name="email_ord" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Материал:</label>
        <div class="col">
          <input type="text" name="id_type_prod" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Марка авто:</label>
        <div class="col">
          <input type="text" name="id_mark_avto" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Детали заказа:</label>
        <div class="col">
          <input type="text" name="ord_details" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Вес в граммах:</label>
        <div class="col">
          <input type="text" name="weight_prod" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col control-label">Статус:</label>
        <div class="col">
          <input type="text" name="id_status_prod" class="form-control form-control-lg">
        </div>
      </div>
      <div class="form-group">
        <div class="col-5 mx-auto">
          <button name="go" value="Заказать" type="submit" class="btn btn-success btn-lg mt-2 mx-auto">Добавить</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
