<div class="container">
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_category')?>">Категория</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_type')?>">Вид</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('methodist/browse_form')?>">Форма</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_type_doc')?>">Вид документа</a>
        </li>

    </ul>

    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#form').DataTable();
    });
    </script>

    <table id="form" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название формы</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($form as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_form']?></th>
                <td><?=$row['name_form']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>