
<?
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
        <th>Удалить</th>
      </tr>
    </thead>
    <tbody>
<?
foreach ($db as $k => $v) {?>
    <tr>
        <td><center><?=$v['good_id']?></center></td>
        <td><?=$v['name']?></td>
        <td><center><?=$v['puchasePrice']?></center></td>
        <td><center><?=$v['price']?></center></td>
        <td><center><?=$v['quantity']?></center></td>
        <td><center><?if($v['operation'] =='coming'){echo 'Закупка';}else{echo 'Продажа';}?></center></td>
        <td><center><?=$v['data']?></center></td>
        <td><center><?=$v['summa']?></center></td>
        <td><a href="/listgoods/deloperation" class="btn btn-default">Удалить</a></td>
      </tr>
<?}?>
    </tbody>
  </table>

<?}?>