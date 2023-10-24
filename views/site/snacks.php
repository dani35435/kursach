<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>

<h2>Закуски</h2>

<span>сортировка</span> <br>
<a href="<?= app()->route->getUrl('/snacks')?>">Все</a> <br>
<a href="<?= app()->route->getUrl('/snacks' . "?sort=price_asc" )?>">от низкой до высокой</a><br>

<div>
    <?php
    echo "<table>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>цена</th>
        </tr>";
    foreach ($Snacks as $Snack) {
        $img = $Snack->photo;
        echo "<tr>";
        echo "<td>" . $Snack->title . "</td>";
        echo "<td>" . $Snack->description . "</td>";
        echo "<td>" . $Snack->price . "</td>";
        echo  "<td>" . "<img style='width: 100px; height: 100px' src=/kursachis/public/{$img} alt='Фото' >" . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</div>

<a href="<?= app()->route->getUrl('/snacks_add') ?>">создание</a>
<button><a href="<?= app()->route->getUrl('/snacks?del=' . "$Snack[id]") ?>">Удалить</a></button>