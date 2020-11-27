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

use W7\Contract\Logger\LoggerFactoryInterface;

/**
 * Class Logger
 * @package W7\Facade
 *
 * @see \W7\Core\Log\Logger
 */
class Logger extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return LoggerFactoryInterface::class;
	}

	public static function getFacadeRoot() : LoggerFactoryInterface {
		return parent::getFacadeRoot();
	}

	public static function emergency(string $message, array $context = []) {
		static::getFacadeRoot()->emergency($message, $context);
	}

	public static function alert(string $message, array $context = []) {
		static::getFacadeRoot()->alert($message, $context);
	}

	public static function critical(string $message, array $context = []) {
		static::getFacadeRoot()->critical($message, $context);
	}

	public static function error(string $message, array $context = []) {
		static::getFacadeRoot()->error($message, $context);
	}

	public static function warning(string $message, array $context = []) {
		static::getFacadeRoot()->warning($message, $context);
	}

	public static function notice(string $message, array $context = []) {
		static::getFacadeRoot()->notice($message, $context);
	}

	public static function info(string $message, array $context = []) {
		static::getFacadeRoot()->info($message, $context);
	}

	public static function debug(string $message, array $context = []) {
		static::getFacadeRoot()->debug($message, $context);
	}

	public static function log($level, string $message, array $context = []) {
		static::getFacadeRoot()->log($level, $message, $context);
	}

	public static function channel($name = 'stack') {
		return static::getFacadeRoot()->channel($name);
	}
}
