<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php  require "partials/banner.php"; ?>


<section>
    <h1>
        <div class="flex flex-col items-center justify-center h-screen">

            <p><a href="/notes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-4">Go back</a></p>
            <p><?= $note['body']; ?></p>

        </div>
    </h1>
</section>

<?php require "partials/footer.php"; ?>


