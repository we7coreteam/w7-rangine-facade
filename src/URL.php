<?php

namespace W7\Facade;

use W7\Contract\Router\UrlGenerator;

/**
 * @method static string asset(string $path, bool $secure = null)
 * @method static string current()
 * @method static string route(string $name, $parameters = [], bool $absolute = true)
 * @method static string secure(string $path, array $parameters = [])
 * @method static string to(string $path, $extra = [], bool $secure = null)
 *
 * @see UrlGenerator
 */
class URL extends FacadeAbstract {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return UrlGenerator::class;
    }
}
