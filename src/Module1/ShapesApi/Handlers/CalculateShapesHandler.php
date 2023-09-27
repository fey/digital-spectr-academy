<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers;

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Exceptions\ValidationException;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Circle;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Shape;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Square;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Triangle;
use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Validators\ShapeParamValidator;

class CalculateShapesHandler implements Handler
{
    public function __construct(readonly array $requestFormData)
    {
    }

    public function handle(): array
    {
        $requestData = $this->requestFormData;

        try {
            $this->validatePresentsKeys($requestData);

            ['shape' => $shapeName, 'method' => $method, 'params' => $params] = $requestData;

            $this->validateShapesValue($shapeName);
            $this->validateMethodValue($method);


            $shape = $this->buildShape($shapeName, $params);
        // NOTE: для простоты используем один эксепшен для валидации
        } catch (ValidationException $e) {
            http_response_code(422);

            return [
            'message' => $e->getMessage(),
            ];
        }

        $shapeMethod = sprintf("get%s", ucfirst($method));


        return [
            'data' => [
                'method' => $method,
                'shape' => $shapeName,
                'result' => $shape->$shapeMethod(),
            ]
        ];
    }

    private function validatePresentsKeys(array $requestData): void
    {
        $requiredKeys = ['shape', 'method', 'params'];

        foreach ($requiredKeys as $key) {
            if (!array_key_exists($key, $requestData)) {
                throw new ValidationException("$key should be presents");
            }
        }
    }

    private function validateShapesValue($value): void
    {
        $shapes = ['triangle', 'circle', 'square',];

        if (in_array($value, $shapes)) {
            return;
        }

        $message = sprintf("%s is invalid shape type, valid types: %s", $value, implode(', ', $shapes));
        throw new ValidationException($message);
    }

    private function validateMethodValue(string $method): void
    {
        $methods = ['perimeter', 'area'];
        if (!in_array($method, $methods)) {
            http_response_code(422);

            $message = sprintf("%s is invalid method, valid methods: %s", $method, implode(', ', $methods));

            throw new ValidationException($message);
        }
    }

    private function buildShape($name, $params): Shape
    {
        // NOTE: Для просты используем диспетчеризацию по типу фигуры. Сам код может находиться в отдельном классе
        $builders = [
            'circle' => function () use ($params) {
                $requiredParam = 'radius';
                // NOTE: валидация параметров зависит от типа фигуры.
                // Валидация может находиться внутри класса-фигуры. Тогда код будет попроще
                ShapeParamValidator::validate($requiredParam, $params);

                return Circle::fromParams(...$params);
            },
            'triangle' => function () use ($params) {
                $requiredParams = ['sideA', 'sideB', 'sideC'];

                foreach ($requiredParams as $requiredParam) {
                    ShapeParamValidator::validate($requiredParam, $params);
                }

                return Triangle::fromParams($params);
            },
            'square' => function () use ($params) {
                $requiredParam = 'side';

                ShapeParamValidator::validate($requiredParam, $params);

                return Square::fromParams($params);
            }
        ];

        return $builders[$name]();
    }
}
