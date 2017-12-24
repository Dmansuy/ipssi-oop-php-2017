<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\AddMeetingController;
use Conferences\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class AddMeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : AddMeetingController
    {
        $meetingRepository = $container->get(MeetingRepository::class);

        return new AddMeetingController($meetingRepository);
    }
}
