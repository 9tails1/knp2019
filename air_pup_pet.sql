create table pet
(
    id     int auto_increment
        primary key,
    name   varchar(255) null,
    breed  varchar(100) null,
    age    varchar(10)  null,
    weight int          null,
    bio    text         null,
    image  varchar(100) null
);

INSERT INTO air_pup.pet (id, name, breed, age, weight, bio, image) VALUES (1, 'Chew Barka', 'Bichon', '2 years', 8, 'The park, The pool or the Playground - I love to go anywhere! I am really great at... SQUIRREL!', 'pet1.png');
INSERT INTO air_pup.pet (id, name, breed, age, weight, bio, image) VALUES (2, 'Spark Pug', 'Pug', '1.5 years', 11, 'You want to go to the dog park in style? Then I am your pug!', 'pet2.png');
INSERT INTO air_pup.pet (id, name, breed, age, weight, bio, image) VALUES (3, 'Pico de Gato', 'Bengal', '5 years', 9, 'Oh hai, if you do not have a can of salmon I am not interested.', 'pet3.png');
INSERT INTO air_pup.pet (id, name, breed, age, weight, bio, image) VALUES (4, 'Pancake', 'Bulldog', '1 year', 9, 'Treats and Snoozin!', 'pancake.png');