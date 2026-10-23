<?php

namespace TusharKhan\DbErrorExplainer\Lib;

final class MySqlErrorCodes
{
    // Basic Operations (1002-1099)
    public const ER_NO = 1002;
    public const ER_YES = 1003;
    public const ER_CANT_CREATE_FILE = 1004;
    public const ER_CANT_CREATE_TABLE = 1005;
    public const ER_CANT_CREATE_DB = 1006;
    public const ER_DB_CREATE_EXISTS = 1007;
    public const ER_DB_DROP_EXISTS = 1008;
    public const ER_DB_DROP_RMDIR = 1010;
    public const ER_CANT_FIND_SYSTEM_REC = 1012;
    public const ER_CANT_GET_STAT = 1013;
    public const ER_CANT_LOCK = 1015;
    public const ER_CANT_OPEN_FILE = 1016;
    public const ER_FILE_NOT_FOUND = 1017;
    public const ER_CANT_READ_DIR = 1018;
    public const ER_CHECKREAD = 1020;
    public const ER_DUP_KEY = 1022;

    // Database Errors (1045-1099)
    public const ER_ACCESS_DENIED_ERROR = 1045;
    public const ER_NO_DB_ERROR = 1046;
    public const ER_BAD_NULL_ERROR = 1048;
    public const ER_BAD_DB_ERROR = 1049;
    public const ER_TABLE_EXISTS_ERROR = 1050;
    public const ER_BAD_TABLE_ERROR = 1051;
    public const ER_NON_UNIQ_ERROR = 1052;
    public const ER_BAD_FIELD_ERROR = 1054;
    public const ER_DUP_KEYNAME = 1061;
    public const ER_DUP_ENTRY = 1062;
    public const ER_WRONG_FIELD_SPEC = 1063;
    public const ER_PARSE_ERROR = 1064;
    public const ER_EMPTY_QUERY = 1065;
    public const ER_NONUNIQ_TABLE = 1066;
    public const ER_INVALID_DEFAULT = 1067;

    // Thread and Connection Errors (1094-1099)
    public const ER_NO_SUCH_THREAD = 1094;
    public const ER_KILL_DENIED_ERROR = 1095;
    public const ER_NO_TABLES_USED = 1096;
    public const ER_TOO_BIG_SET = 1097;
    public const ER_NO_UNIQUE_LOGFILE = 1098;

    // Function and Library Errors (1127-1135)
    public const ER_CANT_FIND_DL_ENTRY = 1127;
    public const ER_FUNCTION_NOT_DEFINED = 1128;
    public const ER_HOST_IS_BLOCKED = 1129;
    public const ER_HOST_NOT_PRIVILEGED = 1130;
    public const ER_PASSWORD_ANONYMOUS_USER = 1131;

    // Column and Table Errors (1136-1149)
    public const ER_WRONG_VALUE_COUNT_ON_ROW = 1136;
    public const ER_CANT_REOPEN_TABLE = 1137;
    public const ER_INVALID_USE_OF_NULL = 1138;
    public const ER_REGEXP_ERROR = 1139;
    public const ER_MIX_OF_GROUP_FUNC_AND_FIELDS = 1140;
    public const ER_NONEXISTING_GRANT = 1141;
    public const ER_TABLEACCESS_DENIED_ERROR = 1142;
    public const ER_COLUMNACCESS_DENIED_ERROR = 1143;
    public const ER_ILLEGAL_GRANT_FOR_TABLE = 1144;
    public const ER_GRANT_WRONG_HOST_OR_USER = 1145;
    public const ER_NO_SUCH_TABLE = 1146;
    public const ER_NONEXISTING_TABLE_GRANT = 1147;
    public const ER_NOT_ALLOWED_COMMAND = 1148;
    public const ER_SYNTAX_ERROR = 1149;

    // NULL and Default Value Errors
    public const ER_NO_DEFAULT_FOR_FIELD = 1364;

