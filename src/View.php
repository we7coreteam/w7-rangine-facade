<?php

/**
 * This file is part of Rangine
 *
 * (c) We7Team 2019 <https://www.rangine.com/>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com/ for more details
 */

namespace W7\Facade;

use W7\Contract\View\ViewInterface;

/**
 * Class View
 * @package W7\Facade
 *
 * @method static void registerFunction($name, \Closure $callback)
 * @method static void registerConst($name, $value)
 * @method static void registerObject($name, object $object)
 * @method static string render($name, $context = [])
 *
 * @see \W7\Core\View\View
 */
class View extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return ViewInterface::class;
	}
}
