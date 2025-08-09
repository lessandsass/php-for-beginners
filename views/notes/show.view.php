<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php  require base_path("views/partials/banner.php"); ?>


<section>
    <h1>
        <div class="flex flex-col items-center justify-center h-screen">

            <p><a href="/notes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-4">Go back</a></p>
            <p><?= htmlspecialchars($note['body']); ?></p>


            <a 
                href="/notes/<?= $note['id'] ?>/edit" 
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-4"
            >
                Delete
            </a>

        </div>
    </h1>
</section>

<?php require base_path("views/partials/footer.php"); ?>


