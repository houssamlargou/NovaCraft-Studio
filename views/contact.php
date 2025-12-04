<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/output.css">
</head>
<body>
    <?php require(__DIR__ . "/../templates/header.php"); ?> 
    <section class="flex flex-col justify-center items-center py-16">
        <div class="flex flex-col gap-2">
            <div class="text-4xl font-semibold">Contactez-nous</div>
            <div class="bg-neutral-200 w-150 rounded-lg p-4">
                <div class="flex flex-col gap-2 p-3">
                    <label for="name" class="text-2xl">Nom complet</label>
                    <input type="text" id="name" placeholder="Votre nom" class="w-full px-3 py-1 border-2 border-neutral-400 rounded-lg">
                </div>
                <div class="flex flex-col gap-2 p-3">
                    <label for="email" class="text-2xl">Email</label>
                    <input type="email" id="email" placeholder="Votre nom" class="w-full px-3 py-1 border-2 border-neutral-400 rounded-lg">
                </div>
                <div class="flex flex-col gap-2 p-3">
                    <label for="message" class="text-2xl">Message</label>
                    <textarea name="" id="message" class="border-2 border-neutral-400 p-2"></textarea>
                </div>
            </div>
        </div>
    </section>
    <?php require(__DIR__ . "/../templates/footer.php") ?>
</body>
</html>