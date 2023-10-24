<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>

<h2>напитки</h2>

<span>сортировка</span> <br>
<a href="<?= app()->route->getUrl('/drinks')?>">Все</a> <br>
<a href="<?= app()->route->getUrl('/drinks' . "?sort=price_asc" )?>">от низкой до высокой</a><br>

<div>
    <?php
    echo "<table>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>цена</th>
        </tr>";
    foreach ($Drinks as $Drink) {
        $img = $Drink->photo;
        echo "<tr>";
        echo "<td>" . $Drink->title . "</td>";
        echo "<td>" . $Drink->description . "</td>";
        echo "<td>" . $Drink->price . "</td>";
        echo  "<td>" . "<img style='width: 100px; height: 100px' src=/kursachis/public/{$img} alt='Фото' >" . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</div>


<a href="<?= app()->route->getUrl('/drinks_add')?>">создать</a>
<button><a href="<?= app()->route->getUrl('/drinks?del=' . "$Drink[id]") ?>">Удалить</a></button>