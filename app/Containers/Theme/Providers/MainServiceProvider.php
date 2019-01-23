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

        /*$links = [
            'footer_copyright_links' => [
                new Link('Documentation', '#'),
                new Link('FAQ', '#'),
            ],
            'footer_menu_links' => [
                new Link('Link 1', '#'),
                new Link('Link 2', '#'),
                new Link('Link 3', '#'),
                new Link('Link 4', '#'),
                new Link('Link 5', '#'),
                new Link('Link 6', '#'),
                new Link('Link 7', '#'),
                new Link('Link 8', '#'),
            ],
            'main_menu_links' => [
                new MenuItem('Home', '#','fe-home', []),
                new MenuItem('Interface', '#', 'fe-box' , []),
                new MenuItem('Components', '#', 'fe-calendar', []),
                new MenuItem('Pages', '#', 'fe-file', []),
                new MenuItem('Forms', '#', 'fe-square', []),
            ],
            'user_menu_links' => [
                new IconLink('Profile', '#', 'fe-user'),
                new IconLink('Settings', '#', 'fe-settings'),
                new IconLink('Message', '#', 'fe-send'),
                new IconLink('Sign out', '#', 'fe-log-out'),
            ],

        ];*/

        $links = Apiato::call('Theme@GetLinksTask@run');
        View::share('theme', new Theme($links));
    }
}
