<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\CalculateShapesHandler;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\NotFoundHandler;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\Handler;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers\RootHandler;

// Необходимо создать класс "Фигура".
// От данного класса наследовать 3 класса двумерных фигур (например, квадрат, треугольник, окружность и т.д.).
// Все свойства должны быть приватными.

// После создания структуры классов, необходимо реализовать простое REST API.
// То есть ваша задача - создать одну страницу, которая принимает запросы в том виде, в каком вы сами опишите.
// Суть данной API: По входным данным считать площадь/периметр/объем.
// В файлике README нужно описать как работать с вашей API, то есть нужна информация:

// Точка входа (url относительно корня сайта)
// Метод HTTP-запроса
// Параметры: фигура, необходимые данные для фигуры (сторона, радиус и т.д.), метод (площадь, периметр)
// Формат ответа

header('Content-Type: application/json; charset=utf-8');
header('Accept: application/json');

$requestPath = $_SERVER['REQUEST_URI'];
$requestMethod = strtolower($_SERVER['REQUEST_METHOD']);
$requestFormData = $_POST ?: json_decode(file_get_contents('php://input'), true) ?: [];

/** @var Handler $handler */
$routes = [
    '/shapes/calculate' => [
        'post' => CalculateShapesHandler::class,
    ],
];

$handlerName = NotFoundHandler::class;

if (array_key_exists($requestPath, $routes)) {
    $route = $routes[$requestPath];
    if (array_key_exists($requestMethod, $route)) {
        $handlerName = $route[$requestMethod];
    }
}

$response = (new $handlerName($requestFormData))->handle();

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
