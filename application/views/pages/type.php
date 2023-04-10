<div class="container">
    <h1 class="display-3 text-center mb-3">Справочная информация</h1>
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_category')?>">Категория</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('methodist/browse_type')?>">Вид</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_form')?>">Форма</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_type_doc')?>">Вид документа</a>
        </li>

    </ul>

    <form class="row g-3 mb-3" action="" method="post">
        <div class="col-auto">
            <input type="text" readonly class="form-control-plaintext" value="Название вида">
        </div>
        <div class="col-auto">
            <input type="password" name="name_category" class="form-control" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#type').DataTable();
    });
    </script>

    <table id="type" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название вида</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($type as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_type']?></th>
                <td><?=$row['name_type']?></td>
                <td>
                    <a href="" class="btn btn-primary">Изменить</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>