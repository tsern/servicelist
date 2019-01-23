<?php

namespace App\Containers\Theme\Tasks;

use App\Containers\Theme\Models\MenuItem;

/**
 * Class GetLinksTask
 * @package App\Containers\Theme\Tasks
 */
class GetLinksTask
{
    /**
     * @return array
     */
    public function run()
    {
        $links_config = config('theme-container.links');
        $links = [];
        foreach ($links_config as $type => $collection) {
            $links[$type] = [];
            foreach ($collection as $link) {
                $link = new MenuItem($link['name'], $link['link'], $link['icon_class'], $link['sub_menu']);
                array_push($links[$type], $link);
            }
        }
        return $links;
    }
}
