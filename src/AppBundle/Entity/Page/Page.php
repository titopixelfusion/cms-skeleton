<?php

namespace AppBundle\Entity\Page;

use Sonata\PageBundle\Entity\BasePage;

class Page extends BasePage
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
