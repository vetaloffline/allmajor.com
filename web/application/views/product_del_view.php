<?if($db == '1'){?>
<div class="alert alert-danger">
  <strong>Товар удален</strong>
</div>
<?}else if($db == '2'){?>
<div class="alert alert-warning">
  <strong>Нет такого Кода-товара</strong>
 </div>
<?}?>
<form method="POST" action="/product/del">
	<div class="form-group">
 		<label for="usr">Код товара</label>
  		<input type="text" class="form-control good" id="usr" name="id_good"><br>
  		<input type="submit" name="auth" class="btn btn-danger" value="Удалить">
	</div>
</form>