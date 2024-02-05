<?php

namespace App\Controller;

use App\ValueObject\Talk;
use DateTime;

class ConferenceController
{
    public function showLastDayTalks()
    {
        $talks = [
            new Talk('Let Rector do the Boring Work', new DateTime('2024-02-06')),
            new Talk('Parsing PHP for Fun...and Profit', new DateTime('2024-02-06')),
        ];

        return array_filter($talks, function ($talk) {
            return $talk->getStart() == new DateTime('2024-02-06');
        });
    }
}
