<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>

<h3>Результаты поиска</h3>

<div>
    <?php
    echo "<table>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>цена</th>
        </tr>";
    foreach ($pizzas as $pizza) {
        echo "<tr>";
        echo "<td>" . $pizza->title . "</td>";
        echo "<td>" . $pizza->description . "</td>";
        echo "<td>" . $pizza->price . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>

<div>
    <?php
    echo "<table>";
    foreach ($drinks as $drink) {
        echo "<tr>";
        echo "<td>" . $drink->title . "</td>";
        echo "<td>" . $drink->description . "</td>";
        echo "<td>" . $drink->price . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>

<div>
    <?php
    echo "<table>";
    foreach ($snacks as $snack) {
        echo "<tr>";
        echo "<td>" . $snack->title . "</td>";
        echo "<td>" . $snack->description . "</td>";
        echo "<td>" . $snack->price . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>