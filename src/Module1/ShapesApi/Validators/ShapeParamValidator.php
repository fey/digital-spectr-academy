<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Validators;

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Exceptions\ValidationException;

class ShapeParamValidator
{
    public static function validate($name, array $params)
    {
        if (!array_key_exists($name, $params)) {
            throw new ValidationException("{$name} is required");
        }

        $value = $params[$name];

        if (!is_integer($value) && !is_float($value)) {
            throw new ValidationException("{$name} should be integer or float");
        }

        if ($value <= 0) {
            throw new ValidationException("{$name} should be more than zero");
        }
    }
}
