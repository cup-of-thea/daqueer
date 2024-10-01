<?php

namespace App\Domain\ValueObjects;

use Carbon\Carbon;
use InvalidArgumentException;

readonly class RelativeTimePosition
{
    private function __construct(
        private Carbon $startAt,
        private Carbon $endAt
    ) {
        if ($startAt->isAfter($endAt)) {
            throw new InvalidArgumentException('Start date must be before end date');
        }
    }

    public static function create(Carbon $startAt, Carbon $endAt): self
    {
        return new self($startAt, $endAt);
    }

    public function getPosition(): TimePositionEnum
    {
        $now = Carbon::now();

        if ($now->isBefore($this->startAt)) {
            return TimePositionEnum::FUTURE;
        }

        if ($now->isAfter($this->endAt)) {
            return TimePositionEnum::PAST;
        }

        return TimePositionEnum::PRESENT;
    }
}