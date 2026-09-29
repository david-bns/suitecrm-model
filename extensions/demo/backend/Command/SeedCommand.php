<?php

namespace App\Extension\demo\backend\Command;

use App\Extension\demo\backend\LegacyHandler\DemoLegacyHandler;
use App\Extension\demo\backend\Seeder\DatabaseSeeder;
use App\Extension\demo\backend\Service\DemoRecordTracker;
use App\Extension\demo\backend\Service\SeedContext;
use Faker\Factory;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'demo:seed', description: 'Fill the database with French demo data')]
class SeedCommand extends Command
{
    public function __construct(
        private readonly DemoLegacyHandler $legacy,
        private readonly DatabaseSeeder $seeder,
        private readonly DemoRecordTracker $tracker
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('users', null, InputOption::VALUE_REQUIRED, 'Sales users to create', 5)
            ->addOption('accounts', null, InputOption::VALUE_REQUIRED, 'Accounts to create (contacts, opportunities, cases and activities follow)', 30)
            ->addOption('leads', null, InputOption::VALUE_REQUIRED, 'Leads to create', 40)
            ->addOption('seed', null, InputOption::VALUE_REQUIRED, 'Faker seed, to generate the same data again');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        if (!$this->tracker->isReady()) {
            $io->error('Tracking table missing: run bin/console demo:migrate first.');

            return Command::FAILURE;
        }

        $options = [];
        foreach (['users', 'accounts', 'leads'] as $name) {
            $options[$name] = max(0, (int) $input->getOption($name));
        }
        if ($options['users'] < 1 && $options['accounts'] + $options['leads'] > 0) {
            $io->error('At least one user is needed to assign the records to.');

            return Command::FAILURE;
        }

        $faker = Factory::create('fr_FR');
        if ($input->getOption('seed') !== null) {
            $faker->seed((int) $input->getOption('seed'));
        }

        $this->legacy->start();

        try {
            $context = new SeedContext($faker, $options, $this->tracker);
            foreach ($this->seeder->seeders() as $seeder) {
                $io->writeln(sprintf(' <info>></info> %s', (new \ReflectionClass($seeder))->getShortName()));
                $seeder->run($context);
            }
        } finally {
            $this->legacy->stop();
        }

        $io->newLine();
        $io->table(['Module', 'Created'], array_map(
            static fn ($module, $count) => [$module, $count],
            array_keys($context->created),
            $context->created
        ));
        $io->success(sprintf('%d records created.', array_sum($context->created)));

        return Command::SUCCESS;
    }
}
