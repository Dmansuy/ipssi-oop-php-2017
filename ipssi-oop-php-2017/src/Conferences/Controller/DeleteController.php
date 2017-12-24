<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\MeetingRepository;

final class DeleteController
{
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;

    }
    public function indexAction() : string
    {
        ob_start();
        include __DIR__.'/../../../views/delete.phtml';
        return ob_get_clean();

        $meetings = $this->meetingRepository->setDeleteMeeting();
    }
}
