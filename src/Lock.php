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
use W7\Contract\Lock\LockInterface;

/**
 * Class LockFactory
 * @package W7\Facade
 *
 * @method static LockFactoryInterface channel($channel = 'default');
 * @method static LockInterface getLock($name, $seconds, $owner = null);
 */
class Lock extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return LockFactoryInterface::class;
	}
}
