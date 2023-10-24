<h3><?= $message ?? 'Добавление акций'; ?></h3>

<form method="post" enctype="multipart/form-data">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <div class="centr">
        <div class="blocks">
            <div class="block">
                <input type="text" name="title" required placeholder="Название">
            </div>
            <div class="block">
                <input type="text"name="description" required placeholder="описание">
            </div>
            <div>
                <input type="file" name="photo">
            </div>

            <div class="block">
                <button>Создать</button>
            </div>
        </div>
    </div>
</form>