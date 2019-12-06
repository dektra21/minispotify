

CREATE TABLE admins (
  id serial NOT NULL,
  username varchar NOT NULL,
  password varchar NOT NULL,
  password2 varchar NOT NULL,
  name varchar NOT NULL,
  email varchar NOT NULL
) ;



CREATE TABLE categories (
  id serial NOT NULL,
  nama varchar NOT NULL
) ;



CREATE TABLE playlists (
  id serial NOT NULL,
  user_id smallint NOT NULL,
  name varchar NOT NULL
) ;


CREATE TABLE playlist_data (
  id serial NOT NULL,
  playlist_id smallint NOT NULL,
  song_id smallint NOT NULL
) ;



CREATE TABLE songs (
  id serial NOT NULL,
  name varchar NOT NULL,
  file varchar NOT NULL,
  cover varchar DEFAULT NULL,
  artist varchar NOT NULL,
  category_id smallint NOT NULL
) ;



CREATE TABLE users (
  id serial NOT NULL,
  username varchar NOT NULL,
  password varchar NOT NULL,
  password2 varchar NOT NULL,
  name varchar NOT NULL,
  email varchar NOT NULL
) ;


