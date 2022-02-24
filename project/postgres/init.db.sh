#!/bin/bash
psql -U postgres <<-EOSQL
    CREATE USER docker WITH PASSWORD 'docker';
    CREATE DATABASE snippet_db;
    GRANT ALL PRIVILEGES ON DATABASE snippet_db TO docker;
    \connect snippet_db docker
    BEGIN;
        CREATE TABLE DOCUMENT_TEMPLATE(
            ID INTEGER NOT NULL,
            NAME TEXT,
            SHORT_DESCRIPTION TEXT,
            AUTHOR TEXT,
            DESCRIPTION TEXT,
            CONTENT TEXT,
            LAST_UPDATED DATE,
            CREATED DATE
        );
    INSERT INTO DOCUMENT_TEMPLATE(id,name, short_description, author, description,content, last_updated,created)
    SELECT id, 'name', md5(random()::text), 'name2'
        ,md5(random()::text),md5(random()::text)
        ,NOW() - '1 day'::INTERVAL * (RANDOM()::int * 100)
        ,NOW() - '1 day'::INTERVAL * (RANDOM()::int * 100 + 100)
    FROM generate_series(1,100) id;
    COMMIT;
    select * from document_template limit 3;
EOSQL