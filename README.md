# DB Error Explainer - Shared Library

Constants shared by the core and Laravel packages. It is installed automatically; you don't need to require it.

- `MySqlErrorCodes` - MySQL / MariaDB error codes with descriptions
- `MySqlStates` - SQLSTATE values MySQL uses
- `PgSqlStates` - PostgreSQL SQLSTATE codes and their classes
- `SqliteErrorCodes` - SQLite result codes with descriptions
- `SqlState` - splits a SQLSTATE into class and subclass
- `RuleIds` - rule ids, shared across databases (e.g. `duplicate_entry`)

All classes are under the `TusharKhan\DbErrorExplainer\Lib` namespace.
