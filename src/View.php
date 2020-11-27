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
 * @see \W7\Core\View\View
 */
class View extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return ViewInterface::class;
	}

	public static function getFacadeRoot() : ViewInterface {
		return parent::getFacadeRoot();
	}

	public static function registerFunction($name, \Closure $callback) {
		return static::getFacadeRoot()->registerFunction($name, $callback);
	}

	public static function registerConst($name, $value) {
		return static::getFacadeRoot()->registerConst($name, $value);
	}

	public static function registerObject($name, object $object) {
		return static::getFacadeRoot()->registerObject($name, $object);
	}

	public static function render($name, $context = []) {
		return static::getFacadeRoot()->render($name, $context);
	}
}
