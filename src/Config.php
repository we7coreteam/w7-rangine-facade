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

use W7\App;
use W7\Contract\Config\RepositoryInterface;

/**
 * Class Config
 * @package W7\Facade
 *
 * @see \W7\Core\Config\Config
 */
class Config extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return '';
	}

	public static function getFacadeRoot() : RepositoryInterface {
		return App::getApp()->getConfigger();
	}

	public static function set($key, $value) {
		return static::getFacadeRoot()->set($key, $value);
	}

	public static function has($key) {
		return static::getFacadeRoot()->has($key);
	}

	public static function get($key, $default = null) {
		return static::getFacadeRoot()->get($key, $default);
	}

	public static function all() {
		return static::getFacadeRoot()->all();
	}
}
