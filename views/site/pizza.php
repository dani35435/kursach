<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>
<h2>Пицца</h2>


<span>сортировка</span> <br>
<a href="<?= app()->route->getUrl('/pizza')?>">Все</a> <br>
<a href="<?= app()->route->getUrl('/pizza' . "?sort=price_asc" )?>">от низкой до высокой</a><br>

<?php
echo "<table>
<tr>
    <th>Название</th>
    <th>Описание</th>
    <th>цена</th>
</tr>";

foreach ($Pizzas as $Pizza) {
    $img = $Pizza->photo;
    echo "<tr>";
    echo "<td>" . $Pizza->title . "</td>";
    echo "<td>" . $Pizza->description . "</td>";
    echo "<td>" . $Pizza->price . "</td>";
    echo "<td>" . "<img style='width: 100px; height: 100px' src=/kursachis/public/{$img} alt='Фото' >" . "</td>";
    echo "</tr>";
}
echo "</table>";

?>


    <a href="<?= app()->route->getUrl('/pizza_add') ?>">создание</a>
    <button type="submit"><a href="<?= app()->route->getUrl('/pizza?del=' . "$Pizza[id]") ?>">Удалить</a></button>
