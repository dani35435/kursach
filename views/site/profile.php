<h3>Личные данные</h3>

<div>
    <?php
    foreach ($Users as $Users) {

        echo '<h5>Имя</h5>' . ' ' . $Users->name . '<h5>Почта </h5>' . $Users->email . '<h5>Дата рождения </h5>' . $Users->birthday . '<h5>Номер </h5>' . $Users->number;
    }
    ?>
</div>