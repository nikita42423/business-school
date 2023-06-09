<div class="container">
    <ul class="nav nav-tabs mb-4">

        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('director/browse_diretor')?>">Рейтинг преподавателей</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('director/browse_diretor_prog')?>">Рейтинг программ обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('director/browse_otchuslformobus')?>">Отчет об объемах услуг по формам обучения</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="<?=base_url('director/browse_spicslusprog')?>">Список слушателей по выбранный программе</a>
        </li>
        
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <form class="row g-3 needs-validation" novalidate method="POST" action="<?=base_url('director/browse_spicslusprog')?>">

            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Программа обучения</label>
                <select class="form-select" id="validationCustom04" name="ID_program">
                    <option value="all">Все</option>
                    <?php foreach ($prog as $row) { ?>
                    
                        <option value="<?=$row['ID_program']?>"><?=$row['name_program']?></option>
                    
                    <?php } ?>
     
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Период с</label>
                <input type="date" class="form-control" id="validationCustom01" required name="date1">
            </div>
            <div class="col-md-3">
                <label for="validationCustom02" class="form-label">по</label>
                <input type="date" class="form-control" id="validationCustom02" required name="date2">
            </div>
            <div class="col-md-2 align-self-end" style="padding-top: 3%;">
                <div class="hstack gap-3">
                <button class="btn btn-primary" type="submit">поиск</button>
                <a href="<?=base_url('director/browse_spicslusprog')?>"><button class="btn btn-primary" type="submit">Очистить</button></a>

                </div>
            </div>
            </form>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <!-- Скрипт для пагинации -->
    <script>
    $(document).ready(function () {
        $('#reintch').DataTable();
    });
    </script>

    <table id="reintch" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ФИО слушателей</th>
                <th scope="col">Название программы</th>
                <th scope="col">Категория</th>
                <th scope="col">Дата начало</th>
                <th scope="col">Дата окончания</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach ($spick as $row) {?>
            <tr>
                <td scope="row"><?=$row['full_name_client']?></td>
                <td scope="row"><?=$row['name_program']?></td>
                <td scope="row"><?=$row['name_category']?></td>
                <td><?=$row['date_start_s']?></td>
                <td><?=$row['date_end_s']?></td>
      
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>