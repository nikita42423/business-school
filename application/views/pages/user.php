<!-- Страница пользователи (для менеджера)|Пручковский -->
<div class="container">
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <h1>Пользователи</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid" style="margin-top:20px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd1">
                Добавить пользователя
                </button>

                <!-- Модальное окно -->
                <div class="modal fade" id="modalAdd1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalAddLabel1">Добавление пользователя</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <form action="<?=base_url('manager/add_user')?>" method="post">
                            <div class="modal-body">
                                <div class="p-4">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <input type="text" class="form-control" name="fio" placeholder="ФИО" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                        <select class="form-select" name="position">
                                            <option value="Директор">Директор</option>
                                            <option value="Менеджер">Менеджер</option>
                                            <option value="Методист">Методист</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                        <input type="text" class="form-control" name="login" placeholder="Логин" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                                        <input type="text" class="form-control" name="password" placeholder="Пароль" required>
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
            $('#user').DataTable();
        });
        </script>

        <table id="user" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Должность</th>
                    <th scope="col">Логин</th>
                    <th scope="col">Пароль</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $row) {?>
                <tr>
                    <th scope="row"><?=$row['ID_user']?></th>
                    <td><?=$row['full_name_user']?></td>
                    <td><?=$row['position']?></td>
                    <td><?=$row['login']?></td>
                    <td><?=$row['password']?></td>
                    <td>

                    <!-- Триггер -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_user']?>">
                    Изменить
                    </button>

                    <div class="modal fade" id="<?=$row['ID_user']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalAddLabel1">Редактирование пользователя №<?=$row['ID_user']?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>
                                <form action="<?=base_url('manager/upd_user')?>" method="post">
                                    <div class="modal-body">
                                        <div class="p-4">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="ID_user" placeholder="ФИО" required value="<?=$row['ID_user']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="fio" placeholder="ФИО" required value="<?=$row['full_name_user']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <select class="form-select" name="position">
                                                    <option value="<?=$row['position']?>"><?=$row['position']?></option>
                                                    <option value="Директор">Директор</option>
                                                    <option value="Менеджер">Менеджер</option>
                                                    <option value="Методист">Методист</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                                <input type="text" class="form-control" name="login" placeholder="Логин" required value="<?=$row['login']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                                                <input type="text" class="form-control" name="password" placeholder="Пароль" required value="<?=$row['password']?>">
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
                    <form action="<?=base_url('manager/del_user')?>" method="post">
                        <button class="btn btn-outline-danger" name="ID_user" value="<?=$row['ID_user']?>">Удалить</button></td>
                    </form>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <hr>
    </div>
</div>