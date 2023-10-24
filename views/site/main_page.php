<div>
    <h3>главная страница</h3>
</div>
<div>
    <form method="post" action="search">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" id="search1" name="search1" placeholder="поиск">
        <button type="submit">Поиск</button>
    </form>
</div>


<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>
<a href="<?= app()->route->getUrl('/filter')?>">Фильтр</a>


<h2>Комбо</h2>
<div>
    <?php
    echo "<table>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>цена</th>
        </tr>";
    foreach ($Combos as $Combo) {
        $img = $Combo->photo;
        echo "<tr>";
        echo "<td>" . $Combo["title"] . "</td>";
        echo "<td>" . $Combo["description"] . "</td>";
        echo "<td>" . $Combo["price"] . "</td>";
        echo  "<td>" . "<img style='width: 100px; height: 100px' src=/kursachis/public/{$img} alt='Фото' >" . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</div>

<a href="<?= app()->route->getUrl('/combo_add')?>">создать</a>
<button><a href="<?= app()->route->getUrl('/main_page?del=' . "$Combo[id]") ?>">Удалить</a></button>

