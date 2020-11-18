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
 * @method static string getLocale()
 * @method static void setLocale(string $locale)
 * @method static string|array|null get(string $key, array $replace = [], string $locale = null, bool $fallback = true)
 *
 * @see \W7\Lang\Translator\Translator
 */
class Translator extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return TranslatorInterface::class;
	}
}
