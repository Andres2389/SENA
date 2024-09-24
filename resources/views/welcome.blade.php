<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSETP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        .bg-primary { background-color: #39A900; }
        .text-primary { color: #39A900; }
        .bg-secondary { background-color: #00324D; }
        .text-secondary { color: #00324D; }
        .bg-accent { background-color: #FBFBE2; }
        .hover-bg-hover { background-color: #385C57; }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

<div class="min-h-screen flex flex-col">
    <header class="flex justify-between items-center p-6 bg-white dark:bg-gray-800 shadow-md">
        <div class="flex items-center">
            <h1 class="text-2xl font-bold text-primary">SSETP</h1>
        </div>
        <div>
            <a href="/admin" class="px-4 py-2 bg-secondary text-white rounded hover:bg-hover">Login</a>
        </div>
    </header>

    <main class="flex-grow flex flex-col justify-center items-center text-center p-6">
        <h2 class="text-3xl font-bold mb-4 text-primary">Sistema de Seguimiento de Etapa Productiva</h2>
        <p class="text-lg mb-6 text-secondary">SSETP es un aplicativo web desarrollado en Laravel con Moonshine, TailwindCSS, Alpine.js y MySQL. Este sistema está diseñado para gestionar el seguimiento de los aprendices en el Centro de Formación, simplificando y automatizando el proceso de seguimiento.</p>
        <p class="text-lg mb-6 text-secondary">Proporciona a los responsables de la formación acceso rápido y sencillo a la información relevante sobre los aprendices.</p>
    </main>

    <footer class="bg-accent dark:bg-gray-800 text-center p-4">
        <p class="text-sm text-secondary">© 2024 SSETP. Todos los derechos reservados.</p>
    </footer>
</div>

</body>
</html>