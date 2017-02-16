<?php

namespace AppBundle\Entity\Page;

use Sonata\PageBundle\Entity\BaseSnapshot;

class Snapshot extends BaseSnapshot
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
