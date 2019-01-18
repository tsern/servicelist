<?php
/**
 * Created by PhpStorm.
 * User: rostyslav
 * Date: 18.01.19
 * Time: 18:00
 */

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