
<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>
<h2>Акции</h2>

<div>
    <?php
    echo "<table>
        <tr>
            <th>Название</th>
            <th>Описание</th>
        </tr>";
    foreach ($Stocks as $Stock) {
        $img = $Stock->photo;
        echo "<tr>";
        echo "<td>" . $Stock["title"] . "</td>";
        echo "<td>" . $Stock["description"] . "</td>";
        echo  "<td>" . "<img style='width: 100px; height: 100px' src=/kursachis/public/{$img} alt='Фото' >" . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</div>


<a href="<?= app()->route->getUrl('/stocks_add')?>">создание</a>
<button><a href="<?= app()->route->getUrl('/stocks?del=' . "$Stock[id]") ?>">Удалить</a></button>