    // Connection Errors (1152-1161)
    public const ER_ABORTING_CONNECTION = 1152;
    public const ER_NET_PACKET_TOO_LARGE = 1153;
    public const ER_NET_READ_ERROR_FROM_PIPE = 1154;
    public const ER_NET_FCNTL_ERROR = 1155;
    public const ER_NET_PACKETS_OUT_OF_ORDER = 1156;
    public const ER_NET_UNCOMPRESS_ERROR = 1157;
    public const ER_NET_READ_ERROR = 1158;
    public const ER_NET_READ_INTERRUPTED = 1159;
    public const ER_NET_ERROR_ON_WRITE = 1160;
    public const ER_NET_WRITE_INTERRUPTED = 1161;
    public const ER_TOO_LONG_STRING = 1162;
    public const ER_TABLE_CANT_HANDLE_BLOB = 1163;

    // Command and Option Errors (1234-1299)
    public const ER_CANT_USE_OPTION_HERE = 1234;
    public const ER_NOT_SUPPORTED_YET = 1235;
    public const ER_MASTER_FATAL_ERROR_READING_BINLOG = 1236;
    public const ER_WARN_DATA_OUT_OF_RANGE = 1264;
    public const ER_JT_VALUE_OUT_OF_RANGE = 3669;
    public const WARN_DATA_TRUNCATED = 1265;
    public const ER_WARN_USING_OTHER_HANDLER = 1266;
    public const ER_CANT_AGGREGATE_2COLLATIONS = 1267;
    public const ER_REVOKE_GRANTS = 1269;
    public const ER_UNKNOWN_KEY_CACHE = 1284;
    public const ER_WARN_HOSTNAME_WONT_WORK = 1285;
    public const ER_UNKNOWN_STORAGE_ENGINE = 1286;
    public const ER_WARN_DEPRECATED_SYNTAX = 1287;
    public const ER_NON_UPDATABLE_TABLE = 1288;
    public const ER_FEATURE_DISABLED = 1289;
    public const ER_NOT_SUPPORTED_AUTH_MODE = 1295;
    public const ER_GET_ERRMSG = 1296;
    public const ER_GET_TEMPORARY_ERRMSG = 1297;
    public const ER_UNKNOWN_TIME_ZONE = 1298;
    public const ER_WARN_INVALID_TIMESTAMP = 1299;
    public const ER_INVALID_CHARACTER_STRING = 1300;

    // Replication and Log Errors (1379-1391)
    public const ER_LOG_PURGE_UNKNOWN_ERR = 1379;
    public const ER_RELAY_LOG_INIT = 1380;
    public const ER_NO_BINARY_LOGGING = 1381;
    public const ER_RESERVED_SYNTAX = 1382;
    public const ER_PS_MANY_PARAM = 1390;
    public const ER_KEY_PART_0 = 1391;

    // Stored Procedure and Data Errors (1406-1411)
    public const ER_DATA_TOO_LONG = 1406;
    public const ER_SP_BAD_SQLSTATE = 1407;
    public const ER_STARTUP = 1408;
    public const ER_LOAD_FROM_FIXED_SIZE_ROWS_TO_VAR = 1409;
    public const ER_CANT_CREATE_USER_WITH_GRANT = 1410;
    public const ER_WRONG_VALUE_FOR_TYPE = 1411;

