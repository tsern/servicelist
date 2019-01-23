<?php

namespace App\Containers\Theme\Models;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Theme
 * @package App\Containers\Theme\Models
 */
class Theme
{

    /**
     * @var array
     */
    private static $userLinks;

    /**
     * @var array
     */
    private static $mainMenu;

    /**
     * @var array
     */
    private static $footerMenu;

    /**
     * @var array
     */
    private static $footerLinks;

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }

    /**
     * @return array
     */
    public function getUserLinks()
    {
    if (!(self::$userLinks)) {
            self::$userLinks = Apiato::call('Theme@GetUserLinksTask');;
        }
        return self::$userLinks;
    }

    /**
     * @return array
     */
    public function getMainMenu()
    {
    if (!(self::$mainMenu)) {
            self::$mainMenu = Apiato::call('Theme@GetMainMenuTask');;
        }
        return self::$mainMenu;
    }

    /**
     * @return array
     */
    public function getFooterMenu()
    {
    if (!(self::$footerMenu)) {
            self::$footerMenu = Apiato::call('Theme@GetFooterMenuTask');;
        }
        return self::$footerMenu;
    }

    /**
     * @return array
     */
    public function getFooterLinks()
    {
    if (!(self::$footerLinks)) {
            self::$footerLinks = Apiato::call('Theme@GetFooterLinksTask');;
        }
        return self::$footerLinks;
    }
}
