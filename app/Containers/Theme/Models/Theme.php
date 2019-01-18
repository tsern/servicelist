<?php

namespace App\Containers\Theme\Models;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Theme
 * @package App\Containers\Theme\Models
 */
class Theme
{
    /*public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }*/

    /*private function __construct()
    {
    }*/

    /*private function __clone()
    {
    }*/

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }
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
    /**
     * @return array
     */
    public static function getUserLinks()
    {
    if (!(self::$userLinks)) {
            self::$userLinks = Apiato::call('Theme@GetUserLinksTask');;
        }
        return self::$userLinks;
    }

    /**
     * @return array
     */
    public static function getMainMenu()
    {
    if (!(self::$mainMenu)) {
            self::$mainMenu = Apiato::call('Theme@GetMainMenuTask');;
        }
        return self::$mainMenu;
    }

    /**
     * @return array
     */
    public static function getFooterMenu()
    {
    if (!(self::$footerMenu)) {
            self::$footerMenu = Apiato::call('Theme@GetFooterMenuTask');;
        }
        return self::$footerMenu;
    }

    /**
     * @return array
     */
    public static function getFooterLinks()
    {
    if (!(self::$footerLinks)) {
            self::$footerLinks = Apiato::call('Theme@GetFooterLinksTask');;
        }
        return self::$footerLinks;
    }
}
