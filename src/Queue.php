<?php

namespace W7\Facade;

use W7\Contract\Queue\QueueFactoryInterface;
use W7\Contract\Queue\QueueInterface;

/**
 * Class Queue
 * @package W7\Facade
 *
 * @method static QueueInterface connection($name = '');
 * @method static int size($queue = null);
 * @method static mixed push($job, $data = '', $queue = null);
 * @method static mixed pushOn($queue, $job, $data = '');
 * @method static mixed pushRaw($payload, $queue = null, array $options = []);
 * @method static mixed later($delay, $job, $data = '', $queue = null);
 * @method static mixed laterOn($queue, $delay, $job, $data = '');
 * @method static mixed bulk($jobs, $data = '', $queue = null);
 * @method static mixed pop($queue = null);
 * @method static string getConnectionName();
 * @method static QueueInterface setConnectionName($name);
 * @method static void createPayloadUsing($callback)
 */
class Queue extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return QueueFactoryInterface::class;
	}
}
