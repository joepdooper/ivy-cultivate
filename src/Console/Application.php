<?php

namespace Ivy\Cultivate\Console;

use Symfony\Component\Console\Application as SymfonyApplication;
use Ivy\Cultivate\Console\Commands\WatchCommand;

class Application extends SymfonyApplication
{
    public function __construct()
    {
        parent::__construct('ivy CLI', '0.8.6');

        $this->add(new WatchCommand());
        // $this->add(new CreatePluginCommand());
        // $this->add(new CreateTemplateCommand());
    }
}