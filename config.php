<?php
define('VERSION', 'v 1.0');
define('ALIAS', $ini['sistema']['acronimoEmpresa']);
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_BACKEND', 'layout/backend.tpl');
define('LAYOUT_FRONTEND', 'layout/login.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');
define('LAYOUT_JSON', 'layout/json.tpl');

#Login y su controlador
$conf['muestra'] = array(
	'vista' => 'inicio.tpl',
	#'controlador' => 'frontend.php',
	'titulo' => 'Bienvenido',
	'descripcion' => 'Bienvenido',
	'seguridad' => false,
	'capa' => LAYOUT_BACKEND);
	
$conf['login'] = array(
	'vista' => 'usuarios/login.tpl',
	'titulo' => 'Inicio de sesión',
	'descripcion' => 'Inicio de sesión',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => LAYOUT_FRONTEND);

$conf['logout'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_AJAX);

$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);

$conf['route'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Determina hacia donde mandar a los usuarios una vez que se inicia sesión',
	'seguridad' => true);

includeDir("config/");
?>
