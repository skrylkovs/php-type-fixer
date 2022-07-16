<?php

declare(strict_types=1);

namespace Skrylkovs\Library;

final class Casting
{
    static public function byValueFormat(mixed $value)
    {
        if(self::isInt($value) === true){
            return intval($value);
        }

        if(self::isFloat($value) === true){
            return floatval($value);
        }

        return $value;
    }

    static protected function isInt(mixed $value): bool
    {
        return is_numeric($value) && strpos($value, '.') === false;
    }

    static protected function isFloat(mixed $value): bool
    {
        return is_numeric($value) && strpos($value, '.') !== false;
    }
}
