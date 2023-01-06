<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/todo/todo.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/dashborad/dashboard.css" />

    <title>ADMINISTRADOR-CONTRASEÑAS</title>
</head>

<body>
    <nav class="menu">
        <div class="menu-titulo">
            <h1>Gestor</h1>
        </div>
        <div class="menu_cerrar-sesion">
            <a href="<?= BASE_URL . 'cerrarsesion' ?>">Cerrar Sesi&oacute;n</a>
        </div>
    </nav>
    <section class="dashboard">
        <div class="dashborad_fondo">
            <img class="dashborad_fondo-img" src="./assets/img/dashboard/bg_dashboard.png" alt="" />
        </div>
        <div class="container bg-white rounded">
            <div class="d-flex justify-content-between align-items-center ps-2">
                <div class="contenedor_titulo">
                    <h1>Administrador de Contraseñas</h1>
                </div>
                <div>
                    <form action="" id="formularioBuscar" method="POST">
                        <input type="search" class="form-control" name="buscador" id="buscador" placeholder="buscar" />
                    </form>
                </div>
            </div>
            <div class="contenedor_tabla">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">P&aacute;gina</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pasword</th>
                        </tr>
                    </thead>
                    <tbody id="listarDatos">
                        <?php
                        foreach ($data['cuentas'] as $cuenta) : ?>
                            <tr>
                                <td scope="row"><?= $cuenta->ID_CUENTA ?></td>
                                <td><?= $cuenta->PAGINA ?></td>
                                <td><?= $cuenta->EMAIL ?></td>
                                <td><?= $cuenta->PASSWORD ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script src="<?= BASE_URL ?>/assets/js/all.min.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/funcionalidad.js"></script>
</body>

</html>