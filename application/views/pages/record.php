<!-- Страница запись клиента на обучение (для менеджера)|Пручковский -->
<div class="container">
    <div class="container-fluid" style="margin-top:40px">
        <div class="" style="margin-top:100">
            <div class="rounded d-flex justify-content-center">
                <h1>Записи клиента на обучение</h1>
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
                        <div class="text-center">
                            <p><h1 class="modal-title fs-5" id="modalAddLabel1">Добавление записи клиента на обучение</h1></p>
                            <a href="<?=base_url('record/browse_add_record')?>"><button type="submit" class="btn btn-primary">Добавить запись</button></a>
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
                        <form action="<?=base_url('record/otm_record')?>" method="post">
                            <button class="btn btn-primary" name="ID_program" value="<?=$row['ID_program']?>" 
                            <?php if (!empty($row['date_end_t'])){echo 'disabled';}?>>Отметка об окончания</button></td>
                        </form>
                    </td>             
                </tr>
                <?php }?>
            </tbody>
        </table>
        <hr>
    </div>
</div>