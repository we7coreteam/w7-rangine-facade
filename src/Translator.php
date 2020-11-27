<?php

/**
 * Rangine lang
 *
 * (c) We7Team 2019 <https://www.rangine.com>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com for more details
 */

namespace W7\Facade;

use W7\Contract\Translation\TranslatorInterface;

/**
 * Class Translator
 * @package W7\Facade
 *
 * @see \W7\Lang\Translator\Translator
 */
class Translator extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return TranslatorInterface::class;
	}

	public static function getFacadeRoot() : TranslatorInterface {
		return parent::getFacadeRoot();
	}

	public static function setLocale(string $locale) {
		static::getFacadeRoot()->setLocale($locale);
	}

	public static function getLocale() {
		return static::getFacadeRoot()->getLocale();
	}

	public static function get(string $key, array $replace = [], string $locale = null) {
		return static::getFacadeRoot()->get($key, $replace, $locale);
	}

	public static function choice($key, $number, array $replace = [], $locale = null) {
		return static::getFacadeRoot()->choice($key, $number, $replace, $locale);
	}
}
