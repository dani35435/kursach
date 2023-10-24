<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<h2>Регистрация нового Абонента</h2>
<h3><?= $message ?? ''; ?></h3>
<div>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div>
            <div>
                <input type="text" name="name" required placeholder="Имя">
            </div>
            <div>
                <input type="text" name="email" required placeholder="Почта">
            </div>
            <div>
                <input type="tel" name="number" required placeholder="Номер">
            </div>
            <div>
                <input type="date" name="birthday" required placeholder="Дата рождения">
            </div>
            <div>
                <input type="password" name="password" required placeholder="Пароль">
            </div>

            <div>
                <select name="privilege" id="privilege">
                    <option value="1">Администратор</option>
                    <option value="2">Пользователь</option>
                </select>
            </div>
            <div>
                <button>Регистрация</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>