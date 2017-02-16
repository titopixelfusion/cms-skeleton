<?php

namespace AppBundle\Entity\Notification;

use Sonata\NotificationBundle\Entity\BaseMessage;

class Message extends BaseMessage
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
