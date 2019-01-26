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
    private $links;

    /**
     * Theme constructor.
     * @param array $links
     */
    public function __construct($links = [])
    {
        $this->links = $links;
    }

    /**
     * @param string $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $prefix = 'get';
        $suffix = 'Links';

        if (strpos($name, $prefix) == 0 && strpos($name, $suffix) == strlen($name) - strlen($suffix)) {
            $key = $name;

            if (substr($key, 0, strlen($prefix)) == $prefix) {
                $key = substr($key, strlen($prefix));
            }

            $key = substr($key, 0, strlen($key) - strlen($suffix));
            $key = $result = preg_replace('/\B([A-Z])/', '_$1', $key);
            $key = strtolower($key).'_'.strtolower($suffix);

            if (array_key_exists($key, $this->links)) {
                return $this->links[$key];
            }
        }

        return $this->$name($arguments);
    }
}
