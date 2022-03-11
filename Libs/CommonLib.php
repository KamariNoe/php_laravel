<?php


namespace App\Libs;

use App\Libs\RedisLib\RedisClient;

class CommonLib
{
    public static function getRedisClientInstall()
    {
        try {
            return new RedisClient(env('REDIS_HOST'), env('REDIS_PORT'), env('REDIS_PASSWORD'), env('REDIS_DB', 0));
        } catch (\Exception $ex) {
            return null;
        } catch (\InvalidArgumentException $ex1) {
            return null;
        }
    }
}
