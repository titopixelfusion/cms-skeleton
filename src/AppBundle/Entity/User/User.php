<?php

namespace AppBundle\Entity\User;

use Sonata\UserBundle\Entity\BaseUser;

class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
