<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Handlers;

class NotFoundHandler implements Handler
{
    public function handle(): array
    {
        http_response_code(404);
        return [
            'message' => 'not found',
        ];
    }
}
