<div style="padding-top:20px; padding-bottom:20px;">
    <form action="add.php" method="post">
        <div>
            Заголовок новости: <input type="text" name="title">
        </div>
        <div>
            Категория новостей: <input type="text" name="cat">
        </div>
        <div>
            Описание новости: <br>
            <textarea name="description"></textarea>
        </div>
        <div>
            Полный текст новости: <br>
            <textarea name="text"></textarea>
        </div>
        <input type="submit" name="add" vаlue="Добавить новость">
    </form>
</div>