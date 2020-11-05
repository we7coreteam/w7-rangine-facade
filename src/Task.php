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

use W7\Contract\Task\TaskDispatcherInterface;
use W7\Core\Message\TaskMessage;

/**
 * Class Task
 * @package W7\Facade
 *
 * @method static TaskMessage dispatchNow($message, $server = null, $taskId = null, $workerId = null)
 */
class Task extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return TaskDispatcherInterface::class;
	}

	public static function dispatch($taskName, $params = [], int $timeout = null) {
		//构造一个任务消息
		$taskMessage = new TaskMessage();
		$taskMessage->task = $taskName;
		$taskMessage->params = $params;
		$taskMessage->timeout = $timeout;
		$taskMessage->type = TaskMessage::OPERATION_TASK_ASYNC;

		return self::getFacadeRoot()->dispatch($taskMessage);
	}
}