    // Foreign Key Constraints
    public const ER_ROW_IS_REFERENCED_2 = 1451;
    public const ER_NO_REFERENCED_ROW_2 = 1452;
    public const ER_FOREIGN_KEY_ON_PARTITIONED = 1506;
    public const ER_DROP_INDEX_FK = 1553;
    public const ER_FOREIGN_DUPLICATE_KEY_OLD_UNUSED = 1557;
    public const ER_TRUNCATE_ILLEGAL_FK = 1701;
    public const ER_TABLE_IN_FK_CHECK = 1725;
    public const ER_PARTITION_EXCHANGE_FOREIGN_KEY = 1740;
    public const ER_FOREIGN_DUPLICATE_KEY_WITH_CHILD_INFO = 1761;
    public const ER_FOREIGN_DUPLICATE_KEY_WITHOUT_CHILD_INFO = 1762;
    public const ER_DISCARD_FK_CHECKS_RUNNING = 1807;
    public const ER_FK_NO_INDEX_CHILD = 1821;
    public const ER_FK_NO_INDEX_PARENT = 1822;
    public const ER_FK_FAIL_ADD_SYSTEM = 1823;
    public const ER_FK_INCORRECT_OPTION = 1825;
    public const ER_FK_DUP_NAME = 1826;
    public const ER_FK_COLUMN_CANNOT_DROP = 1828;
    public const ER_FK_COLUMN_CANNOT_DROP_CHILD = 1829;
    public const ER_FK_COLUMN_NOT_NULL = 1830;
    public const ER_FK_COLUMN_CANNOT_CHANGE = 1832;
    public const ER_FK_COLUMN_CANNOT_CHANGE_CHILD = 1833;
    public const ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_RENAME = 1849;
    public const ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_FK_CHECK = 1851;
    public const ER_FK_DEPTH_EXCEEDED = 3008;
    public const ER_WRONG_FK_OPTION_FOR_GENERATED_COLUMN = 3104;
    public const ER_CANNOT_ADD_FOREIGN_BASE_COL_VIRTUAL = 3174;
    public const ER_CANNOT_ADD_FOREIGN_BASE_COL_STORED = 3192;
    public const ER_FK_CANNOT_DROP_PARENT = 3730;
    public const ER_FK_CANNOT_USE_VIRTUAL_COLUMN = 3733;
    public const ER_FK_NO_COLUMN_PARENT = 3734;
    public const ER_FK_CANNOT_CHANGE_ENGINE = 3776;
    public const ER_FK_INCOMPATIBLE_COLUMNS = 3780;
    public const ER_CHECK_CONSTRAINT_CLAUSE_USING_FK_REFER_ACTION_COLUMN = 3823;
    public const ER_ALTER_CONSTRAINT_ENFORCEMENT_NOT_SUPPORTED = 3941;
    public const  ER_FOREIGN_KEY_WITH_ATOMIC_CREATE_SELECT = 3978;
    public const  ER_GRP_RPL_FK_WITH_CASCADE_UNSUPPORTED = 'MY-011543';
    public const  ER_SCHEMA_NAME_IN_UPPER_CASE_NOT_ALLOWED_FOR_FK = 'MY-013522';
    public const   ER_TABLE_NAME_IN_UPPER_CASE_NOT_ALLOWED_FOR_FK = 'MY-013523';

    // Server and Name Errors (1474-1478)
    public const ER_NAME_BECOMES_EMPTY = 1474;
    public const ER_AMBIGUOUS_FIELD_TERM = 1475;
    public const ER_FOREIGN_SERVER_EXISTS = 1476;
    public const ER_FOREIGN_SERVER_DOESNT_EXIST = 1477;
    public const ER_ILLEGAL_HA_CREATE_OPTION = 1478;

    // Locale and Query Cache (1649-1651)
    public const ER_UNKNOWN_LOCALE = 1649;
    public const ER_SLAVE_IGNORE_SERVER_IDS = 1650;
    public const ER_QUERY_CACHE_DISABLED = 1651;

    // InnoDB and Storage Errors (1795-1863)
    public const ER_INNODB_FT_LIMIT = 1795;
    public const ER_INNODB_NO_FT_TEMP_TABLE = 1796;
    public const ER_INNODB_FT_WRONG_DOCID_COLUMN = 1797;
    public const ER_INNODB_FT_WRONG_DOCID_INDEX = 1798;
    public const ER_TABLE_IN_SYSTEM_TABLESPACE = 1809;
    public const ER_IO_READ_ERROR = 1810;
    public const ER_IO_WRITE_ERROR = 1811;
    public const ER_TABLESPACE_MISSING = 1812;
    public const ER_TABLESPACE_EXISTS = 1813;
    public const ER_TABLESPACE_DISCARDED = 1814;
    public const ER_DUP_UNKNOWN_IN_INDEX = 1859;
    public const ER_IDENT_CAUSES_TOO_LONG_PATH = 1860;
    public const ER_ALTER_OPERATION_NOT_SUPPORTED_REASON_NOT_NULL = 1861;
    public const ER_MUST_CHANGE_PASSWORD_LOGIN = 1862;
    public const ER_ROW_IN_WRONG_PARTITION = 1863;

