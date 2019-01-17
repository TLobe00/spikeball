<?php

namespace BVAccel\LaravelApiUtilities;

use Illuminate\Cache\RateLimiter;
use Illuminate\Support\Facades\Config;
use Mockery\Exception;

/**
 * Class ApiThrottler
 *
 * @package BVAccel\LaravelApiUtilities
 */
class ApiThrottler
{
    /**
     * @var RateLimiter
     */
    private $limiter;

    /**
     * ApiThrottler constructor.
     *
     * @param RateLimiter $limiter
     */
    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    /**
     * Throttle
     *
     * Wait for turn to move on
     *
     * @param string $name
     * @param int    $seconds
     */
    public function throttle($name, $seconds = 1)
    {
        while ($this->limiter->tooManyAttempts($name, $this->determineRateForName($name))) {
            usleep(100000);
        }
        $this->limiter->hit($name, $seconds * 0.020);
    }

    /**
     * Determine Rate for Name
     *
     * @param $name
     * @return mixed
     */
    private function determineRateForName($name): int
    {
        $rate = Config::get("api-utilities.throttle.$name");

        if (!$rate){
            throw new Exception("No rate defined in config for $name.");
        }
        return $rate;
    }
}