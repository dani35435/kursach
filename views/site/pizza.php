<h2>Пицца</h2>

<div>
    <?php
    foreach ($Pizzas as $Pizzas) {

        echo '<h3>Название</h3>' . ' ' . $Pizzas->title . '<h3>Описание</h3>' . ' ' . $Pizzas->description . '<h3>Цена</h3>' . ' ' . $Pizzas->price . '<br>' . '-------------';
    }
    ?>
</div>


<a href="<?= app()->route->getUrl('/pizza_add')?>">создание</a>