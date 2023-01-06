<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/todo/todo.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/sweetalert2.min.css" />

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/login/login.css" />

    <title>ADMINISTRADOR-CONTRASEÑAS</title>
</head>

<body>
    <section id="contenedor_login">
        <div class="contenedor_login-fondo">
            <img class="contenedor_login-fondo-img" src="<?= BASE_URL ?>/assets/img/login/wallpaper_login.jpg" alt="" />
        </div>
        <div class="contenedor_login-formulario bg-light rounded p-4">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="formulario-tutulo">
                            <h2>ADMINISTRADOR</h2>
                            <h6>CONTRASEÑAS</h6>
                        </div>
                        <form method="POST" id="formulario">
                            <div class="formulario_inputs">
                                <input class="formulario_inputs-inp" type="text" name="user" id="user" placeholder="Username" autocomplete="off" />
                                <input class="formulario_inputs-inp" type="password" name="password" id="password" placeholder="Password" autocomplete="off" />
                            </div>
                            <div>
                                <button type="submit" class="my-4 btn btn-outline-primary" style="font-weight: 900">
                                    INGRESAR<i class="fa-solid fa-right-to-bracket ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <img class="contenedor_login-formulario-img" src="./assets/img/login/login.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= BASE_URL ?>/assets/js/login/login.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/all.min.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>