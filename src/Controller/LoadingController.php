<?php

namespace App\Controller;

class LoadingController
{
    public function showLastDayTalks()
    {
        // example #4 - changed in Laravel 10
        dispatch_now('talks_being_loaded');

        // ...
    }
}
