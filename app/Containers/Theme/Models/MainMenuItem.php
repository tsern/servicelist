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
    public $subMenu = [];

    /**
     * MainMenuItem constructor.
     * @param string $name
     * @param string $link
     * @param string $icon_class
     * @param array $subMenu
     */
    public function __construct(string $name, string $link, string $icon_class, array $subMenu = [])
    {
        parent::__construct($name, $link, $icon_class);
        $this->subMenu = $subMenu;
    }
}
