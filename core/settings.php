<?php


// Definir el uso horario o timezone del sistema
date_default_timezone_set('America/Lima');

// Lenguaje
// define('SITE_LANG'   , $this->lng);

// Versión de la aplicación
define('SYSTEM_NAME'   , 'REGISTRO CIVIL');    
define('SYSTEM_VERSION', '1.0.0');          

// Ruta base de nuestro proyecto
// Esta constante ahora es configurada desde el archivo settings.php
// define('BASEPATH','/registrocivil/');

// Puerto y la URL del sitio
define('PORT'       , isset($_SERVER['SERVER_PORT'])?'80':''); // Puerto por defecto de Prepros <2020
define('PROTOCOL'   , isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"); // Detectar si está en HTTPS o HTTP
define('HOST'       , $_SERVER['HTTP_HOST'] === 'localhost' ? (PREPROS ? 'localhost:'.PORT : 'localhost') : $_SERVER['HTTP_HOST']); // Dominio o host localhost.com tudominio.com
define('REQUEST_URI', $_SERVER["REQUEST_URI"]); // Parametros y ruta requerida
define('URL'        , PROTOCOL.'://'.HOST.BASEPATH); // URL del sitio
define('CUR_PAGE'   , PROTOCOL.'://'.HOST.REQUEST_URI); // URL actual incluyendo parametros get

// Las rutas de directorios y archivos
define('DS'         , DIRECTORY_SEPARATOR);
define('ROOT'       , getcwd().DS);

define('CLASSES'    , ROOT.'classes'.DS);
// define('CONFIG'     , ROOT.'config'.DS);
define('CONTROLLERS', ROOT.'controllers'.DS);
define('FUNCTIONS'  , ROOT.'functions'.DS);
define('MODELS'     , ROOT.'models'.DS);
define('CORE'     , ROOT.'core'.DS);
define('MIDDLEWARES'     , ROOT.'middlewares'.DS);
define('RESOURCES'     , ROOT.'resources'.DS);
define('TEMPLATES'     , ROOT.'templates'.DS);
define('VIEWS'     , TEMPLATES.'views'.DS);
define('MODULES'  , TEMPLATES.'modules'.DS);
define('INCLUDES',TEMPLATES.'includes'.DS);

define('LOGS'       , ROOT.'logs'.DS);


// Rutas de recursos y assets absolutos
define('IMAGES_PATH', ROOT.'assets'.DS.'images'.DS);
define('PROFILE_IMAGES', ROOT.'assets'.DS.'profiles'.DS);

// resources data
define('BIRTH_CERTIFICATES', ROOT.'resources'.DS.'data'.DS.'birth_certificates'.DS);
define('MARRIAGE_CERTIFICATES', ROOT.'resources'.DS.'data'.DS.'marriage_certificates'.DS);
define('DEATH_CERTIFICATES', ROOT.'resources'.DS.'data'.DS.'death_certificates'.DS);

//Rutas de archivos o assets con base URL
define('ASSETS'     , URL.'assets/');
define('CSS'        , ASSETS.'css/');
define('FAVICON'    , ASSETS.'favicon/');
define('FONTS'      , ASSETS.'fonts/');
define('IMAGES'     , ASSETS.'images/');
define('JS'         , ASSETS.'js/');
define('PLUGINS'    , ASSETS.'plugins/');
define('UPLOADS'    , ROOT.'assets'.DS.'uploads'.DS);
define('UPLOADED'   , ASSETS.'uploads/');

// Credenciales de la base de datos
// Set para conexión local o de desarrollo
define('LDB_ENGINE' , 'mysql');
define('LDB_HOST'   , 'localhost');
define('LDB_NAME'   , '');
define('LDB_USER'   , '');
define('LDB_PASS'   , '');
define('LDB_CHARSET', 'utf8');

// El controlador por defecto / el método por defecto / y el controlador de errores por defecto
define('DEFAULT_CONTROLLER'      , 'login');
define('DEFAULT_ERROR_CONTROLLER', 'error');
define('DEFAULT_METHOD'          , 'index');
