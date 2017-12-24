<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\SubscribeRepository;

final class SubscribeController
{
    private $subscribeRepository;

    public function __construct(SubscribeRepository $subscribeRepository)
    {
        $this->subscribeRepository = $subscribeRepository;

    }
    public function indexAction() : string
    {
        ob_start();
        include __DIR__.'/../../../views/subscribe.phtml';
         return ob_get_clean();
        
         $subscribe = $this->subscribeRepository->setSubscription();
    }
}
