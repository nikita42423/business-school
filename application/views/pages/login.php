<!-- Страница авторизации|Кузнецов -->
<div class="container">
    <div class="container-fluid" style="margin-top:80px">
        <div class="">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center mb-3">
                        <img class="bi me-2" src="<?=asset_url()?>/img/logo.png" alt="" width="50%" height="100%">
                    </div>
                    <div class="text-center">
                        <h3 class="text-primary">АВТОРИЗАЦИЯ</h3>
                    </div>
                    <form action="<?=base_url('main/log_action')?>" method="POST">
                        <div class="p-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i class="bi bi-person-fill text-white"></i></span>
                                <input type="text" class="form-control" name="login" placeholder="Логин">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-primary"><i
                                        class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Пароль">
                            </div>
                            <div style="text-align: center;">
                            <button class="btn btn-primary text-center mt-2" type="submit">
                                ВОЙТИ
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-5">
                <h1 class="display-6 text-danger"><?=$this->session->userdata('msg')?></h1>
            </div>
        </div>
    </div>
</div>