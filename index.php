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
//TODO: make getting query params dynamic
$router->get('/patients/2', function ($request) {
  $pController = new PatientsController;
  return $pController->get();
});
$router->post('/patients', function ($request) {
  $pController = new PatientsController;
  return $pController->create($request);
});
$router->patch('/patients/:ID', function ($ID) {
  print_r($ID);
  die();
  $pController = new PatientsController;
  return $pController->update();
});
$router->delete('/patients/2', function ($request) {
  $pController = new PatientsController;
  return $pController->delete();
});
