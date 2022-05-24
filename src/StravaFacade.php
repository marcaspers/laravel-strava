<?php

# CodeToad
# Richie McMullen
# 2019

namespace EndlessMiles\Strava;

use Illuminate\Support\Facades\Facade;

class StravaFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Strava';
    }

}
