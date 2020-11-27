<?php

/**
 * Rangine Lock
 *
 * (c) We7Team 2019 <https://www.rangine.com>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com for more details
 */

namespace W7\Facade;

use W7\Contract\Lock\LockFactoryInterface;

/**
 * Class LockFactory
 * @package W7\Facade
 */
class Lock extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return LockFactoryInterface::class;
	}

	public static function getFacadeRoot() : LockFactoryInterface {
		return parent::getFacadeRoot();
	}

	public static function getLock($name, $seconds, $owner = null) {
		return static::getFacadeRoot()->getLock($name, $seconds, $owner);
	}
}
