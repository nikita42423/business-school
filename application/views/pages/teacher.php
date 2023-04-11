<!-- Страница просмотра преподавателя (для методиста)|Кузнецов -->
<div class="container">
    <h1 class="display-3 text-center mb-3">Преподаватели</h1>

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
                    <a href="" class="btn btn-primary">Изменить</a>
                </td>
                <td>
                    <a href="<?=base_url('teacher/del_teacher?ID_teacher='.$row['ID_teacher'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>