<?php

namespace App\Containers\Theme\Models;

/**
 * Class IconLink
 * @package App\Containers\Theme\Models
 */
class IconLink extends Link
{
    /**
     * @var string
     */
    public $icon_class;

    /**
     * IconLink constructor.
     * @param string $name
     * @param string $link
     * @param string $icon_class
     * @param array $sub
     */
    public function __construct(string $name, string $link, string $icon_class)
    {
        parent::__construct($name, $link);
        $this->icon_class = $icon_class;
    }
}
