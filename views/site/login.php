<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <div>
            <div>
                <div>
                    <input type="text" name="email" placeholder="Почта">
                </div>
                <div class="block">
                    <input type="password" name="password" placeholder="Пароль">
                </div>
                <div class="block">
                    <button>Войти</button>
                </div>
            </div>
    </form>
    </div>
<?php endif;
