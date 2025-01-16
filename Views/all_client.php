<div class="table-container">
    <table class="clients-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Tipo de Servicio</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Fecha de Inicio</th>
                <th>Mes de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Mes de Fin</th>
                <th>Pago Mensual</th>
                <th>Acciones</th> <!-- Nueva columna para botones -->
            </tr>
        </thead>
        <tbody>
            <?php GetAllClient(); ?>
        </tbody>
    </table>
</div>