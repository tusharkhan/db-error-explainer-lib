<?php

namespace TusharKhan\DbErrorExplainer\Lib;

// PostgreSQL SQLSTATE codes (https://www.postgresql.org/docs/current/errcodes-appendix.html).
final class PgSqlStates
{
    // Class 08 — Connection Exception
    public const CONNECTION_EXCEPTION = '08000';
    public const SQLCLIENT_UNABLE_TO_ESTABLISH_SQLCONNECTION = '08001';
    public const CONNECTION_FAILURE = '08006';

    // Class 22 — Data Exception
    public const STRING_DATA_RIGHT_TRUNCATION = '22001';
    public const NUMERIC_VALUE_OUT_OF_RANGE = '22003';
    public const INVALID_DATETIME_FORMAT = '22007';
    public const DATETIME_FIELD_OVERFLOW = '22008';
    public const DIVISION_BY_ZERO = '22012';
    public const INVALID_TEXT_REPRESENTATION = '22P02';

    // Class 23 — Integrity Constraint Violation
    public const NOT_NULL_VIOLATION = '23502';
    public const FOREIGN_KEY_VIOLATION = '23503';
    public const UNIQUE_VIOLATION = '23505';
    public const CHECK_VIOLATION = '23514';

    // Class 28 — Invalid Authorization Specification
    public const INVALID_PASSWORD = '28P01';

    // Class 3D — Invalid Catalog Name
    public const INVALID_CATALOG_NAME = '3D000';

    // Class 40 — Transaction Rollback
    public const SERIALIZATION_FAILURE = '40001';
    public const DEADLOCK_DETECTED = '40P01';

    // Class 42 — Syntax Error or Access Rule Violation
    public const INSUFFICIENT_PRIVILEGE = '42501';
    public const SYNTAX_ERROR = '42601';
    public const DUPLICATE_COLUMN = '42701';
    public const AMBIGUOUS_COLUMN = '42702';
    public const UNDEFINED_COLUMN = '42703';
    public const UNDEFINED_OBJECT = '42704';
    public const GROUPING_ERROR = '42803';
    public const DATATYPE_MISMATCH = '42804';
    public const UNDEFINED_FUNCTION = '42883';
    public const UNDEFINED_TABLE = '42P01';
    public const DUPLICATE_TABLE = '42P07';

    // Class 53 — Insufficient Resources
    public const TOO_MANY_CONNECTIONS = '53300';

    // Class 55 — Object Not In Prerequisite State
    public const LOCK_NOT_AVAILABLE = '55P03';

    // Class 57 — Operator Intervention
    public const QUERY_CANCELED = '57014';
    public const ADMIN_SHUTDOWN = '57P01';

    // Generic driver error
    public const GENERAL_ERROR = 'HY000';

    private const CLASS_NAMES = [
        '08' => 'connection_exception',
        '22' => 'data_exception',
        '23' => 'integrity_constraint_violation',
        '28' => 'invalid_authorization',
        '40' => 'transaction_rollback',
        '42' => 'syntax_error_or_access_rule_violation',
        '53' => 'insufficient_resources',
        '54' => 'program_limit_exceeded',
        '55' => 'object_not_in_prerequisite_state',
        '57' => 'operator_intervention',
        '58' => 'system_error',
        'XX' => 'internal_error',
    ];

    // Broad type from the 2-character SQLSTATE class, e.g. 23505 -> integrity_constraint_violation.
    public static function className(string $sqlState): ?string
    {
        return self::CLASS_NAMES[SqlState::classOf($sqlState)] ?? null;
    }
}
