<?php

namespace Fey\DigitalSpectrAcademy\Module1\Shapes\Handlers;

class RootHandler implements Handler
{
    public function handle(): array
    {
        return ['root' => true];
    }
}
