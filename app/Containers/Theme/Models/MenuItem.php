<?php

namespace App\Containers\Theme\Models;

/**
 * Class MainMenuItem
 * @package App\Containers\Theme\Models
 */
class MenuItem extends IconLink
{
    /**
     *
     * @var array
     */
    public $sub_menu = [];

    /**
     * MainMenuItem constructor.
     * @param string $name
     * @param string $link
     * @param string $icon_class
     * @param array $sub_menu
     */
    public function __construct(string $name, string $link, string $icon_class, array $sub_menu = [])
    {
        parent::__construct($name, $link, $icon_class);
        $this->sub_menu = $sub_menu;
    }
}
