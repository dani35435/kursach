<a href="<?= app()->route->getUrl('/pizza')?>">Пицца</a>
<a href="<?= app()->route->getUrl('/drinks')?>">Напитки</a>
<a href="<?= app()->route->getUrl('/snacks')?>">Закуски</a>
<a href="<?= app()->route->getUrl('/stocks')?>">Акции</a>

<h3>Личные данные</h3>

<div>
    <?php
    echo "<table>
        <tr>
            <th>Имя</th>
            <th>почта</th>
            <th>день рождения</th>
            <th>номер</th>
        </tr>";
    foreach ($Users as $User) {
        echo "<tr>";
        echo "<td>" . $User["name"] . "</td>";
        echo "<td>" . $User["email"] . "</td>";
        echo "<td>" . $User["birthday"] . "</td>";
        echo "<td>" . $User["number"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</div>