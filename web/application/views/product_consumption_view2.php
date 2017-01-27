<form action="/product/consumption" method="POST">
<label for="usr">Количество товара</label>
<input type="text" class="form-control good_3" id="usr" name="quantity">
<label for="usr">Цена продажи</label>
<input type="text" class="form-control good_3" id="usr" name="price">
<label for="usr">Цена закупки</label>
<div class="form-group good_2">
  <select class="form-control" id="sel1" name="puchprice">
    <?
$pusch = [];
    foreach ($db as $key => $value) {
    	$price = $value['puchasePrice'];
    	if (!$pusch[$price]) {
    		$pusch[$price] = $value['data'];?>
    	<?}	
    }asort($pusch);
    foreach ($pusch as $k => $v) {?>
    	<option value="<?=$k?>"><?=$k.' грн. Дата '.$v?></option>
    <?}?>
  </select>
</div> 
<input type="hidden" name="idgood" value="<?=$db[0]['good_id']?>">
<input type="submit" name="auth" value="Добавить расход" class="btn btn-info">
</form>
