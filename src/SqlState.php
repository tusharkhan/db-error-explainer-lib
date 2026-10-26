<?php

namespace TusharKhan\DbErrorExplainer\Lib;

// SQLSTATE is a 2-char class followed by a 3-char subclass, e.g. 42S02 -> 42 + S02.
final class SqlState
{
    public static function classOf(string $sqlState): string
    {
        return substr($sqlState, 0, 2);
    }

    public static function subclassOf(string $sqlState): string
    {
        return substr($sqlState, 2);
    }
}
