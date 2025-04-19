<?php

$books = [
    [
        'name' => 'The Lord of the Rings',
        'author' => 'J.R.R. Tolkien',
        'purchaseUrl' => 'https://www.goodreads.com/book/show/1.The_Lord_of_the_Rings',
        'releaseYear' => 1954,
    ],
    [
        'name' => 'The Hobbit',
        'author' => 'J.R.R. Vincent Tolkien',
        'purchaseUrl' => 'https://www.goodreads.com/book/show/2.The_Hobbit',
        'releaseYear' => 1937,
    ],
    [
        'name' => 'The Two Towers',
        'author' => 'J.R.R. Crowley Tolkien',
        'purchaseUrl' => 'https://www.goodreads.com/book/show/3.The_Two_Towers',
        'releaseYear' => 1954,
    ],
    [
        'name' => 'The Return of the King',
        'author' => 'J.R.R. Tolkien',
        'purchaseUrl' => 'https://www.goodreads.com/book/show/4.The_Return_of_the_King',
        'releaseYear' => 1955,
    ],
    [
        'name' => 'The Silmarillion',
        'author' => 'V.Vipurthanan',
        'purchaseUrl' => 'https://www.goodreads.com/book/show/5.The_Silmarillion',
        'releaseYear' => 1977,
    ],
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'J.R.R. Tolkien';
});

require "index.view.php";

