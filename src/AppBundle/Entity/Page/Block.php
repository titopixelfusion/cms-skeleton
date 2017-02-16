<?php

namespace AppBundle\Entity\Page;

use Sonata\PageBundle\Entity\BaseBlock;

class Block extends BaseBlock
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
