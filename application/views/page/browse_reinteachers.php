<div class="container">
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('director/browse_reinteachers')?>">Рейтинг преподавателей</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('director/browse_reinprogmobus')?>">Рейтинг программ обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('director/browse_otchuslformobus')?>">Отчет об объемах услуг по формам обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('director/browse_spicslusprog')?>">Список слушателей по выбранный программе</a>
        </li>
        
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <form class="row g-3 needs-validation" novalidate method="POST" action="<?=base_url('director/browse_diretor')?>">
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
                <th scope="col">ФИО преподавателей</th>
                <th scope="col">Кол-во клиентов</th>
                <th scope="col">Общая выручка</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach ($reinteachers as $row) {?>
            <tr>
                <th scope="row"><?=$row['full_name_teacher']?></th>
                <td><?=$row['COUNT(client.ID_client)']?></td>
                <td><?=$row['COUNT(client.ID_client)*SUM(program.Price)']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>