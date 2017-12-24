<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Repository\SubscribeRepository;
use PDO;
use Psr\Container\ContainerInterface;

final class SubscribeRepositoryFactory
{
    public function __invoke(ContainerInterface $container) : SubscribeRepository
    {
        $pdo = $container->get(PDO::class);

        return new SubscribeRepository($pdo);
    }
}
