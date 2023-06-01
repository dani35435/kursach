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
        <div class="logo">
            <a href="<?= app()->route->getUrl('/main_page')?>">логотип</a>
        </div>
        <div class="link">
            <?php
            if (!app()->auth::check()):
                ?>
                <a href="<?= app()->route->getUrl('/signup')?>">Регистрация</a>
                <a href="<?= app()->route->getUrl('/login')?>">Логин</a>

            <?php
            else:
                ?>
<!---->
<!--                <a href="--><?php //= app()->route->getUrl('/room')?><!--">ROOM</a>-->
<!--                <a href="--><?php //= app()->route->getUrl('/subdivision')?><!--">SUBDIVISION</a>-->
<!--                <a href="--><?php //= app()->route->getUrl('/profile')?><!--">PROFILE</a>-->
<!--                <a href="--><?php //= app()->route->getUrl('/logout')?><!--">LOGOUT(--><?php //= app()->auth::User()->login ?><!--)</a>-->


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