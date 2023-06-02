<h2>Закуски</h2>

<div>
    <?php
    foreach ($Snacks as $Snacks) {

        echo '<h3>Название</h3>' . ' ' . $Snacks->title . '<h3>Описание</h3>' . ' ' . $Snacks->description . '<h3>Цена</h3>' . ' ' . $Snacks->price . '<br>' . '-------------';
    }
    ?>
</div>


<a href="<?= app()->route->getUrl('/snacks_add')?>">создание</a>