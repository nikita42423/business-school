<!-- Страница просмотра графика курсов (для методиста)|Кузнецов -->
<div class="container">
    <h1 class="display-3 text-center mb-3">График курсов</h1>

    <form class="row g-3 mb-3" action="<?=base_url('schedule/add_schedule')?>" method="post">
        <div class="col-4">
            <label for="ID_program" class="form-label">Название программы</label>

            <select class="form-select" name="ID_program" required>
                <?php foreach ($program as $row) {?>
                    <option value="<?=$row['ID_program']?>"><?=$row['name_program']?></option>
                <?php }?>
            </select>

        </div>
        <div class="col-2">
            <label for="date_start_s" class="form-label">Дата начала</label>
            <input type="date" class="form-control" name="date_start_s" required>
        </div>
        <div class="col-2">
            <label for="date_end_s" class="form-label">Дата конца</label>
            <input type="date" class="form-control" name="date_end_s" required>
        </div>
        <div class="col-2">
            <label for="max_count_listener" class="form-label">Макс. кол-во слушателей</label>
            <input type="number" class="form-control" name="max_count_listener" min="0" required>
        </div>
        <div class="col-2 align-self-end">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#schedule').DataTable();
    });
    </script>

    <table id="schedule" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название программы</th>
                <th scope="col">Дата начала</th>
                <th scope="col">Дата конца</th>
                <th scope="col">Максимальное кол-во слушателей</th>
                <th scope="col">Текущее кол-во слушателей</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($schedule as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_schedule']?></th>
                <td><?=$row['name_program']?></td>
                <td><?=$row['date_start_s']?></td>
                <td><?=$row['date_end_s']?></td>
                <td><?=$row['max_count_listener']?></td>
                <td><?=$row['actual_count_listener']?></td>
                <td>
                    <a href="" class="btn btn-primary">Изменить</a>
                </td>
                <td>
                    <a href="<?=base_url('schedule/del_schedule?ID_schedule='.$row['ID_schedule'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>