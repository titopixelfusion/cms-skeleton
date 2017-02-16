<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseCategory;

class Category extends BaseCategory
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
