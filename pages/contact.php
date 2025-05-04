<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    
    <!-- Debut formulaire contact-->
    <section class="w-4/5 max-w-[1200px] mx-auto p-8">
        <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-md overflow-hidden">
            <div class="flex-1 max-w-full md:max-w-[50%] p-8 flex flex-col">
                <h2 class="mb-6 text-gray-800 text-xl font-bold">Contactez-nous</h2>
                <form class="flex flex-col h-full" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="mb-4">
                        <label for="name" class="block mb-2 font-bold">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Entrez votre nom" required
                            class="w-full p-2 border border-gray-300 rounded-md" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                       
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 font-bold">Email</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre email" required
                            class="w-full p-2 border border-gray-300 rounded-md"
                            value="">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block mb-2 font-bold">Question</label>
                        <textarea id="message" name="message" placeholder="Entrez votre question ou message" required
                            class="w-full p-2 border border-gray-300 rounded-md h-24 resize-y"></textarea>
                       
                    </div>
                    <button type="submit" class="inline-block bg-[#6A664B] text-white border-none py-2 px-2 cursor-pointer rounded-lg transition-colors duration-300 hover:text-[#45a049] w-[150px]">Envoyer</button>
                </form>
            </div>
            <div class="flex-1 max-w-full md:max-w-[50%] flex">
                <img src="image/notebook-1130742_640.jpg" alt="Contact Image"
                    class="w-full h-full object-cover rounded-md">
            </div>
        </div>
    </section>
    <!-- Fin formulaire contact-->

</body>

</html>