    // Advanced Error Codes (3000+)
    public const ER_STD_UNKNOWN_EXCEPTION = 3054;
    public const ER_GIS_DATA_WRONG_ENDIANESS = 3055;
    public const ER_CHANGE_MASTER_PASSWORD_LENGTH = 3056;
    public const ER_USER_LOCK_WRONG_NAME = 3057;
    public const ER_GROUP_REPLICATION_COMMUNICATION_LAYER_JOIN_ERROR = 3097;
    public const ER_BEFORE_DML_VALIDATION_ERROR = 3098;
    public const ER_PREVENTS_VARIABLE_WITHOUT_RBR = 3099;

    // Recent Error Codes (3800+)
    public const ER_WARN_DEPRECATED_ZEROFILL = 3861;
    public const ER_CLONE_DONOR = 3862;
    public const ER_CLONE_PROTOCOL = 3863;
    public const ER_CLONE_DONOR_VERSION = 3864;
    public const ER_DA_UNKNOWN_ERROR_NUMBER = 3885;
    public const ER_COLUMN_CHANGE_SIZE = 3886;
    public const ER_REGEXP_INVALID_CAPTURE_GROUP_NAME = 3887;
    public const ER_DA_SSL_LIBRARY_ERROR = 3888;
    public const ER_CLIENT_LOCAL_FILES_DISABLED = 3948;
    public const ER_IMP_INCOMPATIBLE_CFG_VERSION = 3949;
    public const ER_DA_OOM = 3950;
    public const ER_DA_UDF_INVALID_ARGUMENT_TO_SET_CHARSET = 3951;
    public const ER_MISPLACED_INTO = 3954;
    public const ER_USER_ACCESS_DENIED_FOR_USER_ACCOUNT_BLOCKED_BY_PASSWORD_LOCK = 3955;
    public const ER_WARN_DEPRECATED_YEAR_UNSIGNED = 3956;
    public const ER_CLONE_NETWORK_PACKET = 3957;

    // Common application errors
    public const ER_CON_COUNT_ERROR = 1040;
    public const ER_WRONG_FIELD_WITH_GROUP = 1055;
    public const ER_DUP_FIELDNAME = 1060;
    public const ER_TOO_LONG_KEY = 1071;
    public const ER_CANT_DROP_FIELD_OR_KEY = 1091;
    public const ER_LOCK_WAIT_TIMEOUT = 1205;
    public const ER_LOCK_DEADLOCK = 1213;
    public const ER_CANNOT_ADD_FOREIGN = 1215;
    public const ER_TRUNCATED_WRONG_VALUE = 1292;
    public const ER_TRUNCATED_WRONG_VALUE_FOR_FIELD = 1366;
    public const ER_FK_CANNOT_OPEN_PARENT = 1824;

    // Client errors (raised by the driver, not the server)
    public const CR_CONNECTION_ERROR = 2002;
    public const CR_SERVER_GONE_ERROR = 2006;

