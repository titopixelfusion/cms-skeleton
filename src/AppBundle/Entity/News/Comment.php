<?php

namespace AppBundle\Entity\News;

use Sonata\NewsBundle\Entity\BaseComment;

class Comment extends BaseComment
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
