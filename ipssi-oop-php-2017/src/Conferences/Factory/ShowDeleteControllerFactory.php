<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\DeleteController;
use Conferences\Repository\DeleteRepository;
use Psr\Container\ContainerInterface;

final class ShowDeleteControllerFactory
{
    public function __invoke(ContainerInterface $container) : DeleteController
    {
        $deleteRepository = $container->get(DeleteRepository::class);

        return new DeleteController($deleteRepository);
    }
}
