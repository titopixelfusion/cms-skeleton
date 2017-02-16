<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseTag;

class Tag extends BaseTag
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
