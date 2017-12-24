<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Repository\OrganisersRepository;
use PDO;
use Psr\Container\ContainerInterface;

final class OrganisersRepositoryFactory
{
    public function __invoke(ContainerInterface $container) : OrganisersRepository
    {
        $pdo = $container->get(PDO::class);

        return new OrganisersRepository($pdo);
    }
}
