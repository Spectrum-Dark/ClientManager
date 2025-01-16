<?php
require_once('./Models/conecction.php');

// Controlador para manejar la eliminación de usuarios
if (isset($_GET['deleteuser'])) {
    Delete_User_ID((int)$_GET['deleteuser']);
}

function GetAllClient()
{
    // Abrimos la conexión
    $Mysql = new MySQLDatabase();
    $Mysql->open_connection();

    // Ejecutamos el procedimiento almacenado y obtenemos los resultados
    if ($result = $Mysql->query('CALL `ShowClients`')) {
        // Iteramos por cada fila y generamos las filas de la tabla
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['id_client']) . '</td>';
            echo '<td>' . htmlspecialchars($row['name_client']) . '</td>';
            echo '<td>' . htmlspecialchars($row['phone']) . '</td>';
            echo '<td>' . htmlspecialchars($row['service_type']) . '</td>';
            echo '<td>' . htmlspecialchars($row['username_client']) . '</td>';
            echo '<td>' . htmlspecialchars($row['password_client']) . '</td>';
            echo '<td>' . htmlspecialchars($row['start_date']) . '</td>';
            echo '<td>' . htmlspecialchars($row['start_month']) . '</td>';
            echo '<td>' . htmlspecialchars($row['end_date']) . '</td>';
            echo '<td>' . htmlspecialchars($row['end_month']) . '</td>';
            echo '<td>' . htmlspecialchars($row['monthly_payment']) . '</td>';
            echo '<td>
                    <div class="buttons-table">
                        <a class="action-table-button button-edit" href="?action=updateclient&byID=' . urlencode($row['id_client']) . '"></a>
                        <a class="action-table-button button-delete" href="?action=allclient&deleteuser=' . urlencode($row['id_client']) . '"></a>
                    </div>
                  </td>';
            echo '</tr>';
        }

        // Libera el conjunto de resultados para evitar duplicados en consultas futuras
        $result->free();
    } else {
        // En caso de error o si no hay datos
        echo '<tr><td colspan="12">No se encontraron datos</td></tr>';
    }

    // Cerramos la conexión
    $Mysql->close_connection();
}


function GetClient_ID()
{
    if (isset($_GET['byID'])) {
        $byID = $_GET['byID'];
        if ($byID != null || $byID != '') {
            $Client = array();

            //Abrimos la conexion
            $Mysql = new MySQLDatabase();
            $Mysql->open_connection();

            $result =  $Mysql->query("CALL SearchClient_ID('$byID')");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $Client = $row;
                }
            }

            return $Client;
        }
    } else {
        $Client = $Client ?? [];
        return $Client;
    }
}

function InsertClient()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recorrer todos los datos enviados por el formulario
        $Data = [];
        foreach ($_POST as $key => $value) {
            $Data[$key] = $value;
        }

        if (isset($Data['insert']) == "sucess") {

            $Mysql = new MySQLDatabase();
            $Mysql->open_connection();

            // Asignar variables a partir del arreglo $Data
            $p_id_client = isset($Data['id_client']) ? (int) $Data['id_client'] : null;
            $p_name_client = $Data['name_client'] ?? null;
            $p_phone = $Data['phone'] ?? null;
            $p_service_type = $Data['service_type'] ?? null;
            $p_username_client = $Data['username_client'] ?? null;
            $p_password_client = $Data['pin_client'] ?? null;
            $p_start_date = $Data['start_date'] ?? null;
            $p_start_month = $Data['start_month'] ?? null;
            $p_end_date = $Data['end_date'] ?? null;
            $p_end_month = $Data['end_month'] ?? null;
            $p_monthly_payment = $Data['monthly_payment'] ?? 0;

            if ($p_service_type == 'netflix') {
                $p_monthly_payment = 120;
            } elseif ($p_service_type == 'hbomax') {
                $p_monthly_payment = 100;
            } else {
                $p_monthly_payment = 60;
            }

            // Construir la llamada al procedimiento almacenado
            $SQL = sprintf(
                "CALL InsertClient('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %d)",
                $Mysql->escape_value($p_name_client),
                $Mysql->escape_value($p_phone),
                $Mysql->escape_value($p_service_type),
                $Mysql->escape_value($p_username_client),
                $Mysql->escape_value($p_password_client),
                $Mysql->escape_value($p_start_date),
                $Mysql->escape_value($p_start_month),
                $Mysql->escape_value($p_end_date),
                $Mysql->escape_value($p_end_month),
                (int)$p_monthly_payment
            );


            /* Realizamos actualizacion */
            $Mysql->query($SQL);

            $Mysql->close_connection();
        }
    }
}

function Update_Client_ID()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Recorrer todos los datos enviados por el formulario
        $Data = [];
        foreach ($_GET as $key => $value) {
            $Data[$key] = $value;
        }

        if (isset($Data['update']) == "send") {

            $Mysql = new MySQLDatabase();
            $Mysql->open_connection();

            // Asignar variables a partir del arreglo $Data
            $p_id_client = isset($Data['id_client']) ? (int) $Data['id_client'] : null;
            $p_name_client = $Data['name_client'] ?? null;
            $p_phone = $Data['phone'] ?? null;
            $p_service_type = $Data['service_type'] ?? null;
            $p_username_client = $Data['username_client'] ?? null;
            $p_password_client = $Data['pin_client'] ?? null;
            $p_start_date = $Data['start_date'] ?? null;
            $p_start_month = $Data['start_month'] ?? null;
            $p_end_date = $Data['end_date'] ?? null;
            $p_end_month = $Data['end_month'] ?? null;
            $p_monthly_payment = $Data['monthly_payment'] ?? 0;

            if ($p_service_type == 'netflix') {
                $p_monthly_payment = 120;
            } elseif ($p_service_type == 'hbomax') {
                $p_monthly_payment = 100;
            } else {
                $p_monthly_payment = 60;
            }

            // Construir la llamada al procedimiento almacenado
            $SQL = sprintf(
                "CALL UpdateClient(%d, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %d)",
                (int)$p_id_client,
                $Mysql->escape_value($p_name_client),
                $Mysql->escape_value($p_phone),
                $Mysql->escape_value($p_service_type),
                $Mysql->escape_value($p_username_client),
                $Mysql->escape_value($p_password_client),
                $Mysql->escape_value($p_start_date),
                $Mysql->escape_value($p_start_month),
                $Mysql->escape_value($p_end_date),
                $Mysql->escape_value($p_end_month),
                (int)$p_monthly_payment
            );

            /* Realizamos actualizacion */
            $Mysql->query($SQL);

            $Mysql->close_connection();
        }
    }
}

function Delete_User_ID()
{
    // Asegúrate de que no haya salida previa
    if (isset($_GET['deleteuser'])) {
        $id = (int)$_GET['deleteuser'];

        $Mysql = new MySQLDatabase();
        $Mysql->open_connection();
        $p_id_client = $id;

        $SQL = sprintf(
            "CALL DeleteClient(%d)",
            (int)$p_id_client
        );

        $Mysql->query($SQL);
        $Mysql->close_connection();
    }
}
