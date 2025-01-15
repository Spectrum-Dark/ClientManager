-- Active: 1731773937269@@127.0.0.1@3306@streaming_clients
CREATE DATABASE streaming_clients;

use streaming_clients;

/* Id cliente 	Nombre del cliente 	Telefono 	Tipo de servicio 	Usuario 	Clave de acceso 	Fecha de inicio 	Mes de inicio 	Fecha de finalizacion 	Mes de finalizacion 	Pago mensual */

CREATE TABLE clients (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    name_client VARCHAR(100),
    phone VARCHAR(15),
    service_type VARCHAR(1000),
    username_client VARCHAR(100),
    password_client VARCHAR(255),
    start_date VARCHAR(100),
    start_month VARCHAR(100),
    end_date VARCHAR(100),
    end_month VARCHAR(100),
    monthly_payment INTEGER
)

SELECT * FROM clients

/* Procedimiento almacenado Mostrar todo ordenado*/
DELIMITER / /

CREATE PROCEDURE ShowClients()
BEGIN
    SELECT 
        id_client,
        name_client,
        phone,
        service_type,
        username_client,
        password_client,
        -- Formatear start_date al formato DD-MM-YYYY
        DATE_FORMAT(STR_TO_DATE(start_date, '%Y-%m-%d'), '%d-%m-%Y') AS start_date,
        start_month,
        -- Formatear end_date al formato DD-MM-YYYY
        DATE_FORMAT(STR_TO_DATE(end_date, '%Y-%m-%d'), '%d-%m-%Y') AS end_date,
        end_month,
        monthly_payment
    FROM clients
    -- Ordenar por la columna end_date de forma ascendente
    ORDER BY STR_TO_DATE(end_date, '%Y-%m-%d') ASC;
END //

DELIMITER;

/* Procedimiento almacenado Insertar client*/

DELIMITER / /

CREATE PROCEDURE InsertClient(
    IN p_name_client VARCHAR(100),
    IN p_phone VARCHAR(15),
    IN p_service_type VARCHAR(1000),
    IN p_username_client VARCHAR(100),
    IN p_password_client VARCHAR(255),
    IN p_start_date VARCHAR(100),
    IN p_start_month VARCHAR(100),
    IN p_end_date VARCHAR(100),
    IN p_end_month VARCHAR(100),
    IN p_monthly_payment INTEGER
)
BEGIN
    INSERT INTO clients (
        name_client, phone, service_type, username_client, password_client, 
        start_date, start_month, end_date, end_month, monthly_payment
    )
    VALUES (
        p_name_client, p_phone, p_service_type, p_username_client, p_password_client, 
        p_start_date, p_start_month, p_end_date, p_end_month, p_monthly_payment
    );
END //

DELIMITER;

/* Procedimiento almacenado Buscar por ID*/

DELIMITER / /

CREATE PROCEDURE SearchClient_ID(
    IN p_id_client INT
)
BEGIN
    SELECT * FROM clients WHERE id_client = p_id_client;
END //

DELIMITER;

/* Procedimiento almacenado actualizar client*/

DELIMITER / /

CREATE PROCEDURE UpdateClient(
    IN p_id_client INT,
    IN p_name_client VARCHAR(100),
    IN p_phone VARCHAR(15),
    IN p_service_type VARCHAR(1000),
    IN p_username_client VARCHAR(100),
    IN p_password_client VARCHAR(255),
    IN p_start_date VARCHAR(100),
    IN p_start_month VARCHAR(100),
    IN p_end_date VARCHAR(100),
    IN p_end_month VARCHAR(100),
    IN p_monthly_payment INTEGER
)
BEGIN
    UPDATE clients
    SET 
        name_client = p_name_client,
        phone = p_phone,
        service_type = p_service_type,
        username_client = p_username_client,
        password_client = p_password_client,
        start_date = p_start_date,
        start_month = p_start_month,
        end_date = p_end_date,
        end_month = p_end_month,
        monthly_payment = p_monthly_payment
    WHERE id_client = p_id_client;
END //

DELIMITER;

/* Procedimiento almacenado actualizar client*/

DELIMITER / /

CREATE PROCEDURE DeleteClient(
    IN p_id_client INT
)
BEGIN
    DELETE FROM clients WHERE id_client = p_id_client;
END //

DELIMITER;

/* Usuario de prueva */
CALL `InsertClient` (
    'Juan Pérez',
    '123456789',
    'Consultoría',
    'juan.perez',
    'password123',
    '2025-01-01',
    'Enero',
    '2025-12-31',
    'Diciembre',
    500
);

CALL `ShowClients`