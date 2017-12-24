<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Application\Controller\ErrorController;
use Conferences\Exception\UserNotAreOrganisersException;
use Conferences\Repository\MeetingRepository;

final class ShowAddMeetingController
{
    
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {s
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        try {
            $meeting = $this->meetingRepository->get($_GET['id'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/add-meeting-details.phtml';
            return ob_get_clean();
        } catch (UserNotAreOrganisersException $exception) {
            return (new ErrorController($exception))->errorNotOrganiserAction();
        }
    }
}
