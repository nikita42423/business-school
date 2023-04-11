<div class="container">
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('director/browse_diretor')?>">Рейтинг преподавателей</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('director/browse_diretor_prog')?>">Рейтинг программ обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('director/browse_otchuslformobus')?>">Отчет об объемах услуг по формам обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('director/browse_spicslusprog')?>">Список слушателей по выбранный программе</a>
        </li>
        
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <form class="row g-3 needs-validation" novalidate method="POST" action="<?=base_url('director/browse_otchuslformobus')?>">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Период с</label>
                <input type="date" class="form-control" id="validationCustom01" required name="date1">
                
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">по</label>
                <input type="date" class="form-control" id="validationCustom02" required name="date2">
            </div>
            <div class="col-md-4" style="padding-top: 3%;">
                <button class="btn btn-primary" type="submit">поиск</button>
            </div>
            </form>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#reintch').DataTable();
    });
    </script>

    <table id="reintch" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Название программы</th>
                <th scope="col">Категория</th>
                <th scope="col">Кол-во слушателей</th>
                <th scope="col">Кол-во очная</th>
                <th scope="col">Кол-во заочная</th>
                <th scope="col">Кол-во очно-заочная</th>
                <th scope="col">Кол-во дистанционно</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach ($otcht as $row) {?>
            <tr>
                <td scope="row"><?=$row['name_program']?></td>
                <td scope="row"><?=$row['name_category']?></td>
                <td scope="row"><?=$row['COUNT(actual_count_listener)']?></td>
                <td><?=$row['COUNT(CASE WHEN form.name_form = "Очная" THEN 1 END)']?></td>
                <td><?=$row['COUNT(CASE WHEN form.name_form = "Заочная" THEN 1 END)']?></td>
                <td><?=$row['COUNT(CASE WHEN form.name_form = "Очно-заочная" THEN 1 END)']?></td>
                <td><?=$row['COUNT(CASE WHEN form.name_form = "Дистанционная" THEN 1 END)']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>