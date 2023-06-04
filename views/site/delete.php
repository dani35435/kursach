<?php
if (isset($_POST["id"])) {
    $conn = mysqli_connect("localhost", "root", "", "kursach");
    if (!$conn) {
        die("Ошибка: " . mysqli_connect_error());
    }
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM Pizzas WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {

        header("Location: pizza");
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
