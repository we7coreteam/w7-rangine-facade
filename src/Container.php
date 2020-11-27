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

/**
 * Class Container
 * @package W7\Facade
 *
 * @see \W7\Core\Container\Container
 */
class Container extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return '';
	}

	public static function getFacadeRoot() {
		return self::getContainer();
	}

	public static function registerDeferredService(array $services) {
		static::getFacadeRoot()->registerDeferredService($services);
	}

	public static function registerDeferredServiceLoader(\Closure $loader) {
		static::getFacadeRoot()->registerDeferredServiceLoader($loader);
	}

	public static function set($name, $handle, ...$params) {
		static::getFacadeRoot()->set($name, $handle, ...$params);
	}

	public static function has($name) {
		return static::getFacadeRoot()->has($name);
	}

	public static function get($name, array $params = []) {
		return static::getFacadeRoot()->get($name, $params);
	}

	public static function append($name, array $value, $default = []) {
		static::getFacadeRoot()->append($name, $value, $default);
	}

	public static function clone($name, array $params = []) {
		return static::getFacadeRoot()->clone($name, $params);
	}

	public static function delete($name) {
		static::getFacadeRoot()->delete($name);
	}

	public static function singleton($name, array $params = []) {
		return static::getFacadeRoot()->singleton($name, $params);
	}

	public static function clear() {
		static::getFacadeRoot()->clear();
	}
}
