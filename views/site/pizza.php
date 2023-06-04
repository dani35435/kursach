<h2>Пицца</h2>
<?php
$conn = mysqli_connect("localhost", "root", "", "kursach");
$sql = "SELECT * FROM Pizzas";
if ($result = mysqli_query($conn, $sql)) {
    echo "<table>
<tr>
    <th>Название</th>  
    <th>Описание</th>
</tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td><form action='delete' method='post'>
                <input type='hidden' name='id' value='" . $row["id"] . "' />
                <input type='submit' value='Удалить'>
            </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>


<a href="<?= app()->route->getUrl('/pizza_add') ?>">создание</a>
<a href="<?= app()->route->getUrl('/delete') ?>">удалить</a>