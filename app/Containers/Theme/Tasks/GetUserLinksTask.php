<?php

namespace App\Containers\Theme\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\Theme\Models\IconLink;

/**
 * Class GetUserLinksTask
 * @package App\Containers\Theme\Tasks
 */
class GetUserLinksTask extends Task
{

    /**
     * @return array
     */
    public function run()
    {
        return  [
            new IconLink('Profile','#','fe-user'),
            new IconLink('Settings','#','fe-settings'),
            new IconLink('Message','#','fe-send'),
            new IconLink('Sign out','#','fe-log-out'),
        ];
    }
}
