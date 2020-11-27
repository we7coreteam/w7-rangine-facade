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

use RuntimeException;
use W7\App;

abstract class FacadeAbstract {
	protected static function getContainer() {
		return App::getApp()->getContainer();
	}

	/**
	 * Get the root object behind the facade.
	 *
	 * @return mixed
	 */
	public static function getFacadeRoot() {
		return self::getContainer()->singleton(static::getFacadeAccessor());
	}

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 *
	 * @throws \RuntimeException
	 */
	abstract protected static function getFacadeAccessor();

	/**
	 * Handle dynamic, static calls to the object.
	 *
	 * @param  string  $method
	 * @param  array  $args
	 * @return mixed
	 *
	 * @throws \RuntimeException
	 */
	public static function __callStatic($method, $args) {
		$instance = static::getFacadeRoot();

		if (! $instance) {
			throw new RuntimeException('A facade root has not been set.');
		}

		return $instance->$method(...$args);
	}

	public function __call($name, $arguments) {
		return static::__callStatic($name, $arguments);
	}

	public function __set($name, $value) {
		$instance = static::getFacadeRoot();
		$instance->$name = $value;
	}

	public function __get($name) {
		$instance = static::getFacadeRoot();
		return $instance->$name;
	}
}
