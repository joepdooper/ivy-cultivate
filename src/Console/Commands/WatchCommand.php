<?php
namespace Ivy\Cultivate\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WatchCommand extends Command
{
    protected function configure()
    {
        $this->setName('app:watch');
        $this->setDescription('Watches something important.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Running watch command...');
        // ...
        return Command::SUCCESS;  // or some int status code
    }
}
