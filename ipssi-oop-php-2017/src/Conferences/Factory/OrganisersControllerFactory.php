<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\OrganisersController;
use Conferences\Repository\OrganisersRepository;
use Psr\Container\ContainerInterface;

final class OrganisersControllerFactory
{
    public function __invoke(ContainerInterface $container) : OrganisersController
    {
        $OrganisersRepository = $container->get(OrganisersRepository::class);

        return new OrganisersController($OrganisersRepository);
    }
}
