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
    <section class="py-16 px-5 flex flex-col gap-8 justify-center items-center">
        <h1 class="text-4xl font-semibold">Nos Services</h1>
        <div class="flex gap-6">
            <div class="h-52 w-80 bg-neutral-300 flex flex-col items-center justify-center p-7 gap-4">
                <div class="text-2xl font-medium">Design UI/UX</div>
                <p class="text-center">Création d'interfaces modernes et intuitives pour améliorer l'expérience utilisateur.</p>
            </div>
            <div class="h-52 w-80 bg-neutral-300 flex flex-col items-center justify-center p-7 gap-4">
                <div class="text-2xl font-medium">Développement Web</div>
                <p class="text-center">Sites web performants et responsives, adaptés aux besoins de votre entreprise.</p>
            </div>
            <div class="h-52 w-96 bg-neutral-300 flex flex-col items-center justify-center p-7 gap-4">
                <div class="text-2xl font-medium">Automatisation & Solutions</div>
                <p class="text-center">Optimisation des processus et solutions digitales sur mesure pour gagner en efficacité.</p>
            </div>
        </div>
    </section>
    <?php require(__DIR__ . "/../templates/footer.php") ?>
</body>
</html>