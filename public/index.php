<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\NotFoundHandler;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\Handler;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\RootHandler;

header('Content-Type: application/json; charset=utf-8');
header('Accept: application/json');

$requestPath = $_SERVER['REQUEST_URI'];
$requestMethod = strtolower($_SERVER['REQUEST_METHOD']);
$requestFormData = $_POST ?: json_decode(file_get_contents('php://input')) ?: [];

/** @var Handler $handler */
$routes = [
    '/' => [
        'get' => RootHandler::class,
    ],
    '/shapes' => [
        'get' => GetShapesHandler::class,
        'post' => CalculateShapesHandler::class,

    ]
];

$handlerName = NotFoundHandler::class;

if (array_key_exists($requestPath, $routes)) {
    $route = $routes[$requestPath];
    if (array_key_exists($requestMethod, $route)) {
        $handlerName = $route[$requestMethod];
    }
}

$response = (new $handlerName())->handle();

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
