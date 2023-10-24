<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<div class="header">
    <div class="nav">
        <div>
            <a href="<?= app()->route->getUrl('/main_page')?>">Главная страница</a>
        </div>
        <div">
            <?php
            if (!app()->auth::check()):
                ?>
                <a href="<?= app()->route->getUrl('/signup')?>">Регистрация</a>
                <a href="<?= app()->route->getUrl('/login')?>">Логин</a>

            <?php
            else:
                ?>
                <a href="<?= app()->route->getUrl('/profile')?>">Профиль</a>
                <a href="<?= app()->route->getUrl('/logout')?>">Выйти(<?= app()->auth::User()->name ?>)</a>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
<main>
    <?= $content ?? '' ?>

</main>
</body>
</html>