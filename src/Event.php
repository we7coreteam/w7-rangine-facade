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

use W7\Contract\Event\EventDispatcherInterface;

/**
 * Class Event
 * @package W7\Facade
 *
 * @see \W7\Core\Events\Dispatcher
 */
class Event extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return EventDispatcherInterface::class;
	}

	public static function getFacadeRoot() : EventDispatcherInterface {
		return parent::getFacadeRoot();
	}

	public static function listen($event, $listener) {
		static::getFacadeRoot()->listen($event, $listener);
	}

	public static function dispatch($event, $payload = [], $halt = false) {
		return static::getFacadeRoot()->dispatch($event, $payload, $halt);
	}
}
