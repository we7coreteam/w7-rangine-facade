<?php

namespace W7\Facade;

use Illuminate\Redis\Connections\Connection;
use W7\Contract\Redis\RedisFactoryInterface;
use W7\Core\Redis\ConnectionResolver;

/**
 * @method static Connection channel(string $name = null)
 *
 * @see ConnectionResolver
 * @see RedisFactoryInterface
 */
class Redis extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return RedisFactoryInterface::class;
	}
}
