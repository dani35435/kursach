<h2>напитки</h2>

<div>
    <?php
    foreach ($Stocks as $Stocks) {

        echo '<h3>Картинка</h3>' . ' ' . $Stocks->image . '<h3>Название</h3>' . ' ' . $Stocks->title . '<h3>Описание</h3>' . ' ' . $Stocks->description ;
    }
    ?>
</div>


<a href="<?= app()->route->getUrl('/stocks_add')?>">создание</a>