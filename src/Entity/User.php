<?php
declare(strict_types=1);

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\EntityListeners({"App\EntityListener\UserListener"})
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @var int|null
     *
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     */
    protected $id;
}