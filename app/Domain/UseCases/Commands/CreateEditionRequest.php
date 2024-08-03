<?php

namespace App\Domain\UseCases\Commands;

use InvalidArgumentException;

class CreateEditionRequest
{
    public function __construct(public string $name)
    {
    }

    public static function from(array $row): CreateEditionRequest
    {
        if (!isset($row['title'])) {
            throw new InvalidArgumentException('Title is required');
        }

        return new CreateEditionRequest($row['title']);
    }
}