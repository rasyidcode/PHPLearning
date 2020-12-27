<?php

namespace Minicli;

class CliPrinter
{
    public function out($message)
    {
        echo $message;
    }

    public function newLine()
    {
        $this->out("\n");
    }

    public function display($message)
    {
        $this->newLine();
        $this->out($message);
        $this->newLine();
        $this->newLine();
    }
}