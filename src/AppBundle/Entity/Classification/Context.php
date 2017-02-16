<?php

namespace AppBundle\Entity\Classification;

use Sonata\ClassificationBundle\Entity\BaseContext;

class Context extends BaseContext
{
    /**
     * @var string
     */
    protected $id;

    /**
     * Get id.
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }
}
