<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class SomeService
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * SomeService constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function doSome(User $user)
    {
        dump('user is persist?', $this->em->contains($user));
    }
}