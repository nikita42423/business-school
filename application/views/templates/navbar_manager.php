<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-2" src="<?=asset_url()?>/img/logo.png" alt="" width="50%" height="100%">
            <p>Добро пожаловать! Менеджер<b><br><?=$session['full_name_user']?></b></p>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?=base_url('manager/browse_record')?>" class="nav-link active">Запись клиента на обучение</a></li>
            <li><a href="<?=base_url('client/browse_client')?>" class="nav-link active">Регистрация клиента</a></li>            
        </ul>
        <div class="col-md-3 text-end">
        <a href="<?=base_url('main/kill_all_session')?>" class="nav-link px-2 link-dark"> <button type="button" class="btn btn-outline-primary me-2">ВЫЙТИ</button></a> 
        </div>
    </header>
</div>