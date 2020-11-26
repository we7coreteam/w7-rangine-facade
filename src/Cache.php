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

use W7\Contract\Cache\CacheFactoryInterface;

/**
 * Class Cache
 * @package W7\Facade
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

	public static function getFacadeRoot() : CacheFactoryInterface {
		return parent::getFacadeRoot();
	}

	public static function channel($name = 'default') {
		return static::getFacadeRoot()->channel($name);
	}

	/**
	 * @param $key
	 * @param null $default
	 * @return mixed
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function get($key, $default = null) {
		return static::getFacadeRoot()->get($key, $default);
	}

	/**
	 * @param $key
	 * @param $value
	 * @param null $ttl
	 * @return bool
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function set($key, $value, $ttl = null) {
		return static::getFacadeRoot()->set($key, $value, $ttl);
	}

	/**
	 * @param $key
	 * @return bool
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function delete($key) {
		return static::getFacadeRoot()->delete($key);
	}

	/**
	 * @return bool
	 */
	public static function clear() {
		return static::getFacadeRoot()->clear();
	}

	/**
	 * @param $keys
	 * @param null $default
	 * @return iterable
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function getMultiple($keys, $default = null) {
		return static::getFacadeRoot()->getMultiple($keys, $default);
	}

	/**
	 * @param $values
	 * @param null $ttl
	 * @return bool
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function setMultiple($values, $ttl = null) {
		return static::getFacadeRoot()->setMultiple($values, $ttl);
	}

	/**
	 * @param $keys
	 * @return bool
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function deleteMultiple($keys) {
		return static::getFacadeRoot()->deleteMultiple($keys);
	}

	/**
	 * @param $key
	 * @return bool
	 * @throws \Psr\SimpleCache\InvalidArgumentException
	 */
	public static function has($key) {
		return static::getFacadeRoot()->has($key);
	}
}
