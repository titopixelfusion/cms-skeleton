<?php

namespace AppBundle\Entity\News;

use Sonata\NewsBundle\Entity\BasePost;

class Post extends BasePost
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
