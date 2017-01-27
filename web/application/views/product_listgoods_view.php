<?var_dump($db);
if ($db =='2') {?>
<div class="alert alert-danger">
  <strong>Ошибка ввода данных</strong>
</div>
<?}else{?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Код товара</th>
        <th>Наименование</th>
        <th>Цена закупки</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Операция</th>
        <th>Дата</th>
        <th>Сумма</th>
      </tr>
    </thead>
    <tbody>
<?
foreach ($db as $k => $v) {?>
	<tr>
        <td><?=$v['good_id']?></td>
        <td><?=$v['name']?></td>
        <td><?=$v['puchasePrice']?></td>
        <td><?=$v['price']?></td>
        <td><?=$v['quantity']?></td>
        <td><?if($v['operation'] =='coming'){echo 'Закупка';}else{echo 'Продажа';}?></td>
        <td><?=$v['data']?></td>
        <td><?=$v['summa']?></td>
      </tr>
<?}?>
    </tbody>
  </table>

<?}?>