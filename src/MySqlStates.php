<?php

namespace TusharKhan\DbErrorExplainer\Lib;

final class MySqlStates
{
    // Integrity Constraint Violations (23xxx)
    public const CONSTANT_VIOLATION = '23000';
    public const NULL_VALUE_NOT_ALLOWED = '22004';
    
    // General Errors
    public const GENERAL_ERROR = 'HY000';
    public const OUT_OF_MEMORY = 'HY001';
    
    // Catalog/Schema Errors (3Dxxx)
    public const INVALID_CATALOG_NAME = '3D000';
    
    // Data Errors (22xxx)
    public const DATA_TOO_LONG = '22001';
    public const DATA_TRUNCATED = '22003';
    public const NUMERIC_VALUE_OUT_OF_RANGE = '22003';
    
    // Authorization/Access Errors (28xxx)
    public const INVALID_AUTHORIZATION = '28000';
    public const SERIALIZATION_FAILURE = '40001';
    public const INVALID_DATETIME_FORMAT = '22007';
    public const COLUMN_ALREADY_EXISTS = '42S21';
    
    // Connection Errors (08xxx)
    public const CONNECTION_EXCEPTION = '08000';
    public const CONNECTION_REJECTED = '08004';
    public const COMMUNICATION_LINK_FAILURE = '08S01';
    
    // Syntax/Access Violation (42xxx)
    public const SYNTAX_ERROR_OR_ACCESS_VIOLATION = '42000';
    public const SYNTAX_ERROR_OR_ACCESS_VIOLATION_BASE_TABLE_OR_VIEW_ALREADY_EXIST = '42S01';
    public const TABLE_OR_VIEW_NOT_FOUND = '42S02';
    public const COLUMN_NOT_FOUND = '42S22';
    
    // Cardinality Violation (21xxx)
    public const INSERT_VALUE_LIST_NOT_MATCH = '21S01';
    
    // Warning States (01xxx)
    public const WARNING = '01000';
    
    // Feature Not Supported (0Axxx)
    public const FEATURE_NOT_SUPPORTED = '0A000';
}