<?php

define('ROOTDIR', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

require ROOTDIR.DS.'vendor'.DS.'autoload.php';

use Klein\Klein;

use smbkr\PeopleThing\controllers\PeopleController;
use smbkr\PeopleThing\Template;

require_once ROOTDIR.DS.'app'.DS.'bootstrap.php';

$controllers = [
	'people' => new PeopleController($entityManager)
];

$router = new Klein();
$router->respond(function ($request, $response, $service) {
	$service->layout(Template::is('base'));
});

// view routes intended for use by the user
$router->respond('GET', '/', function($request, $response, $service) {
	$service->title = 'Add View';
	$service->render(Template::is('add'));
});

$router->respond('GET', '/list', function($request, $response, $service) {
	$service->title = 'List View';
	$service->render(Template::is('index'));
});

// /api/ routes used for CRUD operations - intended to be consumed via ajax request
$router->respond('GET', '/api/people', function($request, $response, $service) use ($controllers) {
	$response->body(json_encode($controllers['people']->index()));
	$response->send();
});

$router->respond('POST', '/api/person', function($request, $response, $service) use ($controllers) {
	$result = $controllers['people']->post($request);

	if ($result) {
		$response->code('200');
	} else {
		$response->code('500');
	}
});

$router->dispatch();
