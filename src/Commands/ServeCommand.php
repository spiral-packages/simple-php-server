<?php

declare(strict_types=1);

namespace Spiral\SimpleServer\Commands;

use Spiral\Boot\DirectoriesInterface;
use Spiral\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

class ServeCommand extends Command
{
    protected const NAME = 'serve';
    protected const DESCRIPTION = 'Run simple web server';
    protected const ARGUMENTS = [
        ['host', InputArgument::OPTIONAL, 'Host name', '127.0.0.1'],
        ['port', InputArgument::OPTIONAL, 'Server port', '8000']
    ];

    public function perform(DirectoriesInterface $dir, PhpExecutableFinder $finder): int
    {
        $app = __DIR__ . '/../../bin/server.php';

        $process = new Process(
            command: [$finder->find(false), '-S', $this->argument('host') . ':' . $this->argument('port'), '-t', $dir->get('public'), $app],
            cwd: $dir->get('root'),
            env: ['SERVER_ROOT_DIR' => $dir->get('root')],
            timeout: null
        );

        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        return self::SUCCESS;
    }
}
