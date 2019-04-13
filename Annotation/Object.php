<?php

namespace Ddeboer\Salesforce\MapperBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class BaseObject extends Annotation
{
    public $name;
}