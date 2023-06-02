<h3><?= $message ?? 'Добавление закусок'; ?></h3>

<form method="post">
    <div class="centr">
        <div class="blocks">
            <div class="block">
                <input type="text" name="title"required placeholder="Название">
            </div>
            <div class="block">
                <input type="text" name="description" required placeholder="Описание">
            </div>
            <div class="block">
                <input type="text"name="price" required placeholder="Цена">
            </div>

            <div class="block">
                <button>Создать</button>
            </div>
        </div>
    </div>
</form>