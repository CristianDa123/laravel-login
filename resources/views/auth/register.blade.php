<!DOCTYPE html>
<html lang="es">
<head>
    <title>Register</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body class="bg-[#F1ECEB]">
    <div class="grid grid-cols-2 justify-center items-center">
        <!-- Imagen a la izquierda -->
        <div class="mx-auto">
            <img src="https://www.uniminuto.edu/sites/default/files/2021-02/img-desktop3.jpg" alt="Left Image" class="h-96 rounded-lg">
        </div>
        <!-- Formulario de registro -->
        <div class=" bg-white rounded-lg shadow-md p-8 mx-auto w-[90%] ">
            <div class="brand_logo_container mb-4">
                <img src="https://thecreactives.com/wp-content/uploads/2023/06/Uniminuto-Logo.png" class="w-[300px] mx-auto" alt="Logo">
            </div>
            <form method="POST" action="{{ route('auth.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Confirm Password" required>
                </div>
                <div class="flex justify-end">
                    <!-- Cambiamos type="submit" por type="button" y agregamos un href -->
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Register</a>
                </div>
            </form>
            <div class="text-center mt-4">
                <!-- Enlace al inicio de sesión -->
                
            </div>
        </div>
    </div>
</body>
</html>
