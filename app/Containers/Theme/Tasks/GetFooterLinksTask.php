<?php

namespace App\Containers\Theme\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\Theme\Models\Link;

/**
 * Class GetFooterLinksTask
 * @package App\Containers\Theme\Tasks
 */
class GetFooterLinksTask extends Task
{
    /**
     * @return array
     */
    public function run()
    {
        return[
            new Link('Documentation','#'),
            new Link('FAQ','#'),
        ];
    }
}
