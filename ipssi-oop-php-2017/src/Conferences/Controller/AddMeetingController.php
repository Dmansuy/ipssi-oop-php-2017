<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\MeetingRepository;

final class AddMeetingController
{
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;

    }
    public function indexAction() : string
    {
        ob_start();
        include __DIR__.'/../../../views/add-meeting.phtml';
        return ob_get_clean();
        
        $addMeeting = $this->meetingRepository->setAddMeeting();
    }
}
