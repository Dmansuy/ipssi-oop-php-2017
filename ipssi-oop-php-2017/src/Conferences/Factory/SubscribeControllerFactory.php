<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\SubscribeController;
use Conferences\Repository\SubscribeRepository;
use Psr\Container\ContainerInterface;

final class SubscribeControllerFactory
{
    public function __invoke(ContainerInterface $container) : SubscribeController
    {
        $subscribeRepository = $container->get(SubscribeRepository::class);

        return new SubscribeController($subscribeRepository);
    }
}
