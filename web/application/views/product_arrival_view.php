<?
if ($db == '1') {?>
	<div class="alert alert-success">
  <strong>Товарх приход добавлен</strong>
</div>
<?}elseif($db == '2'){?>
<div class="alert alert-warning">
  <strong>Ошибка ввода данных</strong>
</div>
<?}?>
<div class="form-group">
	<form action="/product/arrival" method="POST">
	  <label for="usr">Код товара</label>
	  <input type="text" class="form-control good" id="usr" name="id_good">
	  <label for="usr">Количество</label>
	  <input type="text" class="form-control good" id="usr" name="quanity">
	  <label for="usr">Цена закупки</label>
	  <input type="text" class="form-control good" id="usr" name="price_purchase"><br>
	  <input type="submit" name="auth" class="btn btn-primary">
  </form>
</div>