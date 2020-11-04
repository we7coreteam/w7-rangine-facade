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

/**
 * Class Config
 * @package W7\Facade
 *
 * @method static string getBuiltInConfigPath()
 * @method static mixed get($key, $default = null)
 * @method static array set($key, $value)
 *
 * @see \W7\Core\Config\Config
 */
class Config extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return '';
	}

	public static function getFacadeRoot() {
		return App::getApp()->getConfigger();
	}
}
