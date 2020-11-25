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

use W7\Contract\Router\RouterInterface;
use W7\Contract\Router\ValidatorInterface;

/**
 * Class Router
 * @package W7\Facade
 *
 * @see \W7\Core\Route\Router
 */
class Router extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return RouterInterface::class;
	}

	public static function getFacadeRoot() : RouterInterface {
		return parent::getFacadeRoot();
	}

	public static function registerValidator(ValidatorInterface $validator) {
		return static::getFacadeRoot()->registerValidator($validator);
	}

	public static function group($option, callable $callback) {
		return static::getFacadeRoot()->group($option, $callback);
	}

	public static function any($uri, $handler, $name = '', $defaults = []) {
		return static::getFacadeRoot()->any($uri, $handler, $name, $defaults);
	}

	public static function post($uri, $handler) {
		return static::getFacadeRoot()->post($uri, $handler);
	}

	public static function get($uri, $handler) {
		return static::getFacadeRoot()->get($uri, $handler);
	}

	public static function put($uri, $handler) {
		return static::getFacadeRoot()->put($uri, $handler);
	}

	public static function delete($uri, $handler) {
		return static::getFacadeRoot()->delete($uri, $handler);
	}

	public static function patch($uri, $handler) {
		return static::getFacadeRoot()->patch($uri, $handler);
	}

	public static function head($uri, $handler) {
		return static::getFacadeRoot()->head($uri, $handler);
	}

	public static function options($uri, $handler) {
		return static::getFacadeRoot()->options($uri, $handler);
	}

	public static function redirect($uri, $destination, $status = 302) {
		return static::getFacadeRoot()->redirect($uri, $destination, $status);
	}

	public static function view($uri, string $view) {
		return static::getFacadeRoot()->view($uri, $view);
	}

	public static function add($methods, $uri, $handler, $name = '', $defaults = []) {
		return static::getFacadeRoot()->add($methods, $uri, $handler, $name, $defaults);
	}

	public static function all($uri, $handler) {
		return static::getFacadeRoot()->all($uri, $handler);
	}

	public static function apiResource($name, $controller, $options = []) {
		return static::getFacadeRoot()->apiResource($name, $controller, $options);
	}

	public static function middleware($name) {
		return static::getFacadeRoot()->middleware($name);
	}

	public static function name($name) {
		return static::getFacadeRoot()->name($name);
	}

	public static function getData() {
		return static::getFacadeRoot()->getData();
	}
}
