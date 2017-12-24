<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Application\Controller\ErrorController;
use Conferences\Exception\MeetingNotFoundException;
use Conferences\Repository\DeleteRepository;

final class ShowDeleteController
{
    
    private $deleteRepository;

    public function __construct(DeleteRepository $deleteRepository)
    {
        $this->deleteRepository = $deleteRepository;
    }

    public function indexAction() : string
    {
        try {
            $delete = $this->deleteRepository->get($_GET['id'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/delete-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}
