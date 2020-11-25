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

use W7\Contract\Validation\ValidatorFactoryInterface;

/**
 * Class Validator
 * @package W7\Core\Facades
 *
 * @see \W7\Core\Validation\ValidationFactory
 */
class Validator extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return ValidatorFactoryInterface::class;
	}

	public static function getFacadeRoot() : ValidatorFactoryInterface {
		return parent::getFacadeRoot();
	}

	public static function make(array $data, array $rules, array $messages = [], array $customAttributes = []) {
		return static::getFacadeRoot()->make($data, $rules, $messages, $customAttributes);
	}

	public static function extend($rule, $extension, $message = null) {
		static::getFacadeRoot()->extend($rule, $extension, $message);
	}

	public static function extendImplicit($rule, $extension, $message = null) {
		static::getFacadeRoot()->extendImplicit($rule, $extension, $message);
	}

	public static function replacer($rule, $replacer) {
		static::getFacadeRoot()->replacer($rule, $replacer);
	}
}
