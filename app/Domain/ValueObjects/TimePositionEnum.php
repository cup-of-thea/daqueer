<?php

namespace App\Domain\ValueObjects;

enum TimePositionEnum
{
    case PAST;
    case PRESENT;
    case FUTURE;
}
