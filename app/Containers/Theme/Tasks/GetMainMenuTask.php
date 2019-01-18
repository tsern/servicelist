<?php

namespace App\Containers\Theme\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\Theme\Models\MainMenuItem;

/**
 * Class GetMainMenuTask
 * @package App\Containers\Theme\Tasks
 */
class GetMainMenuTask extends Task
{

    /**
     * @return array
     */
    public function run()
    {

        return  [

            new MainMenuItem('Home',       '#', 'fe-home',    []),
            new MainMenuItem('Interface',  '#', 'fe-box' ,    []),
            new MainMenuItem('Components', '#', 'fe-calendar',[]),
            new MainMenuItem('Pages',      '#', 'fe-file',    []),
            new MainMenuItem('Forms',      '#', 'fe-square',  []),

        ];
    }

}
