<!-- Страница запись клиента на обучение (для менеджера)|Пручковский -->
<div class="container">
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('manager/browse_record')?>">Записи клиента на обучение</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('manager/browse_add_record')?>">Новая запись клиента на обучение</a>
        </li>

    </ul>
    <div class="container-fluid" style="margin-top:20px">
        Скрипт для пагинации
        <script>
            $(document).ready(function () {
            $('#teaching').DataTable();
        });
        </script>

        <table id="teaching" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">График курсов</th>
                    <th scope="col">Клиент</th>
                    <th scope="col">Дата начала</th>
                    <th scope="col">Дата конца</th>
                    <th scope="col">Номер документа</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teaching as $row) {?>
                <tr>
                    <th scope="row"><?=$row['ID_teaching']?></th>
                    <td><?=$row['name_program']?></td>
                    <td><?=$row['full_name_client']?></td>
                    <td><?=$row['date_start_t']?></td>
                    <td><?=$row['date_end_t']?></td>
                    <td><?=$row['number_doc']?></td>
                    <td>

                    <!-- Триггер -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_teaching']?>" <?php if (!empty($row['date_end_t'])){echo 'disabled';}?>>
                    Отметка об окончания
                    </button>

                    <div class="modal fade" id="<?=$row['ID_teaching']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalAddLabel1">Изменение записи №<?=$row['ID_teaching']?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>
                                <form action="<?=base_url('manager/otm_record')?>" method="post">
                                    <div class="modal-body">
                                        <div class="p-4">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="teaching" placeholder="ID" required value="<?=$row['ID_teaching']?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="text" class="form-control" name="number" placeholder="Номер документа" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-primary"><i class="bi bi-person-vcard text-white"></i></span>
                                                <input type="date" class="form-control" name="date_end_t" required>
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