<!-- Страница добавление записи клиента на обучение (для менеджера)|Пручковский -->
<div class="container">
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <h1>Добавление записи клиента на обучение</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <select class="form-select" name="pol">
                                        <?php foreach ($category as $row) {?>
                                        <option value="<?=$row['ID_category']?>"><?=$row['name_category']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <select class="form-select" name="pol">
                                        <?php foreach ($type as $row) {?>
                                        <option value="<?=$row['ID_type']?>"><?=$row['name_type']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <select class="form-select" name="pol">
                                        <?php foreach ($form as $row) {?>
                                        <option value="<?=$row['ID_form']?>"><?=$row['name_form']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <input type="text" class="form-control" name="fio" placeholder="Макс. стоимость" required>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Поиск</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid" style="margin-top:20px">
        Скрипт для пагинации
        <script>
            $(document).ready(function () {
            $('#record').DataTable();
        });
        </script>

        <table id="record" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Название программы</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Вид</th>
                    <th scope="col">Форма обучения</th>
                    <th scope="col">Вид документа</th>
                    <th scope="col">Преподаватель</th>
                    <th scope="col">Кол-во часов</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($record as $row) {?>
                <tr>
                    <th scope="row"><?=$row['ID_program']?></th>
                    <td><?=$row['name_program']?></td>
                    <td><?=$row['name_category']?></td>
                    <td><?=$row['name_type']?></td>
                    <td><?=$row['name_form']?></td>
                    <td><?=$row['name_doc']?></td>
                    <td><?=$row['full_name_teacher']?></td>
                    <td><?=$row['count_hour']?></td>
                    <td>

                    <!-- Триггер -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_client']?>">
                    Выбрать
                    </button>

                    <div class="modal fade" id="<?=$row['ID_client']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalAddLabel1">Добавление записи</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>
                                <form action="<?=base_url('client/upd_client')?>" method="post">
                                    <div class="modal-body">
                                        <div class="p-4">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="ID_client" required value="<?=$row['ID_client']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="fio" placeholder="ФИО" required value="<?=$row['full_name_client']?>">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                        <input type="date" class="form-control" name="date" placeholder="Дата рождения" required value="<?=$row['date_client']?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                        <select class="form-select" name="pol">
                                                            <option value="<?=$row['pol']?>" selected><?=$row['pol']?></option>
                                                            <option value="М">М</option>
                                                            <option value="Ж">Ж</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                        <input type="text" class="form-control" name="serie" placeholder="Серия паспорт" required value="<?=$row['series']?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                        <input type="text" class="form-control" name="number" placeholder="Номер паспорт" required value="<?=$row['passport_number']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="adress" placeholder="Адрес" required value="<?=$row['address']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <select class="form-select" name="education">
                                                    <option value="<?=$row['education']?>" selected><?=$row['education']?></option>
                                                    <option value="нет">нет</option>
                                                    <option value="начальное профессиональное">начальное профессиональное</option>
                                                    <option value="среднее профессиональное">среднее профессиональное</option>
                                                    <option value="высшее профессиональное">высшее профессиональное</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="tel" placeholder="Телефон" required value="<?=$row['phone']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?=$row['email']?>">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                        <button type="submit" class="btn btn-primary">Изменяться</button>
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
    </div>
</div>