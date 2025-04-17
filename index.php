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
        $books = ['Book 1', 'Book 2', 'Book 3'];

        

    ?>

    <ul>
        <?php foreach ($books as $book) : 
            echo "<li>$book</li>";
         endforeach; ?> 
    </ul>

</body>
</html>
