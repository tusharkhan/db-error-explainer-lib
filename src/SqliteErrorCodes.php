<?php

namespace TusharKhan\DbErrorExplainer\Lib;

// SQLite primary result codes (https://www.sqlite.org/rescode.html). PDO reports these as errorInfo[1].
final class SqliteErrorCodes
{
    public const SQLITE_ERROR = 1;
    public const SQLITE_BUSY = 5;
    public const SQLITE_LOCKED = 6;
    public const SQLITE_READONLY = 8;
    public const SQLITE_CORRUPT = 11;
    public const SQLITE_FULL = 13;
    public const SQLITE_CANTOPEN = 14;
    public const SQLITE_CONSTRAINT = 19;
    public const SQLITE_MISMATCH = 20;
    public const SQLITE_NOTADB = 26;

    public static function getDescription(int $code): string
    {
        return match ($code) {
            self::SQLITE_ERROR => 'SQL error or missing database object',
            self::SQLITE_BUSY => 'Database file is locked',
            self::SQLITE_LOCKED => 'A table in the database is locked',
            self::SQLITE_READONLY => 'Attempt to write a readonly database',
            self::SQLITE_CORRUPT => 'Database disk image is malformed',
            self::SQLITE_FULL => 'Database or disk is full',
            self::SQLITE_CANTOPEN => 'Unable to open the database file',
            self::SQLITE_CONSTRAINT => 'Constraint violation',
            self::SQLITE_MISMATCH => 'Data type mismatch',
            self::SQLITE_NOTADB => 'File is not a database',
            default => 'Unknown SQLite error code',
        };
    }
}
