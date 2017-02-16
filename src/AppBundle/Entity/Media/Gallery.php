<?php

namespace AppBundle\Entity\Media;

use Sonata\MediaBundle\Entity\BaseGallery;

class Gallery extends BaseGallery
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
