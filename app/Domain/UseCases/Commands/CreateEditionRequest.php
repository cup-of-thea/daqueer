<?php

namespace App\Domain\UseCases\Commands;

use Illuminate\Support\Carbon;
use InvalidArgumentException;

class CreateEditionRequest
{
    public function __construct(
        public string $title,
        public ?string $description,
        public ?Carbon $publishedAt,
        public ?Carbon $startAt,
        public ?Carbon $endAt
    ) {
    }

    public static function from(array $row): CreateEditionRequest
    {
        if (!isset($row['title'])) {
            throw new InvalidArgumentException('Title is required');
        }

        return new CreateEditionRequest(
            $row['title'],
            $row['description'] ?? null,
            $row['published_at'] ?? null,
            $row['start_at'] ?? null,
            $row['end_at'] ?? null
        );
    }
}