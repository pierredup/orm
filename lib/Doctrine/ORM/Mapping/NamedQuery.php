<?php

namespace Doctrine\ORM\Mapping;

/**
 * @Annotation
 * @Target("ANNOTATION")
 */
final class NamedQuery implements Annotation
{
    /** @var string */
    public $name;

    /** @var string */
    public $query;
}
