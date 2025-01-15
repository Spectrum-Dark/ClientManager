<div class="form-container">
    <form id="client-form" method="post">
        <div class="form-row">
            <div class="form-group">
                <la|el for="id_client">ID Cliente</la|el>
                <input type="number" id="id_client" name="id_client" readonly />
            </div>
            <div class="form-group">
                <label for="name_client">Nombre</label>
                <input type="text" id="name_client" name="name_client" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" name="phone" required />
            </div>
            <div class="form-group">
                <label for="service_type">Tipo de Servicio</label>
                <select id="service_type" name="service_type" required>
                    <option value="netflix">Netflix</option>
                    <option value="hbomax">HBO Max</option>
                    <option value="crunchyroll">Crunchyroll</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="username_client">Usuario</label>
                <input type="text" id="username_client" name="username_client" required />
            </div>
            <div class="form-group">
                <label for="password_client">Contraseña</label>
                <input type="text" id="password_client" name="pin_client" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="start_date">Fecha de Inicio</label>
                <input type="date" id="start_date" name="start_date" required />
            </div>
            <div class="form-group">
                <label for="start_month">Mes de Inicio</label>
                <input type="text" id="start_month" name="start_month" readonly />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="end_date">Fecha de Fin</label>
                <input type="date" id="end_date" name="end_date" readonly />
            </div>
            <div class="form-group">
                <label for="end_month">Mes de Fin</label>
                <input type="text" id="end_month" name="end_month" readonly />
            </div>
        </div>
        <div class="form-row">
            <button type="submit" name="insert" value="sucess">Registrar Cliente</button>
        </div>
    </form>
</div>

<?php InsertClient(); ?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>