<h2>напитки</h2>

<div>
    <?php
    foreach ($Drinks as $Drinks) {

        echo '<h3>Название</h3>' . ' ' . $Drinks->title . '<h3>Описание</h3>' . ' ' . $Drinks->description . '<h3>Цена</h3>' . ' ' . $Drinks->price . '<br>' . '-------------';
    }
    ?>
</div>


<a href="<?= app()->route->getUrl('/drinks_add')?>">создание</a>