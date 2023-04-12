<!-- Страница просмотра образовательной программы (для методиста)|Кузнецов -->
<div class="container">
    <h1 class="display-3 text-center mb-3">Образовательные программы</h1>

    <form class="mb-3" action="<?=base_url('program/add_program')?>" method="post">
        <div class="row g-3 mb-2">
            <div class="col-4">
                <label for="name_program" class="form-label">Название программы</label>
                <input type="text" class="form-control" name="name_program" required>
            </div>
            <div class="col-3">
                <label for="ID_category" class="form-label">Категория</label>

                <select class="form-select" name="ID_category" required>
                    <?php foreach ($category as $row) {?>
                        <option value="<?=$row['ID_category']?>"><?=$row['name_category']?></option>
                    <?php }?>
                </select>

            </div>
            <div class="col-3">
                <label for="ID_type" class="form-label">Вид</label>

                <select class="form-select" name="ID_type" required>
                    <?php foreach ($type as $row) {?>
                        <option value="<?=$row['ID_type']?>"><?=$row['name_type']?></option>
                    <?php }?>
                </select>

            </div>
            <div class="col-2">
                <label for="ID_form" class="form-label">Форма</label>

                <select class="form-select" name="ID_form" required>
                    <?php foreach ($form as $row) {?>
                        <option value="<?=$row['ID_form']?>"><?=$row['name_form']?></option>
                    <?php }?>
                </select>

            </div>
        </div>
        <div class="row g-3">
            <div class="col-2">
                <label for="ID_type_doc" class="form-label">Вид документа</label>

                <select class="form-select" name="ID_type_doc" required>
                    <?php foreach ($type_doc as $row) {?>
                        <option value="<?=$row['ID_type_doc']?>"><?=$row['name_doc']?></option>
                    <?php }?>
                </select>

            </div>
            <div class="col-3">
                <label for="ID_teacher" class="form-label">Преподаватель</label>

                <select class="form-select" name="ID_teacher" required>
                    <?php foreach ($teacher as $row) {?>
                        <option value="<?=$row['ID_teacher']?>"><?=$row['full_name_teacher']?></option>
                    <?php }?>
                </select>

            </div>
            <div class="col-2">
                <label for="price" class="form-label">Цена</label>
                <input type="number" class="form-control" name="price" step="0.01" min="0" max="999999.99" placeholder="0,00" required>
            </div>
            <div class="col-2 align-self-end">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </form>

    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#program').DataTable();
    });
    </script>

    <table id="program" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название программы</th>
                <th scope="col">Категория</th>
                <th scope="col">Вид</th>
                <th scope="col">Форма обучения</th>
                <th scope="col">Вид документа</th>
                <th scope="col">Преподаватель</th>
                <th scope="col">Цена</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($program as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_program']?></th>
                <td><?=$row['name_program']?></td>
                <td><?=$row['name_category']?></td>
                <td><?=$row['name_type']?></td>
                <td><?=$row['name_form']?></td>
                <td><?=$row['name_doc']?></td>
                <td><?=$row['full_name_teacher']?></td>
                <td><?=$row['price']?></td>
                <td>
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_program']?>">Изменить</button>

                    <!-- Модальное окно -->
                    <div class="modal fade" id="<?=$row['ID_program']?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение преподавателя</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>

                                <form class="row g-3 mb-3" action="<?=base_url('program/upd_program')?>" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="ID_program" value="<?=$row['ID_program']?>">
                                    <div class="mb-3">
                                        <label for="name_program" class="form-label">Название программы</label>
                                        <input type="text" class="form-control" name="name_program" value="<?=$row['name_program']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ID_category" class="form-label">Категория</label>

                                        <select class="form-select" name="ID_category" required>
                                            <?php foreach ($category as $row_modal) {
                                                if ($row['ID_category'] == $row_modal['ID_category']) {?>
                                                    <option value="<?=$row_modal['ID_category']?>" selected><?=$row_modal['name_category']?></option>
                                                <?php } else {?>
                                                    <option value="<?=$row_modal['ID_category']?>"><?=$row_modal['name_category']?></option>
                                                <?php }
                                            }?>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="ID_type" class="form-label">Вид</label>

                                        <select class="form-select" name="ID_type" required>
                                            <?php foreach ($type as $row_modal) {
                                                if ($row['ID_type'] == $row_modal['ID_type']) {?>
                                                    <option value="<?=$row_modal['ID_type']?>" selected><?=$row_modal['name_type']?></option>
                                                <?php } else {?>
                                                    <option value="<?=$row_modal['ID_type']?>"><?=$row_modal['name_type']?></option>
                                                <?php }
                                            }?>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="ID_form" class="form-label">Форма обучения</label>

                                        <select class="form-select" name="ID_form" required>
                                            <?php foreach ($form as $row_modal) {
                                                if ($row['ID_form'] == $row_modal['ID_form']) {?>
                                                    <option value="<?=$row_modal['ID_form']?>" selected><?=$row_modal['name_form']?></option>
                                                <?php } else {?>
                                                    <option value="<?=$row_modal['ID_form']?>"><?=$row_modal['name_form']?></option>
                                                <?php }
                                            }?>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="ID_type_doc" class="form-label">Вид документа</label>

                                        <select class="form-select" name="ID_type_doc" required>
                                            <?php foreach ($type_doc as $row_modal) {
                                                if ($row['ID_type_doc'] == $row_modal['ID_type_doc']) {?>
                                                    <option value="<?=$row_modal['ID_type_doc']?>" selected><?=$row_modal['name_doc']?></option>
                                                <?php } else {?>
                                                    <option value="<?=$row_modal['ID_type_doc']?>"><?=$row_modal['name_doc']?></option>
                                                <?php }
                                            }?>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="ID_teacher" class="form-label">Преподаватель</label>

                                        <select class="form-select" name="ID_teacher" required>
                                            <?php foreach ($teacher as $row_modal) {
                                                if ($row['ID_teacher'] == $row_modal['ID_teacher']) {?>
                                                    <option value="<?=$row_modal['ID_teacher']?>" selected><?=$row_modal['full_name_teacher']?></option>
                                                <?php } else {?>
                                                    <option value="<?=$row_modal['ID_teacher']?>"><?=$row_modal['full_name_teacher']?></option>
                                                <?php }
                                            }?>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Цена</label>
                                        <input type="number" class="form-control" name="price" step="0.01" min="0" max="999999.99" value="<?=$row['price']?>" placeholder="0,00" required>
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
                    <a href="<?=base_url('program/del_program?ID_program='.$row['ID_program'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>