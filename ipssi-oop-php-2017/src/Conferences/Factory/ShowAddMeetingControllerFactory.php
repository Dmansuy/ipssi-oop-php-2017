<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\ShowAddMeetingController;
use Conferences\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class ShowAddMeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowAddMeetingController
    {
        $meetingRepository = $container->get(MeetingRepository::class);

        return new ShowAddMeetingController($meetingRepository);
    }
}
