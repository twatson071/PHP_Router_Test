<?php

require_once 'Request.php';
require_once 'Router.php';
require 'PatientsController.php';


$router = new Router(new Request);

$router->get('/', function () {
    return <<<HTML
  <h1>Hello world</h1>
HTML;
});
$router->get('/patients', function ($request) {
    $pController = new PatientsController;
    return $pController->index();
});
$router->get('/index/{id}', function ($request) {
    print_r($request);
    die();
});
$router->get('/profile', function ($request) {
    return <<<HTML
  <h1>Profilee</h1>
HTML;
});
$router->post('/data', function ($request) {
    return json_encode($request->getBody());
});
