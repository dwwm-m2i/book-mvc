<?php require __DIR__.'/../partials/header.html.php'; ?>

<div class="max-w-5xl mx-auto px-3">
        <h1 class="text-center text-2xl">Connexion</h1>

        <?php if (!empty($errors)) { ?>
            <div class="bg-red-300 p-5 rounded border border-red-800 text-red-800 my-4">
                <?php foreach ($errors as $error) { ?>
                    <p><?= $error; ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <form action="" method="post" class="w-1/2 mx-auto">
            <div class="mb-4">
                <label for="email" class="block">Email</label>
                <input type="text" name="email" id="email" class="border-0 border-b focus:ring-0 w-full" value="<?= $email; ?>">
            </div>
            <div class="mb-4">
                <label for="password" class="block">Mot de passe</label>
                <input type="password" name="password" id="password" class="border-0 border-b focus:ring-0 w-full">
            </div>
            <div class="mt-10 mb-4 flex items-center gap-3">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Se rappeller de moi</label>
            </div>

            <div class="text-center">
                <a class="mr-3" href="/register">Pas de compte ?</a>
                <button class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200">Connexion</button>
            </div>
        </form>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
