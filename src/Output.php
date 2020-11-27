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

use Symfony\Component\Console\Question\Question;

/**
 * Class Output
 * @package W7\Core\Facades
 *
 * @see W7\Console\Io\Output
 */
class Output extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return \W7\Console\Io\Output::class;
	}

	public static function getFacadeRoot() : \W7\Console\Io\Output {
		return parent::getFacadeRoot();
	}

	public static function info($messages) {
		static::getFacadeRoot()->info($messages);
	}

	public static function block($messages, $type = null, $style = null, $prefix = ' ', $padding = false, $escape = true) {
		static::getFacadeRoot()->block($messages, $type, $style, $prefix, $padding, $escape);
	}

	public static function title($messages) {
		static::getFacadeRoot()->title($messages);
	}

	public static function section($messages) {
		static::getFacadeRoot()->section($messages);
	}

	public static function listing(array $elements) {
		static::getFacadeRoot()->listing($elements);
	}

	public static function table(array $headers, array $rows) {
		static::getFacadeRoot()->table($headers, $rows);
	}

	public static function writeList($list) {
		static::getFacadeRoot()->writeList($list);
	}

	public static function writeln($messages, $type = 1) {
		static::getFacadeRoot()->writeln($messages, $type);
	}

	public static function text($messages) {
		static::getFacadeRoot()->text($messages);
	}

	public static function comment($messages) {
		static::getFacadeRoot()->comment($messages);
	}

	public static function success($messages) {
		static::getFacadeRoot()->success($messages);
	}

	public static function error($messages) {
		static::getFacadeRoot()->error($messages);
	}

	public static function warning($messages) {
		static::getFacadeRoot()->warning($messages);
	}

	public static function note($messages) {
		static::getFacadeRoot()->note($messages);
	}

	public static function caution($messages) {
		static::getFacadeRoot()->caution($messages);
	}

	public static function ask($question, $default = null, $validator = null) {
		return static::getFacadeRoot()->ask($question, $default, $validator);
	}

	public static function askHidden($question, $validator = null) {
		return static::getFacadeRoot()->askHidden($question, $validator);
	}

	public static function confirm($question, $default = true) {
		return static::getFacadeRoot()->confirm($question, $default);
	}

	public static function choice($question, array $choices, $default = null) {
		return static::getFacadeRoot()->choice($question, $choices, $default);
	}

	public static function progressStart($max = 0) {
		static::getFacadeRoot()->progressStart($max);
	}

	public static function progressAdvance($step = 1) {
		static::getFacadeRoot()->progressAdvance($step);
	}

	public static function progressFinish() {
		static::getFacadeRoot()->progressFinish();
	}

	public static function createProgressBar($max = 0) {
		return static::getFacadeRoot()->createProgressBar($max);
	}

	public static function askQuestion(Question $question) {
		return static::getFacadeRoot()->askQuestion($question);
	}
}
