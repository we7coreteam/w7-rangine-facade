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
use W7\Contract\Validation\ValidatorInterface;

/**
 * Class Validator
 * @package W7\Core\Facades
 *
 * @method static ValidatorInterface make(array $data, array $rules, array $messages = [], array $customAttributes = [])
 * @method static void extend(string $rule, \Closure|string $extension, string $message = null)
 * @method static void extendImplicit(string $rule, \Closure|string $extension, string $message = null)
 * @method static void replacer(string $rule, \Closure|string $replacer)
 *
 * @see \W7\Core\Validation\ValidationFactory
 */
class Validator extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return ValidatorFactoryInterface::class;
	}
}
