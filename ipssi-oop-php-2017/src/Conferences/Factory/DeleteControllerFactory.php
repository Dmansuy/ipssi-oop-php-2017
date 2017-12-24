<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\DeleteController;
use Conferences\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class DeleteControllerFactory
{
    public function __invoke(ContainerInterface $container) : DeleteController
    {
        $meetingRepository = $container->get(MeetingRepository::class);

        return new DeleteController($meetingRepository);
    }
}
