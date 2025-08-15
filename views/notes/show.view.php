<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php  require base_path("views/partials/banner.php"); ?>


<section>
    <h1>
        <div class="flex flex-col items-center justify-center h-screen">

            <p><a href="/notes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-4">Go back</a></p>
            <p><?= htmlspecialchars($note['body']); ?></p>


            <form 
                method="POST"
                class="mt-6"
            >
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <input type="hidden" name="_method" value="DELETE">
                <button 
                    type="submit" 
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-4"
                >
                    Delete
                </button>
            </form>

        </div>
    </h1>
</section>

<?php require base_path("views/partials/footer.php"); ?>


