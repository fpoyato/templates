<?php

namespace Templates\Draggy;

use Draggy\Autocode\Templates\PHP\Symfony2\Doctrine2\EntityBase4;

class EntityTemplate extends EntityBase4
{
    /**
     * Adds new user annotation in Documentation lines
     *
     * @return array
     */
    public function getEntityDocumentationLines()
    {
        $lines = parent::getEntityDocumentationLines();

        $lines[] = $this->getUserAdditions('annotations');
        $lines[] = $this->getEndUserAdditions();

        return $lines;
    }
}
