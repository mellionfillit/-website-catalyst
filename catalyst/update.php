<?php
    require_once 'config/db.php';
    $order_id = $_GET['id'];
    $order = mysqli_query($mysqli, "SELECT * FROM `orders` WHERE `id_ord` = '$order_id'");
    $order = mysqli_fetch_assoc($order);
    $title="Изменить запись"; 
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
  <!--ФОРМА ИЗМ ЗАПИСИ-->
  <h3 class='text-center m-3'>Изменить запись</h3>
  <div class="fixed-wrap">
  <form action="vendor/update.php" method="post" class="form-horizontal m-3 col-11 col-md-8 col-lg-4 mx-auto">
    <input type="hidden" name="id_ord" value="<?= $order['id_ord'] ?>">
    <div class="form-group">
      <label for="inputName" class="col control-label">Имя заказчика:</label>
      <div class="col">
        <input type="text" name="name_ord" class="form-control form-control-lg" value="<?= $order['id_ord'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Телефон:</label>
      <div class="col">
        <input type="text" name="phone_ord" class="form-control form-control-lg" value="<?= $order['phone_ord'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Маил:</label>
      <div class="col">
        <input type="text" name="email_ord" class="form-control form-control-lg" value="<?= $order['email_ord'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Материал:</label>
      <div class="col">
        <input type="text" name="id_type_prod" class="form-control form-control-lg" value="<?= $order['id_type_prod'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Марка авто:</label>
      <div class="col">
        <input type="text" name="id_mark_avto" class="form-control form-control-lg" value="<?= $order['id_mark_avto'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Детали заказа:</label>
      <div class="col">
        <input type="text" name="ord_details" class="form-control form-control-lg" value="<?= $order['ord_details'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Вес в граммах:</label>
      <div class="col">
        <input type="text" name="weight_prod" class="form-control form-control-lg" value="<?= $order['weight_prod'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col control-label">Статус:</label>
      <div class="col">
        <input type="text" name="id_status_prod" class="form-control form-control-lg" value="<?= $order['id_status_prod'] ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-5 mx-auto">
        <button name="go" value="Заказать" type="submit" class="btn btn-success btn-lg mt-2 mx-auto">Изменить</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
