<!DOCTYPE html>
<html lang="ru">
<head>
  <title>allmajor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/web/css/style.css">
</head>
<body>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <a href="/"><h4>База Данных AllMajor</h4></a>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Список всех товаров</a></li>
        <li><a href="/product/add">Добавить новый товар</a></li>
        <li><a href="/product/del">Удалить позицию</a></li>
        <li><a href="/product/arrival">Товар приход</a></li>
        <li><a href="/product/consumption">Товар расход</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
     	<div>
     		<?php include 'web/application/views/'.$content_view; ?>
     	</div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
