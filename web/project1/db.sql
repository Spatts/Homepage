CREATE TABLE movie
(
    movie_name VARCHAR(25) NOT NULL,
    movie_id SERIAL PRIMARY KEY,
    movie_description TEXT NOT NULL,
    movie_photo VARCHAR(500)
);

CREATE TABLE book 
(
    book_name VARCHAR(25) NOT NULL,
    book_id SERIAL PRIMARY KEY,
    book_description TEXT NOT NULL,
    book_photo VARCHAR(500)

);

CREATE TABLE comic
(
    comic_name VARCHAR(25) NOT NULL,
    comic_id SERIAL PRIMARY KEY,
    comic_description TEXT NOT NULL,
    comic_photo VARCHAR(500)
);
