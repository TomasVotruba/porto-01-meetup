<?php

declare(strict_types=1);

namespace PortoMeetup\TypeCoverage;

use PortoMeetup\TypeCoverage\ValueObject\Meetup;

final class MeetupFactory
{
    public function createMeetup($speakers, $talks)
    {
        return new Meetup('Porto PHP Meetup #01', $speakers, $talks);
    }
}
