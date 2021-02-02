DROP TABLE IF EXISTS alumnos CASCADE;

CREATE TABLE alumnos
(
    id        bigserial    PRIMARY KEY
  , nombre    varchar(255) NOT NULL
  , telefono  varchar(255) 
);

DROP TABLE IF EXISTS asignaturas CASCADE;

CREATE TABLE asignaturas
(
    id           bigserial    PRIMARY KEY
  , codigo       varchar(255) NOT NULL UNIQUE
  , denominacion varchar(255) 
);

DROP TABLE IF EXISTS evaluaciones CASCADE;

CREATE TABLE evaluaciones
(
    id         bigserial    PRIMARY KEY
  , evaluacion varchar(255) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS notas CASCADE;

CREATE TABLE notas
(
    id            bigserial PRIMARY KEY
  , alumno_id     bigint    NOT NULL REFERENCES alumnos (id)
  , asignatura_id bigint    NOT NULL REFERENCES asignaturas (id)
  , evaluacion_id bigint    NOT NULL REFERENCES evaluaciones (id)
  , nota          int
);