<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->users()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
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
