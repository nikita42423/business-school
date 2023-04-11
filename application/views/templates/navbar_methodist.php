<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-2" src="<?=asset_url()?>/img/logo.png" alt="" width="50%" height="100%">
            <p>Добро пожаловать! Администратор<b><br><?=$session['full_name_user']?></b></p>
        </a>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ифнормация
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?=base_url('methodist/browse_category')?>">Справочная информация</a></li>
                    <li><a class="dropdown-item" href="<?=base_url('methodist/browse_teacher')?>">Преподаватели</a></li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Образование
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?=base_url('methodist/browse_program')?>">Образовательные программы</a></li>
                    <li><a class="dropdown-item" href="<?=base_url('methodist/browse_schedule_methodist')?>">График курсов</a></li>
                </ul>
            </li>
        </ul>
        <div class="col-md-3 text-end">
        <a href="<?=base_url('main/kill_all_session')?>" class="nav-link px-2 link-dark"> <button type="button" class="btn btn-outline-primary me-2">ВЫЙТИ</button></a> 
        </div>
    </header>
</div>