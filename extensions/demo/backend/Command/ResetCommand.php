<?php

namespace App\Extension\demo\backend\Command;

use App\Extension\demo\backend\LegacyHandler\DemoLegacyHandler;
use App\Extension\demo\backend\Service\DemoRecordTracker;
use BeanFactory;
use LogicException;
use SugarBean;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'demo:reset', description: 'Delete the records created by demo:seed, then optionally seed again')]
class ResetCommand extends Command
{
    public function __construct(
        private readonly DemoLegacyHandler $legacy,
        private readonly DemoRecordTracker $tracker
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('seed', null, InputOption::VALUE_NONE, 'Run demo:seed afterwards')
            ->addOption('users', null, InputOption::VALUE_REQUIRED, 'Passed to demo:seed', 5)
            ->addOption('accounts', null, InputOption::VALUE_REQUIRED, 'Passed to demo:seed', 30)
            ->addOption('leads', null, InputOption::VALUE_REQUIRED, 'Passed to demo:seed', 40)
            ->addOption('faker-seed', null, InputOption::VALUE_REQUIRED, 'Passed to demo:seed as --seed');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        if (!$this->tracker->isReady()) {
            $io->error('Tracking table missing: run bin/console demo:migrate first.');

            return Command::FAILURE;
        }

        $records = $this->tracker->all();

        $this->legacy->start();
        try {
            // Newest first: activities and links go before the accounts and users they point to.
            foreach ($records as ['module' => $module, 'record_id' => $id]) {
                $bean = BeanFactory::getBean($module, $id);
                if ($bean instanceof SugarBean && !empty($bean->id)) {
                    $bean->mark_deleted($id);
                }
            }
        } finally {
            $this->legacy->stop();
        }

        $this->tracker->clear();
        $io->success(sprintf('%d demo records deleted.', count($records)));

        if (!$input->getOption('seed')) {
            return Command::SUCCESS;
        }

        $arguments = [
            'command' => 'demo:seed',
            '--users' => $input->getOption('users'),
            '--accounts' => $input->getOption('accounts'),
            '--leads' => $input->getOption('leads'),
        ];
        if ($input->getOption('faker-seed') !== null) {
            $arguments['--seed'] = $input->getOption('faker-seed');
        }

        $application = $this->getApplication();
        if ($application === null) {
            throw new LogicException('demo:reset --seed must run from the console application.');
        }

        return $application->find('demo:seed')->run(new ArrayInput($arguments), $output);
    }
}
