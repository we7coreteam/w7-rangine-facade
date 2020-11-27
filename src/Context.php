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

use W7\Http\Message\Server\Request;
use W7\Http\Message\Server\Response;

/**
 * Class Context
 * @package W7\Facade
 *
 * @see \W7\Core\Helper\Storage\Context
 */
class Context extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return \W7\Core\Helper\Storage\Context::class;
	}

	public static function getFacadeRoot() : \W7\Core\Helper\Storage\Context {
		return parent::getFacadeRoot();
	}

	public static function getCoroutineId() {
		return static::getFacadeRoot()->getCoroutineId();
	}

	public static function getLastCoId() {
		return static::getFacadeRoot()->getLastCoId();
	}

	public static function setContextData(array $contextData = []) {
		static::getFacadeRoot()->setContextData($contextData);
	}

	public static function getContextData() {
		return static::getFacadeRoot()->getContextData();
	}

	public static function setContextDataByKey(string $key, $val) {
		static::getFacadeRoot()->setContextDataByKey($key, $val);
	}

	public static function getContextDataByKey(string $key, $default = null) {
		return static::getFacadeRoot()->getContextDataByKey($key, $default);
	}

	public static function all() {
		return static::getFacadeRoot()->all();
	}

	public static function fork($parentCoId) {
		static::getFacadeRoot()->fork($parentCoId);
	}

	public static function destroy($coroutineId = null) {
		static::getFacadeRoot()->destroy($coroutineId);
	}

	public static function setRequest(Request $request) {
		static::getFacadeRoot()->setRequest($request);
	}

	public static function getRequest() {
		return static::getFacadeRoot()->getRequest();
	}

	public static function setResponse(Response $response) {
		static::getFacadeRoot()->setResponse($response);
	}

	public static function getResponse() {
		return static::getFacadeRoot()->getResponse();
	}
}
