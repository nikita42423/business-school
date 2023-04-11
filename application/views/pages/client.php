<!-- Страница регистрация клиента (для менеджера)|Пручковский -->
<div class="container">
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <h1>Регистрация клиента</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid" style="margin-top:20px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd1">
                Добавить клиента
                </button>

                <!-- Модальное окно -->
                <div class="modal fade" id="modalAdd1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalAddLabel1">Добавление клиента</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <form action="<?=base_url('manager/add_client')?>" method="post">
                            <div class="modal-body">
                                <div class="p-4">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <input type="text" class="form-control" name="fio" placeholder="ФИО" required>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="date" class="form-control" name="date" placeholder="Дата рождения" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <select class="form-select" name="pol">
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
                                                <input type="text" class="form-control" name="serie" placeholder="Серия паспорт" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="number" placeholder="Номер паспорт" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <input type="text" class="form-control" name="adress" placeholder="Адрес" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <select class="form-select" name="education">
                                            <option value="Нет">Нет</option>
                                            <option value="Начальное профессиональное">Начальное профессиональное</option>
                                            <option value="Среднее профессиональное">Среднее профессиональное</option>
                                            <option value="Высшее профессиональное">Высшее профессиональное</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <input type="text" class="form-control" name="tel" placeholder="Телефон" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                <button type="submit" class="btn btn-primary">Зарегистроваться</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid" style="margin-top:20px">
        <hr>
        Скрипт для пагинации
        <script>
            $(document).ready(function () {
            $('#client').DataTable();
        });
        </script>

        <table id="client" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">Серия</th>
                    <th scope="col">Номер паспорт</th>
                    <th scope="col">Образование</th>
                    <th scope="col">Пол</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Электронная почта</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client as $row) {?>
                <tr>
                    <th scope="row"><?=$row['ID_client']?></th>
                    <td><?=$row['full_name_client']?></td>
                    <td><?=$row['date_client']?></td>
                    <td><?=$row['series']?></td>
                    <td><?=$row['passport_number']?></td>
                    <td><?=$row['education']?></td>
                    <td><?=$row['pol']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['address']?></td>
                    <td><?=$row['email']?></td>
                    <td>

                    <!-- Триггер -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_client']?>">
                    Изменить
                    </button>

                    <div class="modal fade" id="<?=$row['ID_client']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalAddLabel1">Редактирование клиента №<?=$row['ID_client']?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>
                                <form action="<?=base_url('manager/upd_client')?>" method="post">
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
                    <td>
                    <form action="<?=base_url('manager/del_client')?>" method="post">
                        <button class="btn btn-outline-danger" name="ID_client" value="<?=$row['ID_client']?>">Удалить</button></td>
                    </form>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <hr>
    </div>
</div>