<?php

namespace App\Containers\Theme\Models;

/**
 * Class Link
 * @package App\Containers\Theme\Models
 */
class Link
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $link;

    /**
     * Link constructor.
     * @param string $name
     * @param string $link
     */
    public function __construct(string $name, string $link)
    {
        $this->name = $name;
        $this->link = $link;
    }
}
