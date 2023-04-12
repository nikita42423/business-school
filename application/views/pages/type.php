<!-- Страница просмотра вида (для методиста)|Кузнецов -->
<div class="container">
    <h1 class="display-3 text-center mb-3">Справочная информация</h1>
    <h1 class="display-6 text-center mb-3 text-success"><?=$this->session->userdata('msg')?></h1>
    
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_category')?>">Категория</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('methodist/browse_type')?>">Вид</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_form')?>">Форма обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url('methodist/browse_type_doc')?>">Вид документа</a>
        </li>

    </ul>

    <form class="row g-3 mb-3" action="<?=base_url('type/add_type')?>" method="post">
        <div class="col-auto">
            <input type="text" readonly class="form-control-plaintext" value="Название вида">
        </div>
        <div class="col-auto">
            <input type="text" name="name_type" class="form-control" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#type').DataTable();
    });
    </script>

    <table id="type" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название вида</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($type as $row) {?>
            <tr>
                <th scope="row"><?=$row['ID_type']?></th>
                <td><?=$row['name_type']?></td>
                <td>
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$row['ID_type']?>">Изменить</button>

                    <!-- Модальное окно -->
                    <div class="modal fade" id="<?=$row['ID_type']?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Изменение вида</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                </div>

                                <form class="row g-3 mb-3" action="<?=base_url('type/upd_type')?>" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="ID_type" value="<?=$row['ID_type']?>">
                                    <div>
                                        <label for="name_type" class="form-label">Название вида</label>
                                        <input type="text" name="name_type" class="form-control" value="<?=$row['name_type']?>" required>
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
                    <a href="<?=base_url('type/del_type?ID_type='.$row['ID_type'])?>" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>