<?php

namespace Prometheus\Storage;

use PHPUnit\Framework\TestCase;

/**
 * @requires extension redis
 */
class RedisTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionOnConnectionFailure()
    {
        $this->expectExceptionMessage("Can't connect to Redis server");
        $this->expectException(\Prometheus\Exception\StorageException::class);
        $redis = new Redis(array('host' => 'doesntexist.test'));
        $redis->flushRedis();
    }

}