    /**
     * Get error code description
     *
     * @param int $code MySQL error code
     * @return string Description of the error
     */
    public static function getDescription(int $code): string
    {
        return match ($code) {
            self::ER_NO => 'NO',
            self::ER_YES => 'YES',
            self::ER_NO_DB_ERROR => 'Database not selected',
            self::ER_CANT_CREATE_FILE => "Can't create file",
            self::ER_CANT_CREATE_TABLE => "Can't create table",
            self::ER_CANT_CREATE_DB => "Can't create database",
            self::ER_DB_CREATE_EXISTS => 'Database already exists',
            self::ER_DB_DROP_EXISTS => "Can't drop database; database doesn't exist",
            self::ER_BAD_DB_ERROR => 'Unknown database',
            self::ER_TABLE_EXISTS_ERROR => 'Table already exists',
            self::ER_BAD_TABLE_ERROR => 'Unknown table',
            self::ER_NON_UNIQ_ERROR => 'Column in field list is ambiguous',
            self::ER_BAD_FIELD_ERROR => 'Unknown column',
            self::ER_DUP_KEYNAME => 'Duplicate key name',
            self::ER_DUP_ENTRY => 'Duplicate entry for key',
            self::ER_PARSE_ERROR => 'SQL syntax error',
            self::ER_INVALID_DEFAULT => 'Invalid default value',
            self::ER_BAD_NULL_ERROR => 'Column cannot be null',
            self::ER_NO_DEFAULT_FOR_FIELD => "Field doesn't have a default value",
            self::ER_NO_SUCH_TABLE => "Table doesn't exist",
            self::ER_DATA_TOO_LONG => 'Data too long for column',
            self::ER_WARN_DATA_OUT_OF_RANGE => 'Out of range value for column',
            self::ER_ROW_IS_REFERENCED_2 => 'Cannot delete or update a parent row: foreign key constraint fails',
            self::ER_NO_REFERENCED_ROW_2 => 'Cannot add or update a child row: foreign key constraint fails',
            self::ER_CON_COUNT_ERROR => 'Too many connections',
            self::ER_WRONG_FIELD_WITH_GROUP => 'Column not in GROUP BY (only_full_group_by)',
            self::ER_DUP_FIELDNAME => 'Duplicate column name',
            self::ER_TOO_LONG_KEY => 'Specified key was too long',
            self::ER_CANT_DROP_FIELD_OR_KEY => "Can't drop column or key; it doesn't exist",
            self::ER_LOCK_WAIT_TIMEOUT => 'Lock wait timeout exceeded',
            self::ER_LOCK_DEADLOCK => 'Deadlock found when trying to get lock',
            self::ER_CANNOT_ADD_FOREIGN => 'Cannot add foreign key constraint',
            self::ER_TRUNCATED_WRONG_VALUE => 'Incorrect value',
            self::ER_TRUNCATED_WRONG_VALUE_FOR_FIELD => 'Incorrect value for column',
            self::ER_FK_CANNOT_OPEN_PARENT => 'Failed to open the referenced table',
            self::CR_CONNECTION_ERROR => "Can't connect to MySQL server",
            self::CR_SERVER_GONE_ERROR => 'MySQL server has gone away',
            default => 'Unknown MySQL error code'
        };
    }

    /**
     * Check if an error code is related to foreign key constraints
     *
     * @param int $code MySQL error code
     * @return bool
     */
    public static function isForeignKeyError(int $code): bool
    {
        return in_array($code, [
            self::ER_ROW_IS_REFERENCED_2,
            self::ER_NO_REFERENCED_ROW_2,
        ]);
    }

    /**
     * Check if an error code is related to duplicate keys
     *
     * @param int $code MySQL error code
     * @return bool
     */
    public static function isDuplicateKeyError(int $code): bool
    {
        return in_array($code, [
            self::ER_DUP_KEY,
            self::ER_DUP_ENTRY,
            self::ER_DUP_KEYNAME,
            self::ER_DUP_UNKNOWN_IN_INDEX,
        ]);
    }

    /**
     * Check if an error code is related to table operations
     *
     * @param int $code MySQL error code
     * @return bool
     */
    public static function isTableError(int $code): bool
    {
        return in_array($code, [
            self::ER_NO_SUCH_TABLE,
            self::ER_BAD_TABLE_ERROR,
            self::ER_TABLE_EXISTS_ERROR,
            self::ER_CANT_CREATE_TABLE,
            self::ER_NONEXISTING_TABLE_GRANT,
        ]);
    }
}
