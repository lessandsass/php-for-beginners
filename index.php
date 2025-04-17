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
                'author' => 'J.R.R. Tolkien',
                'purchaseUrl' => 'https://www.goodreads.com/book/show/2.The_Hobbit',
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> by <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>
