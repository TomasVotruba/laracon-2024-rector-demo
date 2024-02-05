<?php

namespace App\Controller;

class CustomRuleDispatchController
{
    public function showLastDayTalks()
    {
        // example #4 - changed in Laravel 10
        \dispatch_now('some.command');
    }
}
