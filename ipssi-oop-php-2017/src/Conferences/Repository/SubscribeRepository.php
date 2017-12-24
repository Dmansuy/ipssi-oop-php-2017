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
use PDO;

final class SubscribeRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function setSubscription() : \MeetingCollection \AttendeesCollection \OrganisersCollection
    {
        if ($_GET['role'] === 'a') {
            $result = $this->pdo->query('INSERT INTO attendees VALUES ('.$_GET['meeting_id'].','.$_GET['user_id'].') FROM meetings, users, attendees WHERE '.$_GET['user_id'].' = users.id AND '.$_GET['meeting_id'].' = meeting.id');
        }
        else
        {
            $result = $this->pdo->query('INSERT INTO organisers VALUES ('.$_GET['meeting_id'].','.$_GET['user_id'].') FROM meetings, users, organisers WHERE '.$_GET['user_id'].' = users.id AND '.$_GET['meeting_id'].' = meeting.id');
        }
    }
}
