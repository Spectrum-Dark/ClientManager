<?php $Client = GetClient_ID(); ?>
<div class="form-container">
    <form id="client-form" method="get">
        <div class="form-row">
            <div class="form-group">
                <input type="text" name="action" value="updateclient" hidden>
                <label for="id_client">ID Cliente</label>
                <input type="number" id="id_client" name="id_client" value="<?php if (isset($Client['id_client'])) echo $Client['id_client'] ?>" readonly />
            </div>
            <div class="form-group">
                <label for="name_client">Nombre</label>
                <input type="text" id="name_client" name="name_client" value="<?php if (isset($Client['id_client'])) echo $Client['name_client'] ?>" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" name="phone" value="<?php if (isset($Client['id_client'])) echo $Client['phone'] ?>" required />
            </div>
            <div class="form-group">
                <label for="service_type">Tipo de Servicio</label>
                <select id="service_type" name="service_type" required>
                    <option value="<?php $option = "";
                                    if (isset($Client['id_client'])) {
                                        echo $Client['service_type'];
                                    } else {
                                        $option = "hidden";
                                    } ?>" <?php if ($option != "") echo $option ?>>Default</option>
                    <option value="netflix">Netflix</option>
                    <option value="hbomax">HBO Max</option>
                    <option value="crunchyroll">Crunchyroll</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="username_client">Usuario</label>
                <input type="text" id="username_client" name="username_client" value="<?php if (isset($Client['id_client'])) echo $Client['username_client'] ?>" required />
            </div>
            <div class="form-group">
                <label for="password_client">Contraseña</label>
                <input type="text" id="password_client" name="pin_client" value="<?php if (isset($Client['id_client'])) echo $Client['password_client'] ?>" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="start_date">Fecha de Inicio</label>
                <input type="date" id="start_date" name="start_date" value="<?php if (isset($Client['id_client'])) echo $Client['start_date'] ?>" required />
            </div>
            <div class="form-group">
                <label for="start_month">Mes de Inicio</label>
                <input type="text" id="start_month" name="start_month" value="<?php if (isset($Client['id_client'])) echo $Client['start_month'] ?>" readonly />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="end_date">Fecha de Fin</label>
                <input type="date" id="end_date" name="end_date" value="<?php if (isset($Client['id_client'])) echo $Client['end_date'] ?>" readonly />
            </div>
            <div class="form-group">
                <label for="end_month">Mes de Fin</label>
                <input type="text" id="end_month" name="end_month" value="<?php if (isset($Client['id_client'])) echo $Client['end_month'] ?>" readonly />
            </div>
        </div>
        <div class="form-row">
            <button type="submit" name="update" value="send">Actualizar Datos</button>
        </div>
    </form>
</div>

<?php Update_Client_ID(); ?>