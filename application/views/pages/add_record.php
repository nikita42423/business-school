<!-- Страница новая запись клиента на обучение (для менеджера)|Пручковский -->
<div class="container">
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('manager/browse_record')?>">Записи клиента на обучение</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('manager/browse_add_record')?>">Новая запись клиента на обучение</a>
        </li>

    </ul>
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <form action="<?=base_url('manager/browse_add_record')?>" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="category">
                                <label class="form-check-label" for="exampleCheck1">Категория</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <select class="form-select" name="ID_category">
                                        <?php foreach ($category as $row) {?>
                                        <option value="<?=$row['ID_category']?>"><?=$row['name_category']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="type">
                                <label class="form-check-label" for="exampleCheck1">Вид</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <select class="form-select" name="ID_type">
                                        <?php foreach ($type as $row) {?>
                                        <option value="<?=$row['ID_type']?>"><?=$row['name_type']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="from">
                                <label class="form-check-label" for="exampleCheck1">Форма обучения</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <select class="form-select" name="ID_form">
                                        <?php foreach ($form as $row) {?>
                                        <option value="<?=$row['ID_form']?>"><?=$row['name_form']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="num">
                                <label class="form-check-label" for="exampleCheck1">Макс. стоимость</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                    <input type="text" class="form-control" name="number" placeholder="Макс. стоимость">
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <button type="submit" class="btn btn-primary">Поиск</button>
                                <a href="<?=base_url('manager/browse_add_record')?>"><button type="submit" class="btn btn-danger">Очистить</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
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
                    <th scope="col">Цена</th>
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
                    <td><?=$row['price']?></td>
                    <td>
                    <form action="<?=base_url('manager/browse_schedule')?>" method="post">
                        <button class="btn btn-primary" name="ID_program" value="<?=$row['ID_program']?>">Выбрать</button>
                    </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <hr>
    </div>
</div>