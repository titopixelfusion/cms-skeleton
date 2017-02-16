<?php

namespace AppBundle\Entity\Page;

use Sonata\PageBundle\Entity\BaseSite;

class Site extends BaseSite
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
