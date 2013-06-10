<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

function sum($a, $b) {
	return $a + $b;
}

$app -> get('/buscarPropiedad/{id}', function($id) {
	
	$valor;
	if (is_int($id)) {
		// consulta ddbb
		// SELCT nombre,valor FROM bienraiz WHERE ID=$id
		$valor = 'hola mundo';
	} else {
		// consulta ddbb
		// SELCT nombre,valor FROM bienraiz WHERE name=$id
		$valor = 'hola mundo';
	}

	// esto es un arreglo
	$arr = array('direccion' => 'Silla Computador Pantall 29', 'valor' => 300000);

	return json_encode($arr);
});

$app -> get('/filtrarZona/{}', function($name) {
	return 'Hello!' . $name;
});

$app -> run();
