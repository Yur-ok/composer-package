<?php

declare(strict_types=1);

namespace FromYurok\SimpleLib;

class StringProcessor
{
    public function getLength(string $str): int
    {
        return mb_strlen($str);
    }
}
