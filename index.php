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
            ],
            [
                'name' => 'The Hobbit',
                'author' => 'J.R.R. Vincent Tolkien',
                'purchaseUrl' => 'https://www.goodreads.com/book/show/2.The_Hobbit',
            ],
            [
                'name' => 'The Two Towers',
                'author' => 'J.R.R. Crowley Tolkien',
                'purchaseUrl' => 'https://www.goodreads.com/book/show/3.The_Two_Towers',
            ],
            [
                'name' => 'The Return of the King',
                'author' => 'J.R.R. Tolkien',
                'purchaseUrl' => 'https://www.goodreads.com/book/show/4.The_Return_of_the_King',
            ],
            [
                'name' => 'The Silmarillion',
                'author' => 'J.R.R. Tolkien',
                'purchaseUrl' => 'https://www.goodreads.com/book/show/5.The_Silmarillion',
            ],
        ];

        function filterByAuthor($books, $author) 
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'J.R.R. Vincent Tolkien') as $book) : ?>
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
