<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php  require "partials/banner.php"; ?>


<section>
    <h1>
        <div class="flex flex-col h-screen p-6 max-w-4xl mx-auto">

            <h1><?= $heading; ?></h1>
            <form action="/note/create" method="POST">
                <label for="body">Body</label>
                <div>
                    <textarea id="body" name="body" required></textarea>
                </div>
                <button type="submit">Create</button>
            </form>

        </div>
    </h1>
</section>

<?php require "partials/footer.php"; ?>



