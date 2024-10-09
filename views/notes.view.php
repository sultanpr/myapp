<?php require "partials/head.php"; ?>
    <?php require "partials/nav.php" ?>

    <?php require "partials/banner.php"; ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note): ?>
            <ul>
                <li>
                    <a href="/note?id=<?= $note['user_id'] ?>" class="text-blue-700 underline">
                        <?= $note['title']; ?>
                    </a>
                </li>
            </ul>
        <?php endforeach ?>

        <p class="mt-6">
            <a href="/notes/create-note" class="text-blue-700 hover:underline">Create Note</a>
        </p>

        </div>
    </main>
    
<?php require "partials/footer.php" ?>