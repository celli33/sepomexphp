<?php

declare(strict_types=1);

namespace Eclipxe\SepomexPhp\Data;

use Eclipxe\SepomexPhp\Internal\DataValidation;
use JsonSerializable;

class City implements JsonSerializable, ExportableAsArray
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {
        DataValidation::validateArgumentId($this->id);
        DataValidation::validateName($this->name);
    }

    /** @return array{id: int, name: string} */
    public function asArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }

    /** @return array{id: int, name: string} */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
