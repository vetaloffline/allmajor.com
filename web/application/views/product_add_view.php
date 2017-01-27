<?if($db == '1'){?>
<div class="alert alert-success">
  <strong>Товар успешно добавлен</strong>
</div>
<?}elseif($db == '2'){?>
<div class="alert alert-warning">
  <strong>ОШИБКА ВВОДА</strong> 
</div>
<?}elseif($db == '3'){?>
<div class="alert alert-info">
  <strong>Такой код уже существует</strong> 
</div>
<?}?>
<form method="POSt" action="/product/add">
	<div class="form-group">
	  <label for="pwd">Код товара</label>
	  <input type="text"  class="form-control good" id="pwd" name="goodid">
	</div>
	<div class="form-group">
	  <label for="usr">Имя товара</label>
	  <input type="text" class="form-control good_2" id="usr" name="name">
	</div>
	<div class="form-group">
	  <label for="usr">Цена</label>
	  <input type="text" class="form-control good" id="usr" name="price">
	</div>
	<div>
		<input type="submit" name="auth" value="Добавить товар в базу" class="btn btn-info">
	</div>
</form>