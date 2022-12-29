<?php

/**
 * WeEngine Api System
 *
 * (c) We7Team 2019 <https://www.w7.cc>
 *
 * This is not a free software
 * Using it under the license terms
 * visited https://www.w7.cc for more details
 */

namespace W7\Facade;

use W7\Contract\Router\RouterInterface;
use W7\Contract\Router\ValidatorInterface;

/**
 * Class Router
 * @package W7\Facade
 *
 * @method static void registerValidator(ValidatorInterface $validator)
 * @method static bool group($option, callable $callback)
 * @method static bool any($uri, $handler, $name = '', $defaults = [])
 * @method static bool post($uri, $handler)
 * @method static bool get($uri, $handler)
 * @method static bool put($uri, $handler)
 * @method static bool delete($uri, $handler)
 * @method static bool patch($uri, $handler)
 * @method static bool head($uri, $handler)
 * @method static bool options($uri, $handler)
 * @method static bool redirect($uri, $destination, $status = 302)
 * @method static bool view($uri, string $view)
 * @method static bool add($methods, $uri, $handler, $name = '', $defaults = [])
 * @method static bool all($uri, $handler)
 * @method static mixed apiResource($name, $controller, $options = [])
 * @method static RouterInterface middleware($name)
 * @method static RouterInterface name($name)
 * @method static RouterInterface option(array $option)
 * @method static array getData()
 *
 * @see \W7\Core\Route\Router
 */
class Router extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return RouterInterface::class;
	}
}
