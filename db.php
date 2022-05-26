
<?php

include_once __DIR__ . "/Models/article/Products.php";
include_once __DIR__ . "/Models/article/Games.php";
include_once __DIR__ . "/Models/article/Foods.php";
include_once __DIR__ . "/Models/article/Accessories.php";
include_once __DIR__ . "/Models/users/Users.php";

$products = [
    new Foods(1, "crocchette al pollo", "proteiche e facilmente digeribili", 35),
    new Foods(2, "crocchette di pesce", "gustose e sazianti", 45),
    new Foods(3, "scatolette", "per i piu complicati", 20),
    new Games(1, "kong", "da mordere forte", 25),
    new Games(2, "osso", "saporito e resistente", 15),
    new Games(3, "pallina", "per giocherelloni", 10),
    new accessories(1, "cuccia", "confortevole e lavabile", 55),
    new accessories(2, "recinto", "misura 200 x 400", 75),
    new accessories(3, "cappottino", "tutte le taglie disponibili", 15),
];

$users = [
    "users_registered" => [
        new Users(1, "Arianna", "arianna@gmail.com"),
    ],
];


var_dump($products);
var_dump($users);
