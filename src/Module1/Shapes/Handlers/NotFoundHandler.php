<?php

namespace Fey\DigitalSpectrAcademy\Module1\Shapes\Handlers;

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
