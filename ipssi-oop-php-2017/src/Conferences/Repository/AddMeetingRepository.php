<?php

declare(strict_types=1);

namespace Conferences\Repository;

use Conferences\Collection\MeetingCollection;
use Conferences\Collection\AttendeesCollection;
use Conferences\Collection\OrganisersCollection;
use Conferences\Entity\Meeting;
use Conferences\Entity\Attendees;
use Conferences\Entity\Organisers;
use Conferences\Entity\User;
use Conferences\Exception\MeetingNotFoundException;
use Conferences\Exception\UserNotAreOrganisersException;

use PDO;

final class AddMeetingRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function setAddMeeting() : \MeetingCollection \AttendeesCollection \OrganisersCollection
    {

        if ($_GET['user_id'] === $organisers->getUserName()) {
            $addMeeting = $this->pdo->query('INSERT INTO meeting (id, title, description, stratDate, endDate, community_id) VALUES ('','.$_GET['title'].', '.$_GET['description'].','.$_GET['stratDate'].','.$_GET['endDate'].','.$_GET['community_id']);
            
            $addOrganisersMeeting = $this->pdo->query('INSERT INTO organisers (meeting_id, user_id) VALUES ('','.$_GET['user_id'].);

            $AddAttendeesMeeting = $this->pdo->query('INSERT INTO attendees (meeting_id, user_id) VALUES ('','.$_GET['user_id'].);
        }
        else
        {
            return (new ErrorController($exception))->errorNotOrganiserAction();
        }
    }
}
