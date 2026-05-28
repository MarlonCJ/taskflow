<?php

// Mostrar errores en desarrollo
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Iniciar sesión
session_start();

// Definir ruta raíz
define('BASE_PATH', dirname(__DIR__));

// Cargar autoload
require_once BASE_PATH . '/app/core/Autoload.php';

// Inicializar autoload
new Autoload();

// Ejecutar aplicación
$app = new App();