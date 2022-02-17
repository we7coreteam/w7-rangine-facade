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

use Psr\SimpleCache\CacheInterface;
use W7\Contract\Cache\CacheFactoryInterface;

/**
 * Class Cache
 * @package W7\Facade
 *
 * @method static bool set($key, $value, $ttl = null)
 * @method static mixed get($key, $default = null)
 * @method static bool delete($key)
 * @method static bool setMultiple($values, $ttl = null)
 * @method static mixed getMultiple($keys, $default = null)
 * @method static bool deleteMultiple($keys)
 * @method static bool has($key)
 * @method static bool clear()
 * @method static CacheInterface channel($name = 'default')
 *
 * @see \W7\Core\Cache\Cache
 * @see \W7\Core\Cache\CacheFactory
 */
class Cache extends FacadeAbstract {
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return CacheFactoryInterface::class;
	}
}
