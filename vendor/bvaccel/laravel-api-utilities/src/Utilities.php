<?php

namespace BVAccel\LaravelApiUtilities;


use Illuminate\Cache\RateLimiter;

class Utilities
{
    private $app;

    /**
     * Utilities constructor.
     *
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }


    /**
     * Throttle
     *
     * @param string $name    The identifier
     * @param int    $seconds (optional) number of seconds to apply limit
     * @return void
     */
    public function throttle(string $name, int $seconds = 1)
    {
        (new ApiThrottler(new RateLimiter($this->app['cache.store'])))->throttle($name, $seconds);
    }
}