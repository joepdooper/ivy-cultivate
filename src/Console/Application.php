<?php
namespace Ivy\Cultivate\Console;

use Ivy\Cultivate\Command\WatchAssetsCommand;

class Application
{
    private array $commands = [];

    public function __construct()
    {
        // Register commands here
        $this->commands['watch'] = new WatchAssetsCommand();
    }

    public function run(): void
    {
        global $argv;

        if (!isset($argv[1])) {
            $this->printUsage();
            exit(1);
        }

        $commandName = $argv[1];

        if (!isset($this->commands[$commandName])) {
            echo "Unknown command: $commandName\n";
            $this->printUsage();
            exit(1);
        }

        $command = $this->commands[$commandName];
        $command->execute(array_slice($argv, 2));
    }

    private function printUsage(): void
    {
        echo "Usage: ivy-cultivate <command>\n";
        echo "Available commands:\n";
        foreach ($this->commands as $name => $command) {
            echo "  - $name\n";
        }
    }
}