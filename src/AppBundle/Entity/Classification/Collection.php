<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseCollection;

class Collection extends BaseCollection
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
