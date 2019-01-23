<?php

namespace App\Containers\Theme\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Illuminate\Support\Facades\View;
use App\Containers\Theme\Models\Theme;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [

    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [

    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

        $links = Apiato::call('Theme@GetLinksTask@run');

        View::share('theme', new Theme($links));
    }
}
