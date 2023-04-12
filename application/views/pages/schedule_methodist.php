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
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_schedule']?>">Изменить</button>

                    <!-- Модальное окно -->
                    <div class="modal fade" id="<?=$row['ID_schedule']?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение графика курсов</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>

                                <form class="row g-3 mb-3" action="<?=base_url('schedule/upd_schedule')?>" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="ID_schedule" value="<?=$row['ID_schedule']?>">
                                    <div class="mb-3">
                                        <label for="ID_program" class="form-label">Название программы</label>
                                        <select class="form-select" name="ID_program" readonly>
                                            <option value="<?=$row['ID_program']?>" selected><?=$row['name_program']?></option>
                                        </select>
                                        <div id="emailHelp" class="form-text">Тут нельзя изменить.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="date_start_s" class="form-label">Дата начала</label>
                                        <input type="date" class="form-control" name="date_start_s" value="<?=$row['date_start_s']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="date_end_s" class="form-label">Дата конца</label>
                                        <input type="date" class="form-control" name="date_end_s" value="<?=$row['date_end_s']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="max_count_listener" class="form-label">Макс. кол-во слушателей</label>
                                        <input type="number" class="form-control" name="max_count_listener" min="0" value="<?=$row['max_count_listener']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="actual_count_listener" class="form-label">Текущее кол-во слушателей</label>
                                        <input type="number" class="form-control" name="actual_count_listener" min="0" value="<?=$row['actual_count_listener']?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="<?=base_url('schedule/del_schedule?ID_schedule='.$row['ID_schedule'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>