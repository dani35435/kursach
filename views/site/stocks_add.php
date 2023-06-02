<h3><?= $message ?? 'Добавление акций'; ?></h3>

<form method="post">
    <div class="centr">
        <div class="blocks">
            <div class="block">
                <input type="text" name="image" placeholder="Картинка">
            </div>
            <div class="block">
                <input type="text" name="title" required placeholder="Название">
            </div>
            <div class="block">
                <input type="text"name="description" required placeholder="описание">
            </div>

            <div class="block">
                <button>Создать</button>
            </div>
        </div>
    </div>
</form>