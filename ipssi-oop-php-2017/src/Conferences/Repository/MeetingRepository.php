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

final class MeetingRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll() : MeetingCollection
    {
        $result = $this->pdo->query('SELECT id, title, description, startDate, endDate, community_id FROM meetings');
        $meetings = [];
        while ($meeting = $result->fetch()) {
            $meeting['startDate'] = new \DateTimeImmutable;
            $meeting['endDate'] = new \DateTimeImmutable;
            $meetings[] = new Meeting((int)$meeting['id'],$meeting['title'],$meeting['description'],$meeting['startDate'],$meeting['endDate'],(int)$meeting['community_id']);
        }
        return new MeetingCollection(...$meetings);
    }

    public function get(string $name) : Meeting
    {
        $statement = $this->pdo->prepare('SELECT id, title, description, startDate, endDate, community_id FROM meetings WHERE title = :name');
        $statement->execute([':name' => $name]);
        $meeting = $statement->fetch();
        if (!$meeting) {
            throw new MeetingNotFoundException();
        }
        $meeting['startDate'] = new \DateTimeImmutable;
        $meeting['endDate'] = new \DateTimeImmutable;
        return new Meeting((int)$meeting['id'],$meeting['title'],$meeting['description'],$meeting['startDate'],$meeting['endDate'],(int)$meeting['community_id']);
    }

    public function getCommingMeeting (string $name) : Meeting
    {
        $today = date("Y/m/d");
        $statement = $this->pdo->prepare('SELECT id, title, description, startDate, endDate, community_id FROM meetings WHERE title = :name AND startDate <= $today');
        $statement->execute([':name' => $name]);
        $meeting = $statement->fetch();
        if (!$meeting) {
            throw new MeetingNotFoundException();
        }
        $meeting['startDate'] = new \DateTimeImmutable;
        $meeting['endDate'] = new \DateTimeImmutable;
        return new Meeting((int)$meeting['id'],$meeting['title'],$meeting['description'],$meeting['startDate'],$meeting['endDate'],(int)$meeting['community_id']);
    }

    public function setAddMeeting() : \MeetingCollection \AttendeesCollection \OrganisersCollection
    {
        if ($_GET['user_id'] === $organisers->getUserName()) {
            $addMeeting = $this->pdo->query('INSERT INTO meeting VALUES ('.$_GET['title'].','.$_GET['description'].','.$_GET['stratDate'].','.$_GET['endDate'].','.$_GET['community_id']);
        }
        else
        {
            return (new ErrorController($exception))->errorUserNotOrganiserAction();
        }
    }

    public function setDeleteMeeting () : Meeting
    {
        $statement = $this->pdo->prepare('DELETE FROM meetings WHERE id = :'.$_GET['id'].'');
        $statement->execute([':'.$_GET['id'].'' => $meetingIdDeleting]);
        $meeting = $statement->fetch();
        if (!$meeting) {
            throw new MeetingNotFoundException();
        }
    }
}
