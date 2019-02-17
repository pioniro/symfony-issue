<?php
declare(strict_types=1);

namespace App\EntityListener;

use App\Entity\User;
use App\Service\SomeService;
use Doctrine\ORM\Event\LifecycleEventArgs;

class UserListener
{
    /**
     * @var SomeService
     */
    protected $service;

    /**
     * UserListener constructor.
     * @param SomeService $service
     */
    public function __construct(SomeService $service)
    {
        $this->service = $service;
    }

    public function postPersist(User $user, LifecycleEventArgs $eventArgs)
    {
        dump('user is persist?', $eventArgs->getEntityManager()->contains($user));
        $this->service->doSome($user);
    }
}