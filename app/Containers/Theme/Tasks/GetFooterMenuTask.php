<?php

namespace App\Containers\Theme\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\Theme\Models\Link;

/**
 * Class GetFooterMenuTask
 * @package App\Containers\User\Tasks
 */
class GetFooterMenuTask extends Task
{

    /**
     * @return array
     */
    public function run()
    {

        return  [

            new Link('Link 1','#'),
            new Link('Link 2','#'),
            new Link('Link 3','#'),
            new Link('Link 4','#'),
            new Link('Link 5','#'),
            new Link('Link 6','#'),
            new Link('Link 7','#'),
            new Link('Link 8','#'),

        ];
    }

}
