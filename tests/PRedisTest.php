<?php


use BFITech\ZapCore\Logger;
use BFITech\ZapStore as zs;

class PRedisTest extends RedisTest {

	public static $engine = 'predis';

	public function test_predis() {
		$logger = new Logger(
			Logger::ERROR, getcwd() . '/zapstore-test.log');
		$config = json_decode(
			file_get_contents(getcwd() . '/zapstore-test.config.json'),
			true);
		$sql = new zs\Redis($config['predis'], $logger);
		$this->assertEquals(
			$sql->get_connection_params()['redistype'], 'predis');
	}

}
