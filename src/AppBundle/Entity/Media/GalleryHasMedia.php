<?php

namespace AppBundle\Entity\Media;

use Sonata\MediaBundle\Entity\BaseGalleryHasMedia;

class GalleryHasMedia extends BaseGalleryHasMedia
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
