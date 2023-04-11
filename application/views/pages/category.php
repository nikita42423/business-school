<!-- Страница просмотра категории (для методиста)|Кузнецов -->
<div class="container">
    <h1 class="display-3 text-center mb-3">Справочная информация</h1>
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('methodist/browse_category')?>">Категория</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_type')?>">Вид</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_form')?>">Форма</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_type_doc')?>">Вид документа</a>
        </li>
        
    </ul>

    <form class="row g-3 mb-3" action="<?=base_url('category/add_category')?>" method="post">
        <div class="col-auto">
            <input type="text" readonly class="form-control-plaintext" value="Название категории">
        </div>
        <div class="col-auto">
            <input type="text" name="name_category" class="form-control" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#category').DataTable();
    });
    </script>

    <table id="category" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название категории</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($category as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_category']?></th>
                <td><?=$row['name_category']?></td>
                <td>
                    <a href="" class="btn btn-primary">Изменить</a>
                </td>
                <td>
                    <a href="<?=base_url('category/del_category?ID_category='.$row['ID_category'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>