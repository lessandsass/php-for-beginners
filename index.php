<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>

</head>
<body>

    <h1>Recommended books</h1>

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

        function filter($items, $fn) 
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }

        $filteredBooks = filter($books, function ($book) {
            return $book['author'] === 'J.R.R. Tolkien';
        });

    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a 
                    href="<?= $book['purchaseUrl'] ?>"
                >
                    <?= $book['name'] ?> by <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body> 
</html>
