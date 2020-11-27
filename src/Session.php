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

use W7\Contract\Session\SessionInterface;

/**
 * Class Session
 * @package W7\Facade
 *
 * @see \W7\Core\Session\Session
 */
class Session extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return '';
	}

	public static function getFacadeRoot() : SessionInterface {
		return Context::getRequest()->session;
	}

	public static function getName() {
		return static::getFacadeRoot()->getName();
	}

	public static function setId($sessionId) {
		return static::getFacadeRoot()->setId($sessionId);
	}

	public static function getId() {
		return static::getFacadeRoot()->getId();
	}

	public static function set($key, $value) {
		return static::getFacadeRoot()->set($key, $value);
	}

	public static function has($key) {
		return static::getFacadeRoot()->has($key);
	}

	public static function get($key, $default = '') {
		return static::getFacadeRoot()->get($key, $default);
	}

	public static function delete($keys) {
		return static::getFacadeRoot()->delete($keys);
	}

	public static function all() {
		return static::getFacadeRoot()->all();
	}

	public static function destroy() {
		return static::getFacadeRoot()->destroy();
	}

	public static function close() {
		return static::getFacadeRoot()->close();
	}

	public static function gc() {
		return static::getFacadeRoot()->gc();
	}
}
