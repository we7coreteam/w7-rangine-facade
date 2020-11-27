<?php

namespace W7\Facade;

use W7\Contract\Queue\QueueFactoryInterface;
use W7\Contract\Queue\QueueInterface;

/**
 * Class Queue
 * @package W7\Facade
 *
 * @see W7\Mq\QueueManager
 */
class Queue extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return QueueFactoryInterface::class;
	}

	public static function getFacadeRoot() : QueueFactoryInterface {
		return parent::getFacadeRoot();
	}

	public static function connection($name = '') {
		return static::getFacadeRoot()->connection($name);
	}

	/**
	 * @param null $queue
	 * @return int
	 */
	public static function size($queue = null) {
		return static::getFacadeRoot()->size($queue);
	}

	/**
	 * @param $job
	 * @param string $data
	 * @param null $queue
	 * @return mixed
	 */
	public static function push($job, $data = '', $queue = null) {
		return static::getFacadeRoot()->push($job, $data, $queue);
	}

	/**
	 * @param $queue
	 * @param $job
	 * @param string $data
	 * @return mixed
	 */
	public static function pushOn($queue, $job, $data = '') {
		return static::getFacadeRoot()->pushOn($queue, $job, $data);
	}

	/**
	 * @param $payload
	 * @param null $queue
	 * @param array $options
	 * @return mixed
	 */
	public static function pushRaw($payload, $queue = null, array $options = []) {
		return static::getFacadeRoot()->pushRaw($payload, $queue, $options);
	}

	/**
	 * @param $delay
	 * @param $job
	 * @param string $data
	 * @param null $queue
	 * @return mixed
	 */
	public static function later($delay, $job, $data = '', $queue = null) {
		return static::getFacadeRoot()->later($delay, $job, $data, $queue);
	}

	/**
	 * @param $queue
	 * @param $delay
	 * @param $job
	 * @param string $data
	 * @return mixed
	 */
	public static function laterOn($queue, $delay, $job, $data = '') {
		return static::getFacadeRoot()->laterOn($queue, $delay, $job, $data);
	}

	/**
	 * @param $jobs
	 * @param string $data
	 * @param null $queue
	 * @return mixed
	 */
	public static function bulk($jobs, $data = '', $queue = null) {
		return static::getFacadeRoot()->bulk($jobs, $data, $queue);
	}

	/**
	 * @param null $queue
	 * @return \Illuminate\Contracts\Queue\Job|null
	 */
	public static function pop($queue = null) {
		return static::getFacadeRoot()->pop($queue);
	}

	/**
	 * @param $name
	 * @return QueueInterface
	 */
	public static function setConnectionName($name) {
		return static::getFacadeRoot()->setConnectionName($name);
	}

	/**
	 * @return string
	 */
	public static function getConnectionName() {
		return static::getFacadeRoot()->getConnectionName();
	}
}
