<?php

namespace App\Containers\Theme\Models;

/**
 * Class MainMenuItem
 * @package App\Containers\Theme\Models
 */
class MainMenuItem extends IconLink
{
    /**
     *
     * @var array
     */
    public $sub = [];

    /**
     * MainMenuItem constructor.
     * @param string $name
     * @param string $link
     * @param string $icon_class
     * @param array $sub
     */
    public function __construct(string $name, string $link, string $icon_class, array $sub = [])
    {
        parent::__construct($name, $link, $icon_class);
        $this->sub = $sub;
    }
}
