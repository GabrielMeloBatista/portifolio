<!DOCTYPE html>
<html lang="pt-br" class="dark:bg-gray-900 dark:text-gray-100">

<head>
    @extends('layouts.app')
    @section('title', 'Contato')
</head>

<body class="bg-gray-100 text-gray-800 font-sans dark:bg-gray-900 dark:text-gray-100">
    @section('content')
        <div class="container mx-auto py-8">
            <h1 class="text-4xl font-bold mb-4">Entre em Contato</h1>
            <p class="mb-8">Se você tiver alguma dúvida ou quiser entrar em contato, sinta-se à vontade para me enviar uma mensagem.</p>
            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800 dark:shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Nome</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">E-mail</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium">Mensagem</label>
                <textarea id="message" name="message" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100"></textarea>
            </div>
            <button 
                type="submit" 
                class="px-4 py-2 rounded-md font-semibold transition-colors duration-200
                       bg-gradient-to-r from-blue-700 to-blue-500
                       hover:from-blue-800 hover:to-blue-600 hover:shadow-lg
                       focus:outline-none focus:ring-2 focus:ring-blue-400
                       dark:from-purple-600 dark:to-indigo-600
                       dark:hover:from-purple-700 dark:hover:to-indigo-700
                       dark:focus:ring-purple-400
                       shadow-md border border-blue-800">
                Enviar
            </button>
            </form>
        </div>
    @endsection
</body>
</html>