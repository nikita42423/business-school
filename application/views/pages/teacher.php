<!-- Страница просмотра преподавателя (для методиста)|Кузнецов -->
<div class="container">
    <h1 class="display-3 text-center mb-3">Преподаватели</h1>
    <h1 class="display-6 text-center mb-3 text-success"><?=$this->session->userdata('msg')?></h1>

    <form class="mb-3" action="<?=base_url('teacher/add_teacher')?>" method="post">
        <div class="row g-3 mb-2">
            <div class="col-3">
                <label for="full_name_teacher" class="form-label">ФИО преподавателя</label>
                <input type="text" class="form-control" name="full_name_teacher" required>
            </div>
            <div class="col-2">
                <label for="position" class="form-label">Должность</label>
                <input type="text" class="form-control" name="position" required>
            </div>
            <div class="col-2">
                <label for="date_teacher" class="form-label">Дата рождения</label>
                <input type="date" class="form-control" name="date_teacher" required>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-3">
                <label for="work_exp" class="form-label">Стаж</label>
                <input type="text" class="form-control" name="work_exp" placeholder="1 год 1 месяц 1 день" required>
            </div>
            <div class="col-2">
                <label for="date_enter" class="form-label">Дата приёма</label>
                <input type="date" class="form-control" name="date_enter" required>
            </div>
            <div class="col-2 align-self-end">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </form>
    
    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#teacher').DataTable();
    });
    </script>

    <table id="teacher" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">ФИО преподавателя</th>
                <th scope="col">Должность</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Стаж</th>
                <th scope="col">Дата приёма</th>
                <th scope="col">Дата увольнения</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($teacher as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_teacher']?></th>
                <td><?=$row['full_name_teacher']?></td>
                <td><?=$row['position']?></td>
                <td><?=$row['date_teacher']?></td>
                <td><?=$row['work_exp']?></td>
                <td><?=$row['date_enter']?></td>
                <td><?=$row['date_leave']?></td>
                <td>
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_teacher']?>">Изменить</button>

                    <!-- Модальное окно -->
                    <div class="modal fade" id="<?=$row['ID_teacher']?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение преподавателя</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>

                                <form class="row g-3 mb-3" action="<?=base_url('teacher/upd_teacher')?>" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="ID_teacher" value="<?=$row['ID_teacher']?>">
                                    <div class="mb-2">
                                        <label for="full_name_teacher" class="form-label">ФИО преподавателя</label>
                                        <input type="text" class="form-control" name="full_name_teacher" value="<?=$row['full_name_teacher']?>" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="position" class="form-label">Должность</label>
                                        <input type="text" class="form-control" name="position" value="<?=$row['position']?>" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="date_teacher" class="form-label">Дата рождения</label>
                                        <input type="date" class="form-control" name="date_teacher" value="<?=$row['date_teacher']?>" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="work_exp" class="form-label">Стаж</label>
                                        <input type="text" class="form-control" name="work_exp" value="<?=$row['work_exp']?>" placeholder="1 год 1 месяц 1 день" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="date_enter" class="form-label">Дата приёма</label>
                                        <input type="date" class="form-control" name="date_enter" value="<?=$row['date_enter']?>" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="date_leave" class="form-label">Дата увольнения</label>
                                        <input type="date" class="form-control" name="date_leave" value="<?=$row['date_leave']?>">
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
                    <a href="<?=base_url('teacher/del_teacher?ID_teacher='.$row['ID_teacher'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>