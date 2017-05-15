<?php


namespace BFITech\ZapStore;


class PRedis extends RedisConn {

	/**
	 * Constructor.
	 *
	 * @param array $params Redis connection dict exactly the same with
	 *     that in the parent class except that 'redistype' key can be
	 *     omitted.
	 * @param Logger $logger Instance of BFITech\\ZapCore\\Logger.
	 */
	public function __construct($params, $logger=null) {
		$params['redistype'] = 'redis';
		parent::__construct($params, $logger);
	}

}

