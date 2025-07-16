<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php  require "partials/banner.php"; ?>


<section>
    <h1>
        <div class="flex flex-col h-screen p-6 max-w-4xl mx-auto">

            <h1 class="text-2xl font-bold"><?= $heading; ?></h1>

            <form method="POST">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                                <div class="mt-2">
                                    <textarea 
                                        name="body" 
                                        id="body" 
                                        rows="3" 
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" 
                                        placeholder="Here's as an idea for a note..."
                                    ></textarea>

                                    <!-- <?php if (!empty($errors)) : ?>
                                        <div class="mt-2 text-sm text-red-600">
                                            <p><?= $errors[0]; ?></p>
                                        </div>
                                    <?php endif; ?> -->

                                    <?php if (isset($errors['body'])) : ?>
                                        <div class="mt-2 text-sm text-red-600">
                                            <p><?= $errors['body']; ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                
                                <button class="text-indigo-50 bg-indigo-600 px-2 py-1 rounded mt-2 hover:bg-indigo-500">
                                    Submit
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </form>



        </div>
    </h1>
</section>

<?php require "partials/footer.php"; ?>



