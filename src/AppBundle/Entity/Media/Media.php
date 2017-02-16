<?php

namespace AppBundle\Entity\Media;

use Sonata\MediaBundle\Entity\BaseMedia;

class Media extends BaseMedia
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
