<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Application\Controller\ErrorController;
use Conferences\Exception\MeetingNotFoundException;
use Conferences\Repository\SubscribeRepository;

final class ShowSubscribeController
{
    
    private $subscribeRepository;

    public function __construct(SubscribeRepository $subscribeRepository)
    {
        $this->subscribeRepository = $subscribeRepository;
    }

    public function indexAction() : string
    {
        try {
            $meeting = $this->subscribeRepository->get($_GET['title'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/subscribe-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}
