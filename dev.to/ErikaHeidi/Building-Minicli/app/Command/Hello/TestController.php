<?php

namespace App\Command\Hello;

use Minicli\CommandController;

class TestController extends CommandController
{
    public function handle()
    {
        $name = $this->hasParam('test') ? $this->getParam('test') : 'only test';
        $this->getPrinter()->display(sprintf("I am a, %s!", $name));
    }
}