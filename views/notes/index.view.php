<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php  require "views/partials/banner.php"; ?>


<section>
    <h1>
        <div class="flex flex-col h-screen p-6 max-w-4xl mx-auto">

            <ul>
                <?php foreach ($notes as $note) : ?>
                    <a href="/note?id=<?= $note['id']; ?>" class="text-blue-500 hover:underline">
                        <li><?= htmlspecialchars($note['body']); ?></li>
                    </a>
                <?php endforeach; ?> 
            </ul>   

            <p class="mt-6">
                <a href="/notes/create" class="text-blue-500 hover:underline">Create a new note</a>
            </p>

        </div>
    </h1>
</section>

<?php require "views/partials/footer.php"; ?>


