-- MySQL version of the database schema for the Upload Wizard extension.
-- Licence: GNU GPL v2+
-- Author: Steven Orvis

-- This stores the searches that the user performs on the wiki
CREATE TABLE IF NOT EXISTS /*$wgDBprefix*/search_query (
  sq_id              INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  sq_query            VARCHAR(255)        NOT NULL,
  sq_timestamp            TIMESTAMP        NOT NULL DEFAULT CURRENT_TIMESTAMP
) /*$wgDBTableOptions*/;

CREATE INDEX /*i*/sq_query ON /*_*/search_query (sq_query);
