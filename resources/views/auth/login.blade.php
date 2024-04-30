<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <meta charset="UTF-8">
    
    <meta name="Description" content="Login Interactivo ">
    <meta name="keywords" content="login, passwoard">
    <meta name="Semestre" content="2 Semestre">
    <meta name="Profesor" content="Mario Porras Porras">
    <meta name="autor" content="Cristian David Jimenez ">
    <meta name="Fecha" content="29/04/20:19">
</head>
<body class="bg-[#F1ECEB]">
    <div class="grid grid-cols-2 justify-center items-center">
        <!-- Imagen a la izquierda -->
        <div class="mx-auto">
            <img src="https://www.uniminuto.edu/sites/default/files/2021-02/alivios-financieros-dk.jpg" alt="Left Image" class="h-96 rounded-lg">
        </div>
        <!-- Formulario de login -->
        <div class=" bg-white rounded-lg shadow-md p-8 mx-auto w-[90%] ">
            <div class="brand_logo_container mb-4">
                <img src="https://thecreactives.com/wp-content/uploads/2023/06/Uniminuto-Logo.png" class="w-[300px] mx-auto" alt="Logo">
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Email" required>
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Contraseña" required>
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="remember" name="remember" class="mr-2 leading-tight">
                    <label for="remember" class="text-sm">Recuérdame</label>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Iniciar sesión</button>
                </div>
            </form>
            <!-- Mostrar mensaje de error de autenticación -->
            @if ($errors->has('email') || $errors->has('password'))
                <p class="text-red-500 text-xs italic mt-2">Las credenciales proporcionadas son incorrectas.</p>
            @endif
            <!-- Mostrar enlace para registro -->
            <div class="text-center mt-4">
                <a href="{{ route('auth.register') }}" class="inline-block text-sm text-blue-500 hover:text-blue-800">¿No tienes una cuenta? Regístrate</a>
            </div>
            <!-- Mostrar enlace para recuperar contraseña -->
            
        </div>
    </div>
</body>
</html>
