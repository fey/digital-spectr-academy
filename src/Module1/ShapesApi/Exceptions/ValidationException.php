<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Exceptions;

use Exception;

class ValidationException extends Exception
{
    protected $message = 'Validation exception';
}
