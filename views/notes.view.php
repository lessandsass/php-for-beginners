<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php  require "partials/banner.php"; ?>


<section>
    <h1>
        <div class="flex flex-col items-center justify-center h-screen">

            <?php foreach ($notes as $note) : ?>
                <li>
                    <?= $note['body']; ?>
                </li>
            <?php endforeach; ?>

        </div>
    </h1>
</section>

<?php require "partials/footer.php"; ?>


