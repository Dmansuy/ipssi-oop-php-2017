<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\ShowSubscribeController;
use Conferences\Repository\SubscribeRepository;
use Psr\Container\ContainerInterface;

final class ShowSubscribeControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowSubscribeController
    {
        $subscribeRepository = $container->get(SubscribeRepository::class);

        return new ShowSubscribeController($subscribeRepository);
    }
}
