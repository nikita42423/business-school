<!-- Страница просмотр графика курсов (для менеджера)|Пручковский -->
<div class="container">
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <h1>Графика курсов</h1>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="<?=base_url('manager/browse_add_record')?>"><button class="btn btn-primary">Назад</button></a>
</div>

<div class="container">
    <div class="container-fluid" style="margin-top:20px">

        <hr>
        Скрипт для пагинации
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
                    <th scope="col">Дата старта</th>
                    <th scope="col">Дата окончания</th>
                    <th scope="col">Макс. кол-во слушателей</th>
                    <th scope="col">Факт. кол-во слушателей</th>
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
                    
                    <!-- Триггер -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_schedule']?>">
                    Добавить запись
                    </button>

                    <div class="modal fade" id="<?=$row['ID_schedule']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalAddLabel1">Добавление записи №<?=$row['ID_schedule']?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>
                                <form action="<?=base_url('manager/add_record')?>" method="post">
                                    <div class="modal-body">
                                        <div class="p-4">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="schedule" required value="<?=$row['ID_schedule']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <select class="form-select" name="client">
                                                    <?php foreach ($client as $row) {?>
                                                    <option value="<?=$row['ID_client']?>"><?=$row['full_name_client']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="date" class="form-control" name="date_start" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <hr>
    </div>
</div>