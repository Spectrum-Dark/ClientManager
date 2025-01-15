<?php require_once('./Models/navegation.php'); require_once('./Models/functions.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Clientes</title>
    <link rel="stylesheet" href="./Assets/Css/style.css">
    <script defer src="./Assets/Js/index.js"></script>
    <link rel="shortcut icon" href="./Assets/Icons/anonymous.png" type="image/x-icon">
</head>

<body>
    <!-- Panel pandre -->
    <div class="container">
        <!-- Panel hijo izquierdo -->
        <div class="panel_actions">
            <!-- Panel subhijo Superior -->
            <div class="info_admin">
                <!-- Imagen de streaming -->
                <img class="logotype" src="./Assets/Icons/streaming.jpg" alt="streaming account">
            </div>
            <!-- Panel hijo de acciones (botones) -->
            <div class="action_admin">
                <!-- botones -->
                <div class="action_contain">
                    <a class="button add-user" href="?action=newclient">Nuevo Cliente</a>
                </div>
                <div class="action_contain">
                    <a class="button show-users" href="?action=allclient">Mostrar Cliente</a>
                </div>
            </div>
        </div>

        <div class="panel_views">
            <!-- Implementamos la vistas de la app -->
            <?php ViewModel(); ?>
        </div>
    </div>
</body>

</html>